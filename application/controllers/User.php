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

    public function manager(){

        if (($_SESSION['user_logged'])== FALSE ){
            $this->session->set_flashdata("error","Please loggin first to view this page!!!");
            redirect("auth/login1");
        }
        else{
            $this->load->view('profile');
        }
    }
    public function shop_director(){

        if (($_SESSION['user_logged'])== FALSE ){
            $this->session->set_flashdata("error","Please loggin first to view this page!!!");
            redirect("auth/login1");
        }
        else{
            $this->load->view('shopdirector_profile');
        }
    }
    public function editor(){

        if (($_SESSION['user_logged'])== FALSE ){
            $this->session->set_flashdata("error","Please loggin first to view this page!!!");
            redirect("auth/login1");
        }
        else{
            $this->load->view('editor_profile');
        }
    }
}