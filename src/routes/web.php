<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/health', function () {
    return 'Hello World';
});


$router->post('/sendOrder', 'Mail\Cart@send');
$router->post('/sendPhone', 'Mail\Phone@send');
$router->post('/sendEmail', 'Mail\Email@send');
$router->post('/sendMeasurement', 'Mail\Measurement@send');

