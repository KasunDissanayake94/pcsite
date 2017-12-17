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
                $i_id=($value['item_id']);
                $i_price=($value['price']);
                $i_image=($value['image']);
                $link= base_url().'assets/'.$i_image.'.jpg';
                $more_link=base_url().'index.php/link/getdata/'.$i_id;
                $price='Rs.'.$i_price.'/=';


                echo "<div class=\"member\">
                        <br>
                        <img style=\"font-size: 10px\" src=".$link. " alt=\"Click the link to see more info\"  />
                        <div class=\"name\">
                            <h4 style=\"font-size: 20px\" class=\"card-title\">
                                $i_name

                            </h4>
                            <p style=\"font-size:15px\"  class=\"card-text\">$price</p>
                            <p style=\"color: #003399; font-size: 15px\"  class=\"card-text\"><a href=".$more_link.">more</a></p>
                            <button style=\"padding: 15px 25px;
                              font-size: 9px;
                              text-align: center;
                              cursor: pointer;
                              outline: none;
                              color: #fff;
                              background-color: #00B4CC;
                              border: none;
                              border-radius: 15px;
                              box-shadow: 0 9px #999;\">Add to cart
                            </button>   
                    </div>
                        <br>


                        </div>";

            }
        }else{
            echo "No Item Found";
        }







    }
    public function fetch_users(){
        {
            $output = '';
            if (isset($_POST["query"])) {
                $this->load->model('fetch_model');

                $data['booktable']= $this->fetch_model->booktable($_POST["query"]);




            } else {
                $data['booktable'] = $this->Auth_model->booktable1();
            }

            if (!empty($data['booktable'])){
                echo '<table class="table" >
    <tr>
     <th>User ID</th>
     <th>User Name</th>
     <th>First Name</th>
     <th>Last Name</th>
     <th>Type</th>
     <th>New</th>
     <th>Delete</th>
     
     
    </tr>';
                foreach ($data['booktable'] as $objects)  {
                    $id=$objects->id;
                    //Call the admin controller calss to get the more information about the student
                    echo '<tr>
    <td>'.$objects->id.'</td>
    <td>'.$objects->username.'</td>
    <td>'.$objects->first_name.'</td>
    <td>'.$objects->last_name.'</td>
    <td>'.$objects->type.'</td>
    <td id="'.$objects->id.'">
        <button class="btn btn-basic" data-toggle="modal" data-target="#v'.$objects->id.'"">View</button>
    </td>
 
    <td id="'.$objects->id.'">
        <button class="btn btn-basic" data-toggle="modal" data-target="#d'.$objects->id.'"">Delete</button>
    </td>
    
   </tr>
   
     <!-- View Modal -->
    <div  id="v'.$objects->id.'" class="modal fade" role="dialog">
                <div class="modal-content">
                    <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">View Form</h4>
                </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="../controller/admin_controller.php" method="post">
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2">User ID :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="username" value="'.$objects->id.'" type="text" name="username" placeholder="Type Student ID here" required disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">First Name :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="firstname" value="'.$objects->first_name.'" type="text" name="firstname" placeholder="Type first name here" required disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Last Name :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="lastname" value="'.$objects->last_name.'" type="text" name="lastname" placeholder="Type last name here" required disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="area" value="'.$objects->username.'" name="area" placeholder="Enter area here" required disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Type:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" value="'.$objects->type.'" name="email" placeholder="Enter email here" required disabled/>
                                </div>
                            </div>                          
                            

                            <div class="modal-footer">
                                <button type="button" class="cancel" data-dismiss="modal">Close</button> 
                            </div>


                        </form>
                    </div>
                </div>
            </div>
    
   
       <!-- Delete Modal -->
           <div class="modal fade" id="d'.$objects->id.'" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Delete Form</h4>
                </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this data?</p>
            </div>
            <div class="modal-footer">
            <a href="../controller/admin_controller.php?delete_user_id='.$objects->id.'"><button type="button" class="add-project" >Yes</button> </a>
                                               
                        <button type="button" class="cancel" data-dismiss="modal">No</button>                        
                    </div>
          </div>
          
        </div>
      </div>
      
    </div>
   ';


                }

            } else {
                echo 'Data Not Found';
            }

        }


    }


}