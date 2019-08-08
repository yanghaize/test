<?php
namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\Controller;

class Index extends Controller
{

    function index()
    {
        // TODO: Implement index() method.
        $this->response()->write('hello 123');
        $this->response()->write(json_encode(print_r($this->response())));
    }
}
