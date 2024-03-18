<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $apiController;
    protected $settings;
    protected $common;
    public function __construct()
    {
        $this->apiController = new APIController;
    }

    public function home()
    {
        $data=array();
        $data['page']="home";
        // echo '<pre>';print_r($data);die;
        return view(OSN_VIEW.'/index',$data);
    }

    public function aboutUs()
    {
        $data = array();
        $data['page'] = "about-us";
        $data['title'] = "About Us";
        $data['header_desc'] = "";
        // $data['about_us_content']= $this->settings->get_page_settings('about_us');
        // echo '<pre>';print_r($data);die;
        return view(OSN_VIEW . '/about-us', $data);
    }

    public function contactUs()
    {
        if($this->request->isAJAX()){
            $form_type = $this->request->getVar('form_type');
            if($form_type=='ITR_Filing_Form'){
                $result = $this->apiController->contactUsFormData($this->request);
                return json_encode($result);
            }
            
        }

        $data=array();
        $data['page']="contact-us";
        $data['title']="Contact Us";
        $data['header_desc']="Fill below forms as per your reason of contact.";

        return view(OSN_VIEW.'/contact-us',$data);
    }

    public function services()
    {
        // echo $page;die;
        $data=array();
        $data['page']="services";
        $data['title']="Services";
        $data['header_desc']="";
        // $data['about_us_content']= $this->settings->get_page_settings('about_us');
        // echo '<pre>';print_r($data);die;
        return view(OSN_VIEW.'/services',$data);
    }

    public function pages($page)
    {
        $path = APPPATH.'views/'.OSN_VIEW.'/pages/'.$page.'.php';
        if(file_exists($path)){
            $data=array();
            $data['page']=$page;
            $data['title']=str_replace("-"," ",ucwords(strtolower($page)));
            $data['header_desc']="";
            // $data['about_us_content']= $this->settings->get_page_settings('about_us');
            // echo '<pre>';print_r($data);die;
            return view(OSN_VIEW.'/pages/'.$page,$data);
        }else{
            echo $path;die;
        }
    }
}
