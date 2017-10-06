<?php

class Link extends CI_Controller{

    public function go($x){

        if ($x==1){

            $this->load->view('index');
        }
        elseif ($x==2){

            $this->load->view('about.php');
        }
        elseif ($x==3){

            $this->load->view('services.php');
        }
        elseif ($x==4){

            $this->load->view('blog.php');
        }
        elseif ($x==5){

            $this->load->view('contacts.php');
        }

        elseif ($x=="sales"){

            $this->load->view('sales');
        }
        elseif ($x=="marketing"){

            $this->load->view('marketing');
        }
        elseif ($x=="services"){

            $this->load->view('services');
        }
        elseif ($x=="brands"){

            $this->load->view('brands');
        }


    }
}
