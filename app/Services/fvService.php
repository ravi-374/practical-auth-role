<?php

namespace App\Services;

use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

/**
 * Class fvService
 */
class fvService
{
    /**
     * @return PromiseInterface|Response
     */
    public function updateContact()
    {
        $token = 'xxx';
        $sessionId = config('services.session_id');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
            'x-fv-sessionid' => $sessionId,
            'Content-Type'   => 'application/json',
        ])->patch('https://api.filevine.io/core/contacts/1',[
            'email' => 'steve@gmail.com',
            'address' => '1844 Forest Avenue',
            'full_name' => 'Steve',
        ]);

        return $response;
    }
}
