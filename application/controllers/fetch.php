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
        if ($result){
            echo "Done";

        }
        else{
            echo "No such user Found";
        }



    }

}