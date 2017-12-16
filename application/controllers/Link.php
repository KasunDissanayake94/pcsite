<?php

class Link extends CI_Controller{
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

        if ($x==1){

            $this->load->view('index');
        }
        elseif ($x==2){

            $this->load->view('about.php');
        }
        elseif ($x==3){

            $this->load->view('service.php');
        }
        elseif ($x==4){

            $this->load->view('blog.php');
        }
        elseif ($x==5){

            $this->load->view('contacts.php');
        }
        elseif ($x==6){

            $this->load->view('sales1.php');
        }

        elseif ($x=="sales"){

            $result = $this->auth_model->find_all_items();
            $data['item_list'] = null;
            if ($result){
                $data['item_list'] = $result;
                $this->load->view('sales.php',$data);
            }
            else{
                echo "Page Not Found";
            }
        }
        elseif ($x=="marketing"){

            $result = $this->auth_model->find_all_items();
            $data['item_list'] = null;
            if ($result){
                $data['item_list'] = $result;
                $this->load->view('marketing.php',$data);
            }
            else{
                echo "Page Not Found";
            }
        }

        elseif ($x=="services"){

            $this->load->view('services');
        }
        elseif ($x=="brands"){

            $this->load->view('brands');
        }



    }
    public function getdata($name){

        $result = $this->auth_model->find_details($name);


        $data['item_list'] = null;
        if ($result){
            $data['item_list'] = $result;
            $this->load->view('moreinfo',$data);
        }
        else{
            echo "Page Not Found";
        }
    }
}
