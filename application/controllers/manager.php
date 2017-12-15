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
    public function add_user_details(){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $type=$_POST['type'];
        //create an array and pass data
        $data = array(
            'username' => $username,
            'password' => $password,
            'fname' => $fname,
            'lname' => $lname,
            'type' => $type
        );

        $this->load->model('add_user',$data);
    }
    public function logout(){

        unset($_SESSION);
        session_destroy();
        redirect("auth/login","refresh");

    }
}

