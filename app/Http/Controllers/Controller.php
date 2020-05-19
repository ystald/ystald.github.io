<?php

namespace App\Http\Controllers;

use App\Services\DaDataService;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Traits\Macroable;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /** @var DaDataService */
    protected $daDataService;

    public function __construct(DaDataService $daDataService)
    {
        $this->daDataService = $daDataService;
    }

    public function index()
    {
        return view('list');
    }

    public function read()
    {
        $result = DB::table('orders')
            ->select()
            ->get()
            ->toArray();

        return response()->json($result);
    }

    public function form($id = 0)
    {
        return view('form', [
            'id' => $id
        ]);
    }

    public function item($id = 0)
    {
        $data = [
            'id' => 0,
            'objects' => [],
            'persons' => [],
        ];

        if ($id > 0) {
            $data = DB::table('orders')
                ->find($id);

            $data->objects = DB::table('order_objects')
                ->where('order_id', $id)
                ->get()
                ->toArray();

            $data->persons = DB::table('order_persons')
                ->where('order_id', $id)
                ->get()
                ->toArray();
        }

        return response()->json($data);
    }

    public function save(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $order = $data;
        $orderObjects = $data['objects'];
        $orderPersons = $data['persons'];

        unset($order['dadata']);
        unset($order['persons']);
        unset($order['objects']);

        $id = 0;
        if ($order['id'] == 0) {
            DB::table('orders')->insert($order);
            $id = DB::getPdo()->lastInsertId();
        } else {
            DB::table('orders')->where('id', $order['id'])->update($order);
            $id = $order['id'];
        }

        DB::table('order_objects')->where('order_id', $id)->delete();
        DB::table('order_persons')->where('order_id', $id)->delete();

        foreach ($orderObjects as $object) {
            $object['order_id'] = $id;
            DB::table('order_objects')->insert($object);
        }

        foreach ($orderPersons as $person) {
            $person['order_id'] = $id;
            $person['is_veterinar'] = 1;
            DB::table('order_persons')->insert($person);
        }

        return response()->json([
            'success' => true,
            'id' => $id,
        ]);
    }

    public function remove(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        DB::table('order_persons')->where('order_id', $data['id'])->delete();
        DB::table('order_objects')->where('order_id', $data['id'])->delete();
        DB::table('orders')->where('id', $data['id'])->delete();
        return response()->json([
            'success' => true,
        ]);
    }

    public function daData(Request $request)
    {
        $term = $request->get('term');

        $list = $this->daDataService->party($term);
        $result = [];
        foreach ($list['suggestions'] as $item) {
            $result[] = $item;
        }

        return response()->json($result);
    }

    public function download($id, Request $request)
    {
        $data = DB::table('orders')
            ->find($id);

        $data->objects = DB::table('order_objects')
            ->where('order_id', $id)
            ->get()
            ->toArray();

        $data->persons = DB::table('order_persons')
            ->where('order_id', $id)
            ->get()
            ->toArray();

        $template = $data->org_type==2 ? 'templates/ip' : 'templates/ul';

        $content = view($template, [
            'data' => $data
        ]);

        //$content = $view->render();
        //echo $content->render();
        //exit();

        return response()->downloadContent($content->render(), 'zayavlenie.doc');
    }

}