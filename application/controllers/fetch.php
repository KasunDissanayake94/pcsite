<?php
/**
 * Created by PhpStorm.
 * User: Kasun Dissanayake
 * Date: 10/8/2017
 * Time: 3:58 PM
 */
class fetch extends CI_Controller
{
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
    /**Live Search going on here **/
    public function livesearch(){

        $output = "";
        $data = $_GET['searchData'];

        $result = $this->auth_model->fetch_data();
        if ($result){
            foreach ($result as $key => $value) {
                $i_name=($value['item_name']);
                $i_price=($value['price']);
                $i_image=($value['image']);
                $link= base_url().'assets/'.$i_image.'.jpg';
                $price='Rs.'.$i_price.'/=';


                echo "<div class=\"member\">
                        <img style=\"font-size: 20px\" src=".$link. " alt=\"Click the link to see more info\"  />
                        <div class=\"name\">
                            <h4 style=\"font-size: 20px\" class=\"card-title\">
                                $i_name

                            </h4>
                            <p style=\"font-size:15px\"  class=\"card-text\">$price</p>
                            <p style=\"color: #003399; font-size: 15px\"  class=\"card-text\"><a href=\"#\">more</a></p>
                    </div>
                        <br>


                        </div>";

            }
        }else{
            echo "No Item Found";
        }







    }


}