<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class BasicAuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Credentials: true');
        header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        header("Content-Type: application/json; charset=UTF-8");

        if (empty($_SERVER['PHP_AUTH_USER'])) {
            die('you must login to access');
        } else {
            $username = $_SERVER['PHP_AUTH_USER'];
            $username = $_SERVER['PHP_AUTH_PW'];
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
