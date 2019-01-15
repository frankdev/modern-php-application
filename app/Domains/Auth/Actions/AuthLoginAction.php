<?php
/**
 * Created by PhpStorm.
 * User: Computador
 * Date: 11/01/2019
 * Time: 23:31
 */

namespace App\Domains\Auth\Actions;


use App\Domains\Auth\Domain\Services\AuthLoginService;
use App\Domains\Auth\Responders\AuthLoginResponder;
use Psr\Http\Message\RequestInterface;
use Zend\Diactoros\ServerRequest;
use Zend\Diactoros\Response;

class AuthLoginAction
{

    protected $service;

    protected $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }


    public function __invoke(ServerRequest $request, $params)
    {
        $this->response->getBody()->write('<h1>Hello, World!</h1>');
        return  $this->response->withStatus(200);

    }

}