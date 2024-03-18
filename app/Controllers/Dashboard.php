<?php

namespace App\Controllers;

use App\Models\Common;
use App\Models\Settings;

class Dashboard extends BaseController
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

    public function dashboard()
    {
        if($this->request->isAJAX()){
            $result = $this->apiController->userLogin($this->request);
            return json_encode($result);            
        }

        $data = array();
        $data['page'] = "dashboard";
        return view(DASHBOARD_VIEW . '/dashboard', $data);
    }


    
}
