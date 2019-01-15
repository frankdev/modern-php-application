<?php
/**
 * Created by PhpStorm.
 * User: Computador
 * Date: 11/01/2019
 * Time: 22:29
 */

require_once __DIR__ . '/../vendor/autoload.php';

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$container = (new \League\Container\Container)->delegate(
    new \League\Container\ReflectionContainer
);

$strategy = (new \League\Route\Strategy\ApplicationStrategy)->setContainer($container);
$router = (new League\Route\Router)->setStrategy($strategy);


$router->map('GET', '/', function (\Psr\Http\Message\ServerRequestInterface $request) {
    $response = new Zend\Diactoros\Response;
    $response->getBody()->write('<h1>Hello, World!</h1>');
    return $response;
});

$router->map('GET', '/login', \App\Domains\Auth\Actions\AuthLoginAction::class);

$response = $router->dispatch($request);


// send the response to the browser
(new Zend\Diactoros\Response\SapiEmitter)->emit($response);