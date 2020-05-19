<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 09.07.14
 * Time: 8:44
 * To change this template use File | Settings | File Templates.
 */

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class DaDataService
{
    /** @var \GuzzleHttp\Client */
    protected $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client([
            'debug' => false,
        ]);
    }

    public function party($query)
    {
        $url = "https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/party";

        /** @var Response $response */
        $response = $this->client->get($url, [
            'query' => [
                'query' => $query,
            ],
            'headers' => [
                'Authorization' => 'Token 5832b488a2eec90b4a127f1de8f875de36a27c42',
            ]
        ]);

        $json = json_decode($response->getBody()->getContents(), true);

        return $json;
   }
}