<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->put('/user/register', function ($name) use ($app) {
    return JsonResponse('Hello world, this is register');
});

$app->post('/user/login', function ($name) use ($app) {
    return JsonResponse('Hello world, this is login');
});

$app->run();
