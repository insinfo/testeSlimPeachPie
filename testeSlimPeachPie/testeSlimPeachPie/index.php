<?php

require 'vendor/autoload.php';

$app = new Slim\App();

$app->get('/', function ($request, $response, $args) {
    return $response->getBody()->write("Hello ");
});

$app->get('/teste/t', function ($request, $response, $args) {
    return $response->getBody()->write("Hello word");
});

$app->run();


