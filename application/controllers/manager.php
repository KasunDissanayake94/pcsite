<?php

class manager extends CI_Controller{

    public function my_profile(){

        $this->load->view('my_profile');
    }
    public function add_user(){
        $this->load->view('profile');
    }
    public function search_user(){
        $this->load->view('search_user');
    }
    public function update_user(){
        $this->load->view('update_user');
    }
    public function logout(){

        unset($_SESSION);
        session_destroy();
        redirect("auth/login","refresh");

    }
}

