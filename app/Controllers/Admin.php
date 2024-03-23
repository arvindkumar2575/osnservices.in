<?php

namespace App\Controllers;

use App\Models\Common;
use App\Models\Media;
use App\Models\Pages;
use App\Models\Settings;
use App\Models\Users;

class Admin extends BaseController
{
    protected $apiController;
    protected $session;
    protected $settings;
    protected $common;
    protected $users;
    protected $pages;
    protected $media;
    public function __construct()
    {
        $this->apiController = new APIController;
        $this->session = session();
        $this->settings = new Settings();
        $this->common = new Common();
        $this->users = new Users();
        $this->pages = new Pages();
        $this->media = new Media();
    }

    public function to404() {
        return view('common/error_404');
    }

    public function admin()
    {
        // if($this->request->isAJAX()){
        //     $result = $this->apiController->userLogin($this->request);
        //     return json_encode($result);            
        // }

        $data = array();
        $data['page'] = "admin";
        $data['settings'] = $this->settings->get_all_settings();
        // echo '<pre>';print_r($data);die;
        return view(DASHBOARD_VIEW . '/admin', $data);
    }

    public function users()
    {
        if($this->request->isAJAX()){
            if($this->request->is("post")){
                
                // echo '<pre>';print_r($this->request->getVar());die;
                $res = $this->apiController->saveForm($this->request);
                $result = array('status'=>true,'res'=>$res);
                return json_encode($result);   

            }else if($this->request->is("get")){
                // echo 'aaaa';die;
                // echo '<pre>';print_r($this->request->getVar());die;
                $html = $this->apiController->fetchForm($this->request);
                if(!empty($html)){
                    $result = array('status'=>true,'html'=>$html);
                    return json_encode($result);            
                }else{
                    $result = array('status' => false, 'message' => 'Please try again!');
                    return $result;
                }


            }else{
                $result = array('status' => false, 'message' => 'Please try again!');
                return $result;
            }
        }
        
        // echo 'aaaa';die;
        $data = array();
        $data['parent'] = "admin";
        $data['page'] = "users";
        $data['users'] = $this->users->get_all_users();
        return view(DASHBOARD_VIEW . '/pages/users', $data);
    }

    public function pages()
    {
        if($this->request->isAJAX()){
            if($this->request->is("post")){
                
                // echo '<pre>';print_r($this->request->getVar());die;
                $res = $this->apiController->saveForm($this->request);
                $result = array('status'=>true,'res'=>$res);
                return json_encode($result);   

            }else if($this->request->is("get")){
                // echo 'aaaa';die;
                // echo '<pre>';print_r($this->request->getVar());die;
                $html = $this->apiController->fetchForm($this->request);
                if(!empty($html)){
                    $result = array('status'=>true,'html'=>$html);
                    return json_encode($result);            
                }else{
                    $result = array('status' => false, 'message' => 'Please try again!');
                    return $result;
                }


            }else{
                $result = array('status' => false, 'message' => 'Please try again!');
                return $result;
            }
        }
        
        
        // echo 'aaaa';die;
        $data = array();
        $data['parent'] = "admin";
        $data['page'] = "pages";
        $data['pages'] = $this->pages->get_all_pages();
        return view(DASHBOARD_VIEW . '/pages/pages', $data);
    }

    public function media()
    {
        if($this->request->isAJAX()){
            if($this->request->is("post")){
                // print_r($this->request->getFiles());
                // echo '<pre>';print_r($this->request->getVar());die;
                $res = $this->apiController->saveForm($this->request);
                // echo "<pre>";var_dump($res);die;
                $result = array('status'=>true,'res'=>$res);
                return json_encode($result);   

            }else if($this->request->is("get")){
                // echo 'aaaa';die;
                // echo '<pre>';print_r($this->request->getVar());die;
                $html = $this->apiController->fetchForm($this->request);
                if(!empty($html)){
                    $result = array('status'=>true,'html'=>$html);
                    return json_encode($result);            
                }else{
                    $result = array('status' => false, 'message' => 'Please try again!');
                    return $result;
                }


            }else{
                $result = array('status' => false, 'message' => 'Please try again!');
                return $result;
            }
        }

        $data = array();
        $data['parent'] = "admin";
        $data['page'] = "media";
        $data['media'] = $this->media->get_all_media();
        return view(DASHBOARD_VIEW . '/pages/media', $data);
    }


    
}
