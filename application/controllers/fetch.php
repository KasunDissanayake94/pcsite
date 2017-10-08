<?php
/**
 * Created by PhpStorm.
 * User: Kasun Dissanayake
 * Date: 10/8/2017
 * Time: 3:58 PM
 */
class Auth extends CI_Controller
{

    /**Live Search going on here **/
    public function live_search(){

        $output = "";
        $data = $_GET['searchData'];

        $result = $this->auth_model->fetch_data();
        if(is_null($this->input->get('id')))
        {

            $this->load->view('blog');


        }
        else
        {
            $this->load->model('auth_model');

            $data['dataset']=$this->auth_model->fetch_data($this->input->get('id'));
            foreach (dataset as){

            }



        }



    }

}