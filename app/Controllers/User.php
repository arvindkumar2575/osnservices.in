<?php

namespace App\Controllers;

use App\Models\Common;
use App\Models\Settings;

use function PHPSTORM_META\type;

class User extends BaseController
{
    protected $apiController;
    protected $session;
    protected $settings;
    protected $common;
    public function __construct()
    {
        $this->apiController = new APIController;
        $this->session = session();
        $this->settings = new Settings();
        $this->common = new Common();
    }

    public function login()
    {
        if($this->request->isAJAX()){
            $result = $this->apiController->userLogin($this->request);
            return json_encode($result);            
        }

        $data = array();
        $data['page'] = "login";
        return view(DASHBOARD_VIEW . '/login', $data);
    }

    public function register()
    {
        if($this->request->isAJAX()){
            $result = $this->apiController->userLogin($this->request);
            return json_encode($result);            
        }

        $data = array();
        $data['page'] = "register";
        return view(DASHBOARD_VIEW . '/register', $data);
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }

    public function verification()
    {
        $email = $this->request->getVar('email');
        if(!empty($email)){
            $result = $this->apiController->userVerification($this->request);
            return json_encode($result); 
        }
    }

    
}
