<?php

namespace App\Controllers;

class OsnV2 extends BaseController
{
    protected $apiController;
    protected $settings;
    protected $common;
    protected $uri_segment;
    public function __construct()
    {
        $this->apiController = new APIController;
        $this->uri_segment = service('uri');
    }

    public function home()
    {
        $data=array();
        $data['page']="home";
        // echo '<pre>';print_r($data);die;
        return view(OSN_VIEW_V2.'/index',$data);
    }

    public function aboutUs()
    {
        $data=array();
        $data['page']="about-us";
        $data['title']=ucwords(strtolower(str_replace("-"," ",$data['page'])));
        // echo '<pre>';print_r($data);die;
        return view(OSN_VIEW_V2.'/pages/'.$data['page'],$data);
    }

    public function services()
    {
        $data=array();
        $data['page']="services";
        $data['title']=ucwords(strtolower(str_replace("-"," ",$data['page'])));
        // echo '<pre>';print_r($data);die;
        return view(OSN_VIEW_V2.'/pages/'.$data['page'],$data);
    }

    public function servicesPages($page)
    {
        $path = APPPATH.'views/'.OSN_VIEW_V2.'/pages/'.$page.'.php';
        if(file_exists($path)){
            $data=array();
            $data['page']=$page;
            $data['title']=ucwords(strtolower(str_replace("-"," ",$page)));
            $data['header_desc']="";
            // $data['about_us_content']= $this->settings->get_page_settings('about_us');
            // echo '<pre>';print_r($data);die;
            return view(OSN_VIEW_V2.'/pages/'.$page,$data);
        }else{
            return redirect()->to("/services");
        }
    }

    public function projects()
    {
        $data=array();
        $data['page']="projects";
        $data['title']=ucwords(strtolower(str_replace("-"," ",$data['page'])));
        // echo '<pre>';print_r($data);die;
        return view(OSN_VIEW_V2.'/pages/'.$data['page'],$data);
    }

    public function contactUs()
    {
        $data=array();
        $data['page']="contact-us";
        $data['title']=ucwords(strtolower(str_replace("-"," ",$data['page'])));
        // echo '<pre>';print_r($data);die;
        return view(OSN_VIEW_V2.'/pages/'.$data['page'],$data);
    }



    public function newsSubscribe()
    {
        if ($this->request->isAJAX()) {
            $result = $this->apiController->newsLetterSubcribe($this->request);
            return json_encode($result);
        }
        $result = array('status' => false, 'message' => ENTER_WRONG_URL);
        return json_encode($result);
    }

    public function contactUsForm()
    {
        if ($this->request->isAJAX()) {
            $result = $this->apiController->contactUsForm($this->request);
            return json_encode($result);
        }
        $result = array('status' => false, 'message' => ENTER_WRONG_URL);
        return json_encode($result);
    }






    // public function pages($page)
    // {
    //     $path = APPPATH.'views/'.OSN_VIEW_V2.'/pages/'.$page.'.php';
    //     // echo '<pre>';var_dump($path,$this->uri_segment->getRoutePath());die;
    //     if(file_exists($path) && in_array($page, PAGES_LIST)){
    //         $data=array();
    //         $data['page']=$page;
    //         $data['title']=ucwords(strtolower(str_replace("-"," ",$page)));
    //         $data['header_desc']="";
    //         // $data['about_us_content']= $this->settings->get_page_settings('about_us');
    //         // echo '<pre>';print_r($data);die;
    //         return view(OSN_VIEW_V2.'/pages/'.$page,$data);
    //     }else{
    //         // echo $path;die;
    //         return redirect()->to('/404');
    //     }
    // }
}
