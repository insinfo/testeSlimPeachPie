<?php
//to run project
//php -S localhost:8080 -t public public/index.php
require __DIR__.'/../vendor/autoload.php';

$app = new Slim\App();

$app->get('/', function ($request, $response, $args) {
    return $response->getBody()->write("Hello ");
});

$app->get('/teste/t', function ($request, $response, $args) {
    return $response->getBody()->write("/teste/t ");
});

$app->run();


