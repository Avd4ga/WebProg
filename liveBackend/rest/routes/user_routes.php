<?php

require_once __DIR__ . "/../services/UserService.class.php";
require_once __DIR__ . "/../authorization.php";

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

Flight::set("user_service", new UserService);

Flight::group("/users", function() {

    /**
     * @OA\Get(
     *      path="/users/all",
     *      tags={"Users"},
     *      summary="Get all users",
     *      @OA\Response(
     *           response=200,
     *           description="Get all users"
     *      )
     * )
     */
    Flight::route("GET /all", function() {
        $data = Flight::get("user_service")->get_all_users();
        Flight::json($data);
    });

    
    /**
     * @OA\Delete(
     *      path="/users/delete/{user_id}",
     *      tags={"Users"},
     *      summary="Delete user by id",
     *      @OA\Response(
     *           response=200,
     *           description="Delete the user with the specified id from the database, or get 'Invalid user id'"
     *      ),
     *      @OA\Parameter(@OA\Schema(type="number"), in="path", name="user_id", example="1", description="User ID")
     * )
     */
    Flight::route("DELETE /delete/@user_id", function($user_id) {

        // try {
        //     $token = Flight::request()->getHeader("Authentication");
        //     if(!$token) {
        //         Flight::halt(500, "Missing Auth Header");
        //     }
        //     $decoded_token = JWT::decode($token, new Key(Config::JWT_SECRET(), "HS256"));
        //     // Flight::json([
        //     //     "jwt_decoded" => $decoded_token,
        //     //     "user" => $decoded_token->user
        //     // ]);
        // } catch(\Exception $e) {
        //     Flight::halt(401, $e->getMessage()); // errori vezani za provjeru tokena, token expired, pogresan jwt_secret...
        // }

        
        authorize();

        if ($user_id == NULL || $user_id == "") {
            Flight::halt(500, "Invalid user id");
        }
        
        Flight::get("user_service")->delete_user($user_id);
        
        Flight::json(["message" => "you have successfully deleted an user"]);
    });

    /**
     * @OA\Post(
     *      path="/users/add",
     *      tags={"Users"},
     *      summary="Add an user",
     *      @OA\Response(
     *           response=200,
     *           description="Input the user info and add the user to the database"
     *      ),
     *      @OA\RequestBody(
     *          description="User data payload",
     *          @OA\JsonContent(
     *              required={"email","firstName", "lastName", "password"},
     *              @OA\Property(property="email", type="string", example="example@gmail.com", description="User Email"),
     *              @OA\Property(property="firstName", type="string", example="Example Name", description="User Name"),
     *              @OA\Property(property="lastName", type="string", example="Example Name", description="User Lastname"),
     *              @OA\Property(property="pwd", type="string", example="Example Password", description="User Password"),
     *          )
     *      )
     * )
     */
    Flight::route("POST /add", function() {
        $payload = Flight::request()->data->getData();

        if ($payload["firstName"] == NULL || $payload["firstName"] == "") {
            Flight::halt(500, "Invalid input");
        }

        $user = Flight::get("user_service")->add_user($payload);
        
        Flight::json(["message" => "You have successfully added a user", "data" => $user, "payload" => $payload]);
        
    });
});

