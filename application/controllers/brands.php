<?php

class brands extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->database();
        $this->load->library('form_validation');
        //load the login model
        $this->load->model('auth_model');
    }


    public function go($x){

        if ($x=="camera"){
            $this->load->model('detail_model');
            $result = $this->detail_model->find_items($x);
            $data['item_list'] = null;
            if ($result){
                $data['item_list'] = $result;
                $this->load->view('brands.php',$data);
            }
            else{
                echo "Page Not Found";
            }
        }
        elseif ($x=="cctv"){
            $this->load->model('detail_model');
            $result = $this->detail_model->find_items($x);
            $data['item_list'] = null;
            if ($result){
                $data['item_list'] = $result;
                $this->load->view('brands.php',$data);
            }
            else{
                echo "Page Not Found";
            }
        }


        elseif ($x=="network_accessories"){
            $this->load->model('detail_model');
            $result = $this->detail_model->find_items($x);
            $data['item_list'] = null;
            if ($result){
                $data['item_list'] = $result;
                $this->load->view('marketing_view.php',$data);
            }
            else{
                echo "Page Not Found";
            }
        }

    }
}
