<?php
/**
 * Created by PhpStorm.
 * User: Kasun Dissanayake
 * Date: 10/1/2017
 * Time: 8:56 PM
 */
class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if (($_SESSION['user_logged'])== FALSE ){
            $this->session->set_flashdata("error","Please loggin first to view this page!!!");
            redirect("auth/login");
        }
    }

    public function profile(){
        $this->load->view('profile');
        if (($_SESSION['user_logged'])== FALSE ){
            $this->session->set_flashdata("error","Please loggin first to view this page!!!");
            redirect("auth/login");
        }
    }
}