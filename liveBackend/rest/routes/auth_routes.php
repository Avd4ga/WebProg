<?php

require_once __DIR__ . "/../services/AuthService.class.php";

use Firebase\JWT\JWT;
use Firebase\JWT\Key;



Flight::before('start', function(&$params, &$output){
    // This is your middleware function
    // In this example, it checks if the request method is POST
    // If it's not, it halts the execution with a 405 status code (Method Not Allowed)
    if (Flight::request()->method !== 'POST' && Flight::request()->method !== 'GET') {
        Flight::halt(405, 'Method Not Allowed');
    }
});

/**
 * @OA\Post(
 *      path="/login",
 *      tags={"Auth"},
 *      summary="Login to system with email",
 *      @OA\Response(
 *           response=200,
 *           description="Returns user data and JWT"
 *      ),
 *      @OA\RequestBody(
 *          description="Credentials",
 *          @OA\JsonContent(
 *              required={"firstName", "pwd"},
 *              @OA\Property(property="email", type="string", example="example@gmail.com", description="User Email"),
 *              @OA\Property(property="pwd", type="string", example="Example Password", description="User Password"),
 *          )
 *      )
 * )
 */
Flight::route('POST /login', function() {
    $payload = Flight::request()->data->getData(); 

    $user = Flight::get('auth_service')->get_user_by_email($payload['email']); 

    // Password
    if(!$user || !password_verify($payload['pwd'], $user['pwd'])) {
        Flight::halt(500, 'Invalid email or password');
    }
    unset($user['pwd']); 
    
    $jwt_payload = [
        'user' => $user,
        'iat' => time(), // issued at, when the token has been issued
        'exp' => time() + (60 * 60 * 24) // valid for 1 day
    ];

    $token = JWT::encode(
        $jwt_payload,
        Config::JWT_SECRET(),
        'HS256'
    );

    Flight::json(
        array_merge($user, ['token' => $token])
    );
});

