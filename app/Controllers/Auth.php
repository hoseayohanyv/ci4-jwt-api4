<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use Firebase\JWT\JWT;

class Auth extends ResourceController
{
    public function login()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        // Contoh user hardcoded
        if ($email === 'hsayyv@gmail.com' && $password === 'k4bur4j4dul03') {
            $key = getenv('JWT_SECRET');
            $payload = [
                'iss' => 'localhost',
                'aud' => 'localhost',
                'iat' => time(),
                'exp' => time() + 3600, // 1 jam
                'uid' => 1,
                'email' => $email,
            ];

            $token = JWT::encode($payload, $key, 'HS256');

            return $this->respond([
                'status' => true,
                'message' => 'Login berhasil',
                'token' => $token
            ]);
        }

        return $this->respond([
            'status' => false,
            'message' => 'Login gagal'
        ], 401);
    }
}
