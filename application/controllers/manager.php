<?php

class manager extends CI_Controller{

    public function my_profile(){

        $this->load->view('my_profile');
    }
    public function add_user(){
        $this->load->view('profile');
    }
    public function search_user(){
        $this->load->model('manager_model');
        $result = $this->manager_model->find_all_users();
        $data['user_list'] = null;
        if ($result){
            $data['user_list'] = $result;
            $this->load->view('search_user',$data);
        }
        else{
            echo "Page Not Found";
        }
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
            'first_name' => $fname,
            'last_name' => $lname,
            'type' => $type
        );

        $this->load->model('manager_model');
        $this->manager_model->add_user($data);
        $data['message'] = 'Data Inserted Successfully';
//Loading View
        $this->load->view('profile', $data);

    }

    public function logout(){

        unset($_SESSION);
        session_destroy();
        redirect("auth/login","refresh");

    }
}

