<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class IsLoggedin implements FilterInterface
{
    public function before(
        RequestInterface $request,
        $argument = null
    ){
        $session = session();
        if ($session->has('loggedIn') && $session->get('loggedIn') == true) { 
            return $request;
        } else{
            return redirect()->to('login');
        }

}
}