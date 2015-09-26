<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->put('/user/register', function (Request $request) use ($app) {
    return new JsonResponse('Hello world, this is register');
});

$app->post('/user/login', function (Request $request) use ($app) {
    return new JsonResponse('Hello world, this is login');
});
$app['debug'] = true;
$app->run();
