<?php

namespace Kapi\Core;

use Kapi\Http\Response;
use Kapi\Http\ServerRequest;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class App
{

    /**
     * @param ServerRequestInterface|null $request
     * @return Response
     */
    public function run(ServerRequestInterface $request = null)
    {
        $request = $request ?? new ServerRequest($_SERVER, $_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
        $uri = $request->getUri()->getPath();
        
        $response = new Response();
        $response->getBody()->write('Erreur 404');
        return $response->withStatus(200);
    }


    public function emit(ResponseInterface $response)
    {

    }

}
