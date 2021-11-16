<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthCheckFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
       if(!session()->has('loggedUser')){
            return redirect()->to('login')->with('fail','You have to login again for go back..');
       }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}