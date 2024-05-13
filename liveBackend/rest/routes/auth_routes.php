<?php

require_once __DIR__ . "/../services/AuthService.class.php";

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

Flight::set("auth_service", new AuthService);

Flight::group("/auth", function() {
     
    /**
     * @OA\Post(
     *      path="/auth/login",
     *      tags={"auth"},
     *      summary="Login to system with email",
     *      @OA\Response(
     *           response=200,
     *           description="Returns user data and JWT"
     *      ),
     *      @OA\RequestBody(
     *          description="Credentials",
     *          @OA\JsonContent(
     *              required={"firstName", "password"},
     *              @OA\Property(property="email", type="string", example="example@gmail.com", description="User Email"),
     *              @OA\Property(property="pwd", type="string", example="Example Password", description="User Password"),
     *          )
     *      )
     * )
     */
    Flight::route("POST /login", function() {
        $payload = Flight::request()->data->getData(); // ovo se proslijedjuje kroz login formu

        $user = Flight::get("auth_service")->get_user_by_email($payload["email"]); // user nam je user koji smo fetchali iz base na osnovu emaila

        // Password

        if(!$user || !password_verify($payload["pwd"], $user["pwd"])) {
            Flight::halt(500, "Invalid email or password");
        }
        unset($user["pwd"]); // we don't even want to return the hashed password of the user
        
        $jwt_payload = [
            "user" => $user,
            "iat" => time(), // issued at, when the token has been issued
            "exp" => time() + (60 * 60 * 24) // valid for 1 day
        ];

        $token = JWT::encode(
            $jwt_payload,
            JWT_SECRET,
            "HS256"
        );

        Flight::json(
            array_merge($user, ["token" => $token])
        );
    });

    
});