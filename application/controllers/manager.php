<?php

class manager extends CI_Controller{

    public function my_profile(){
        $this->load->view('my_profile');
    }
    public function add_user(){
        $this->load->view('profile');
    }
}

