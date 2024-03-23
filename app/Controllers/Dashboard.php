<?php

namespace App\Controllers;

use App\Models\Common;
use App\Models\Settings;

class Dashboard extends BaseController
{
    protected $apiController;
    protected $session;
    public function __construct()
    {
        $this->apiController = new APIController;
        $this->session = session();
    }

    public function dashboard()
    {
        if($this->request->isAJAX()){
            $result = $this->apiController->userLogin($this->request);
            return json_encode($result);            
        }

        $data = array();
        $data['page'] = "dashboard";
        $data['leads'] = $this->apiController->getAllLeads("contactUs");
        // echo '<pre>';print_r($data);die;
        return view(DASHBOARD_VIEW . '/dashboard', $data);
    }


    
}
