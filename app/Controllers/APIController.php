<?php

namespace App\Controllers;

use App\Models\Common;
use App\Models\Pages;
use App\Models\Settings;
use DateTime;

class APIController extends BaseController
{
    protected $session;
    protected $settings;
    protected $common;
    protected $pages;
    public function __construct()
    {
        $this->session = session();
        $this->settings = new Settings();
        $this->common = new Common();
        $this->pages = new Pages();
    }

    public function contactUsFormData($request)
    {
        $form_type = $request->getVar('form_type');
        // echo '<pre>';print_r($form_type);die;
        if ($form_type == 'ITR_Filing_Form') {
            $first_name = $request->getVar('first_name');
            $last_name = $request->getVar('last_name');
            $email_id = $request->getVar('email_id');
            $mobile_no = $request->getVar('mobile_no');
            $reason_options = $request->getVar('reason_options');
            $default_message = $request->getVar('default_message');
            $itr_options = $request->getVar('itr_options');
            // echo '<pre>';var_dump($first_name,$last_name,$email_id,$mobile_no,$reason_options);die;
            if (empty($first_name) || empty($last_name) || empty($email_id) || empty($mobile_no) || empty($reason_options)) {
                $result = array('status' => false, 'message' => 'All fields are required!');
                return $result;
            } else {
                $res = $this->saveContactUsData($first_name, $last_name, $email_id, $mobile_no, $reason_options, $default_message, $itr_options);
                if ($res = 1) {
                    $result = array('status' => true, 'message' => 'Thank you!<br>We will contact you shortly.');
                    return $result;
                } else {
                    $result = array('status' => false, 'message' => 'Please try again!');
                    return $result;
                }
            }
        }
        $result = array('status' => false, 'message' => 'Invalid request!');
        return $result;
    }

