<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class AuthenticateChat extends Middleware
{
    /**
     * It is for an api, so we don't need to redirect to a login page.
     * We just need to return a json response.
     */
    protected function redirectTo(Request $request): ?string
    {
        header('Content-Type: application/json');
        die(json_encode([
            'status' => 'error',
            'msg' => 'Unauthorized'
        ]));
    }
}
