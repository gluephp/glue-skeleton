<?php namespace App\Controllers;

use Glue\Http\Request;
use Glue\Http\Response;
use Glue\Config\Config;

class HomeController
{
    public function __construct(Request $request, Response $response)
    {
        $this->request  = $request;
        $this->response = $response;
    }

    public function home($param = null)
    {
        return "Hello world {$param}";
    }
}