    private function saveContactUsData($first_name, $last_name, $email_id, $mobile_no, $reason_options, $default_message, $itr_options)
    {
        // echo '<pre>';var_dump($first_name,$last_name,$email_id,$mobile_no);die;
        $currentDate = new DateTime();
        $user_data = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email_id' => $email_id,
            'mobile_no' => $mobile_no,
            'reason_options' => $reason_options,
            'default_message' => $default_message,
            'itr_options' => $itr_options,
            'created_at' => $currentDate->format('Y-m-d H:i:s'),
            'updated_at' => $currentDate->format('Y-m-d H:i:s'),
        );
        // echo '<pre>';print_r($user_data);die;
        $user_id = $this->common->data_insert('tbl_contact_form', $user_data);
        if ($user_id) {
            return $user_id;
        } else {
            return false;
        }
    }


    public function userLogin($request)
    {
        $form_type = $request->getVar('form_type');
        $request_data = $request->getVar('request');
        // echo '<pre>';var_dump($request_data);die;
        if ($form_type == 'User_Login_Form') {
            $username = $request->getVar('username');
            $password = $request->getVar('password');
            if (empty($username) || empty($password)) {
                $result = array('status' => false, 'message' => 'All fields are required!');
                return $result;
            } else {
                $user_exit = $this->userValidate($username, $password);
                if ($user_exit) {
                    if (isset($request_data) && !empty($request_data)) {
                        $req_data = json_decode(base64_decode($request_data));
                        if (isset($req_data->course_id) && isset($req_data->plan_id)) {
                            $d = array(
                                'user_id' => session("usersession")['id'],
                                'course_id' => $req_data->course_id,
                                'plan_id' => $req_data->plan_id
                            );
                            $c = $this->common->get_multiple_row('tbl_users_course_plan_mapping', $d);
                            if (!$c) {
                                $u = $this->common->data_insert('tbl_users_course_plan_mapping', $d);
                            }
                        } else {
                            $result = array('status' => false, 'message' => 'Request is incorrect!');
                            return $result;
                        }
                    }
                    $result = array('status' => true, 'message' => 'You are successfully logged in!');
                    return $result;
                } else {
                    $result = array('status' => false, 'message' => 'Please try again!');
                    return $result;
                }
            }
        } else if ($form_type == 'User_Register_Form') {
            $first_name = $request->getVar('first_name');
            $last_name = $request->getVar('last_name');
            $username = $request->getVar('username');
            $password = $request->getVar('password');
            if (empty($first_name) && empty($last_name) && empty($username) || empty($password)) {
                $result = array('status' => false, 'message' => 'All fields are required!');
                return $result;
            } else {
                $user_exit = $this->common->get_single_row('tbl_users', 'username', $username);
                // echo '<pre>';var_dump($first_name, $last_name, $username, $password,$user_exit);die;
                if (!$user_exit) {
                    $user_id = $this->userRegister($first_name, $last_name, $username, $password);
                    if ($user_id) {
                        if (isset($request_data) && !empty($request_data)) {
                            $req_data = json_decode(base64_decode($request_data));
                            if (isset($req_data->course_id) && isset($req_data->plan_id)) {
                                $d = array(
                                    'user_id' => $user_id,
                                    'course_id' => $req_data->course_id,
                                    'plan_id' => $req_data->plan_id
                                );
                                $u = $this->common->data_insert('tbl_users_course_plan_mapping', $d);
                            } else {
                                $result = array('status' => false, 'message' => 'Request is incorrect!');
                                return $result;
                            }
                        }
                        $result = array('status' => true, 'message' => 'You have successfully register!<br>You will get email notification within 5hr.', 'id' => $user_id);
                        return $result;
                    } else {
                        $result = array('status' => false, 'message' => 'Please try again!');
                        return $result;
                    }
                } else {
                    $result = array('status' => false, 'message' => 'Username already registered!');
                    return $result;
                }
            }
        }
        $result = array('status' => false, 'message' => 'Invalid request!');
        return $result;
    }

    private function userValidate($username, $password)
    {
        $user_data = $this->common->get_user_login($username, md5($password));
        // echo '<pre>';var_dump($user_data);die;
        if (isset($user_data) && !empty($user_data) && $user_data["username"] == $username) {
            $usersession = array(
                'id' => $user_data['id'],
                'isLoggedIn' => true
            );
            $this->session->set("usersession", $usersession);
            return true;
        } else {
            return false;
        }
    }

    private function userRegister($first_name, $last_name, $username, $password)
    {
        $currentDate = new DateTime();
        $user_data = array(
            'username' => $username,
            'password' => md5($password),
            'first_name' => $first_name,
            'last_name' => $last_name,
            'verification_code' => md5($username),
            'created_at' => $currentDate->format('Y-m-d H:i:s'),
            'updated_at' => $currentDate->format('Y-m-d H:i:s'),
        );
        $user_id = $this->common->data_insert('tbl_users', $user_data);
        if ($user_id) {
            return $user_id;
        } else {
            return false;
        }
    }

    public function userVerification($request)
    {
        $email = $request->getVar('email');
        $verification_code = $request->getVar('verification_code');
        if (isset($email) && !empty($email) && isset($verification_code) && !empty($verification_code)) {
            $user_data = $this->common->get_single_row('users', 'username', $email);
            // echo '<pre>';print_r($user_data);die;
            if (isset($user_data) && !empty($user_data)) {
                if ($user_data['verified'] == '1') {
                    $result = array('status' => true, 'message' => 'You are already verified!');
                    return $result;
                } else if ($user_data['verification_code'] == $verification_code) {
                    $data = $this->common->data_single_update('tbl_users', 'id', $user_data['id'], array('verified' => 1));
                    if ($data) {
                        $result = array('status' => true, 'message' => 'User successfully verified!');
                        return $result;
                    } else {
                        $result = array('status' => false, 'message' => 'Invalid User!');
                        return $result;
                    }
                } else {
                    $result = array('status' => false, 'message' => 'Verification failed!');
                    return $result;
                }
            } else {
                $result = array('status' => false, 'message' => 'Please try again!');
                return $result;
            }
        }
        $result = array('status' => false, 'message' => 'Invalid request!');
        return $result;
    }



    public function fetchForm($request)
    {
        // echo '<pre>';var_dump("inside fetchForm");die;
        $html = '';
        $formname = $request->getVar("formname");
        switch ($formname) {
            case 'pages':
                $data = array();
                $data['formname'] = $formname;
                $data['action'] = $request->getVar("action");
                if ($data['action'] == 'add') {
                    $html = view(DASHBOARD_VIEW . '/components/forms/add-edit-pages', $data);
                } else if ($data['action'] == 'edit') {
                    $page_id = $request->getVar("attr_id");
                    $pageData = $this->common->get_data("tbl_pages", array("id" => $page_id));
                    $data = array_merge($data, $pageData);
                    // echo "<pre>";print_r($data);die;
                    $html = view(DASHBOARD_VIEW . '/components/forms/add-edit-pages', $data);
                } else if ($data['action'] == 'design') {
                    $page_id = $request->getVar("attr_id");
                    $layout = $this->common->get_data("tbl_media", array("optional_value" => "layout", "status" => "1"), array("id", "optional_value", "display_name", "url"), "multiple");
                    $pageDesign = $this->common->get_data("tbl_pages", array("id" => $page_id), array("id", "design_layout"));
                    $pageDetail = $this->pages->get_page($page_id);
                    // $data = array_merge($data,$pageDesign);
                    $data['layout'] = $layout;
                    $data['design_layout'] = $pageDesign['design_layout']; //from tbl_design_layout
                    $data['page_detail'] = $pageDetail;
                    // echo "<pre>";print_r($data);die;
                    $html = view(DASHBOARD_VIEW . '/components/forms/design-pages', $data);
                } else if ($data['action'] == 'delete') {
                    $data['id'] = $request->getVar("attr_id");
                    $html = view(DASHBOARD_VIEW . '/components/forms/delete-pages', $data);
                }
                break;
            case 'media':
                // echo "<pre>";var_dump("aaaa");die;
                $data = array();
                $data['formname'] = $formname;
                $data['action'] = $request->getVar("action");
                if ($data['action'] == 'add') {
                    $html = view(DASHBOARD_VIEW . '/components/forms/add-edit-media', $data);
                } else if ($data['action'] == 'edit') {
                    $page_id = $request->getVar("attr_id");
                    $pageData = $this->common->get_data("tbl_media", array("id" => $page_id));
                    $data = array_merge($data, $pageData);
                    // echo "<pre>";print_r($data);die;
                    $html = view(DASHBOARD_VIEW . '/components/forms/add-edit-media', $data);
                } else if ($data['action'] == 'delete') {
                    $data['id'] = $request->getVar("attr_id");
                    $html = view(DASHBOARD_VIEW . '/components/forms/delete-media', $data);
                }
                break;
            default:
                # code...
                break;
        }

        return $html;
    }

    public function saveForm($request)
    {
        $result = array();
        $data = $request->getVar();
        // echo microtime(true);
        // echo '<pre>';print_r($data);die;
        switch ($data['formname']) {
            case 'pages':
                if ($data['action'] == 'add') {
                    $savedata = array(
                        'name' => $data['name'],
                        'slug' => $data['slug'],
                        'status' => $data['status']
                    );
                    $save_id = $this->common->data_insert('tbl_pages', $savedata);
                    if ($save_id) {
                        $result['page_id'] = $save_id;
                    }
                } else if ($data['action'] == 'edit') {
                    $savedata = array(
                        'name' => $data['name'],
                        'slug' => $data['slug'],
                        'status' => $data['status']
                    );
                    $page_id = $request->getVar("attr_id");
                    // echo '<pre>';print_r($data);die;
                    $save_id = $this->common->data_update('tbl_pages', array('id' => $page_id), $savedata);
                    if ($save_id) {
                        $result['page_id'] = $save_id;
                    }
                } else if ($data['action'] == 'delete') {
                    $page_id = $request->getVar("attr_id");
                    $save_id = $this->common->data_update('tbl_pages', array('id' => $page_id), array('status' => '0'));
                    if ($save_id) {
                        $result['page_id'] = $save_id;
                    }
                }
                break;

            case 'media':
                if ($data['action'] == 'add') {
                    $media_file = $request->getFiles()['file'];
                    if ($media_file->isValid() && !$media_file->hasMoved()) {
                        $randomName = $media_file->getRandomName();
                        $timestamp_ = (string)microtime(true);
                        $timestamp = str_replace('.', '_', $timestamp_);
                        $fileExtNameCheck = explode(".", $randomName);
                        $fileNameExt = $timestamp . '.' . $fileExtNameCheck[1];
                        if ($data['type'] != $fileExtNameCheck[1]) {
                            $result = array('status' => false, 'message' => 'File type not matched!');
                            return json_encode($result);
                        }

                        $status = $media_file->move(UPLOAD_IMAGES, '/' . $fileNameExt);
                        if (!$status) {
                            $result = array('status' => false, 'message' => 'Please try again!');
                            return json_encode($result);
                        }
                        $data['name'] = $timestamp;
                        $data['url'] = UPLOAD_IMAGES . '/' . $fileNameExt;
                    }
                    // else{
                    //     $result = array('status' => false, 'message' => 'Please try again!');
                    //     return json_encode($result);
                    // }
                    $savedata = array(
                        'type' => $data['type'],
                        'optional_value' => $data['optional_value'],
                        'name' => $data['name'],
                        'display_name' => $data['display_name'],
                        'url' => $data['url'],
                        'alt' => $data['alt'],
                        'status' => $data['status'] ?? "0"
                    );
                    $save_id = $this->common->data_insert('tbl_media', $savedata);
                    if ($save_id) {
                        $result['media_id'] = $save_id;
                    }
                } else if ($data['action'] == 'edit') {
                    $savedata = array(
                        'type' => $data['type'],
                        'optional_value' => $data['optional_value'],
                        // 'name'=>$data['name'],
                        'display_name' => $data['display_name'],
                        'alt' => $data['alt'],
                        'status' => $data['status']
                    );
                    // echo '<pre>';print_r($data);die;
                    $media_file = $request->getFiles()['file'];
                    if (isset($media_file) && $media_file->isValid() && !$media_file->hasMoved()) {
                        $randomName = $media_file->getRandomName();
                        $timestamp_ = (string)microtime(true);
                        $timestamp = str_replace('.', '_', $timestamp_);
                        $fileExtNameCheck = explode(".", $randomName);
                        $fileNameExt = $timestamp . '.' . $fileExtNameCheck[1];
                        if ($data['type'] != $fileExtNameCheck[1]) {
                            $result = array('status' => false, 'message' => 'File type not matched!');
                            return json_encode($result);
                        }

                        $status = $media_file->move(UPLOAD_IMAGES, '/' . $fileNameExt);
                        if (!$status) {
                            $result = array('status' => false, 'message' => 'Please try again!');
                            return json_encode($result);
                        }
                        $savedata['name'] = $timestamp;
                        $savedata['url'] = UPLOAD_IMAGES . '/' . $fileNameExt;
                    }
                    // else{
                    //     $result = array('status' => false, 'message' => 'Please try again!');
                    //     return json_encode($result);
                    // }

                    $media_id = $request->getVar("attr_id");
                    // echo '<pre>';print_r($savedata);die;
                    $save_id = $this->common->data_update('tbl_media', array('id' => $media_id), $savedata);
                    if ($save_id) {
                        $result['media_id'] = $save_id;
                    }
                } else if ($data['action'] == 'delete') {
                    $media_id = $request->getVar("attr_id");
                    // var_dump($media_id);
                    // echo '<pre>';print_r($data);die;
                    $save_id = $this->common->data_update('tbl_media', array('id' => $media_id), array('status' => '0'));
                    if ($save_id) {
                        $result['media_id'] = $save_id;
                    }
                }
                break;

            default:
                # code...
                break;
        }
        return $result;
    }

    public function newsLetterSubcribe($request)
    {
        // echo "<pre>";print_r($request->getVar());die;

        $email = $request->getVar('email');
        if (isset($email) && !empty($email)) {
            $currentDate = new DateTime();
            $savedata = array(
                "email" => $email,
                'created_at' => $currentDate->format('Y-m-d H:i:s'),
            );
            $save_id = $this->common->data_insert('tbl_news_subscribe', $savedata);
            if ($save_id) {
                $result = array('status' => true, 'message' => 'You are successfully added in our NewsLetter Subscription!');
                return $result;
            } else {
                $result = array('status' => false, 'message' => 'Please try again!');
                return $result;
            }
        } else {
            $result = array('status' => false, 'message' => 'Please enter your email id!');
            return $result;
        }
    }

    public function contactUsForm($request)
    {
        // echo "<pre>";print_r($request->getVar());die;

        $error = "";
        $first_name = $request->getVar('first_name');
        $mobile_no = $request->getVar('mobile_no');
        $email_id = $request->getVar('email_id');
        $reason_options = $request->getVar('reason_options');
        $default_message = $request->getVar('default_message');

        if (isset($first_name) && empty($first_name)) {
            $error = 'Please Enter Your Name!';
        } elseif (isset($mobile_no) && empty($mobile_no)) {
            $error = 'Please Enter Your Phone No!';
        } elseif (isset($email_id) && empty($email_id)) {
            $error = 'Please Enter Your Email Id!';
        } elseif (isset($reason_options) && empty($reason_options)) {
            $error = 'Please Select Subject!';
        }

        if (isset($error) && !empty($error)) {
            $result = array('status' => false, 'message' => $error);
            return $result;
        }

        $currentDate = new DateTime();
        $savedata = array(
            "first_name" => $first_name,
            "mobile_no" => $mobile_no,
            "email_id" => $email_id,
            "reason_options" => $reason_options,
            "default_message" => $default_message,
            'created_at' => $currentDate->format('Y-m-d H:i:s'),
            'updated_at' => $currentDate->format('Y-m-d H:i:s'),
        );
        // echo "<pre>";print_r($savedata);die;
        $save_id = $this->common->data_insert('tbl_contact_form', $savedata);
        if ($save_id) {
            $result = array('status' => true, 'message' => 'Your details are saved.<br>Our representative will contact you soon!');
            return $result;
        } else {
            $result = array('status' => false, 'message' => 'Please try again!');
            return $result;
        }
    }
}
