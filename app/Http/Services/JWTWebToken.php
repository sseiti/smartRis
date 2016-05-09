<?php

namespace App\Http\Services;

use \Firebase\JWT\JWT;

class JWTWebToken
{
    public function create(array $data)
    {
        $payload = [
            'sub' => $data,
            'iat' => time(),
            'exp' => time() + (2 * 7 * 24 * 60 * 60),
        ];

        return JWT::encode($payload, env('APP_KEY'));
    }

    public function decode($jwt)
    {
        return JWT::decode($jwt, env('APP_KEY'), array('HS256'));
    }
}
