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
            $result = $this->apiController->leads($this->request);
            return json_encode($result);
        }

        $data = array();
        $data['page'] = "dashboard";
        $data['leadCounts'] = $this->apiController->getLeads($this->request,"leadCounts");
        $data['userSubscribe'] = $this->apiController->getLeads($this->request,"userSubscribe");
        // echo '<pre>';print_r($data);die;
        return view(DASHBOARD_VIEW . '/dashboard', $data);
    }

    public function queries()
    {
        if($this->request->isAJAX()){
            $result = $this->apiController->leads($this->request);
            return json_encode($result);
        }

        $data = array();
        $data['parent'] = "dashboard";
        $data['page'] = "queries";
        $data['pagination'] = $this->apiController->getPagination($this->request,"contact_form");
        $data['leads'] = $this->apiController->getLeads($this->request,"contactUs");
        // echo '<pre>';print_r($data);die;
        return view(DASHBOARD_VIEW . '/pages/queries', $data);
    }

    public function subscribe()
    {
        if($this->request->isAJAX()){
            $result = $this->apiController->leads($this->request);
            return json_encode($result);
        }

        $data = array();
        $data['parent'] = "dashboard";
        $data['page'] = "subscribe";
        $data['pagination'] = $this->apiController->getPagination($this->request,"news_subscribe");
        $data['leads'] = $this->apiController->getLeads($this->request,"news_subscribe");
        // echo '<pre>';print_r($data);die;
        return view(DASHBOARD_VIEW . '/pages/subscribe', $data);
    }


    
}
