<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $usersession = session()->get('usersession');
        $loginPage = str_contains(current_url(),"/login") ;
        // echo '<pre>';print_r($usersession);die;
        if (isset($usersession['isLoggedIn'])) {
            // if user is loggedIn then he is here
            if($loginPage){
                // if user is loggedIn and try to enter login page he is here 
                return redirect()->to('/');
            }
        }else{
            if(!$loginPage){
                return redirect()->to('/login');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}