<?php

/**
 * @OA\Info(
 *   title="API",
 *   description="Web programming API",
 *   version="1.0",
 *   @OA\Contact(
 *     email="avdo.vladavic@ibu.edu.ba",
 *     name="Avdo Vladavic"
 *   )
 * ),
 * @OA\OpenApi(
 *   @OA\Server(
 *       url=BASE_URL
 *   )
 * )
 * @OA\SecurityScheme(
 *     securityScheme="ApiKey",
 *     type="apiKey",
 *     in="header",
 *     name="Authentication"
 * )
 */
