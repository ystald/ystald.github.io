<?php

namespace App\Providers;

use Illuminate\Http\Response;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(ResponseFactory $factory)
    {
        $factory->macro('downloadContent', function ($content, $fileName) use ($factory) {
            return $factory->make($content, 200, [
                'Content-Type' => 'application/x-unknown',
                'Content-Disposition' => 'attachment; filename=' . $fileName
            ]);
        });
    }
}