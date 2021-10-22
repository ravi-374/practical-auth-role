<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

/**
 * Class fvServiceRepository
 */
class fvService extends BaseRepository
{
    public function updateContact()
    {
        $headers = [
            'Authorization' => 'Bearer '.$token,
            'x-fv-sessionid' => 'xxxxxxxxxxxxx',
        ];

        $response = Http::post('https://api.filevine.io/core/contacts/1',[
            'headers' => $headers,
        ]);

        return $response;
    }
}
