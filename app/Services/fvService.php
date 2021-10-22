<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

/**
 * Class fvService
 */
class fvService
{
    public function updateContact()
    {
        $token = 'xxx';
        $headers = [
            'Authorization' => 'Bearer '.$token,
            'x-fv-sessionid' => 'xxxxxxxxxxxxx',
        ];

        $response = Http::patch('https://api.filevine.io/core/contacts/1',[
            'headers' => $headers,
        ]);

        return $response;
    }
}
