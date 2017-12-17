<?php 

class Auth extends CI_Controller
{

    public function home()
    {

        $this->load->view('index');
    }

    public function login()
    {

        $msg = '<font color=green>Enter your username and password here to sign in.</font><br />';
        $data['msg'] = $msg;
        $this->load->view('login1', $data);
    }

    public function login_user()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

        if ($this->form_validation->run() == TRUE) {
            $username = $_POST['username'];
            $password = $_POST['password'];


            //check the user from the database
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where(array('username' => $username, 'password' => $password));

            $query = $this->db->get();
            $user = $query->row();
            //maintain a session for prticular user
            $_SESSION['type'] = $user->type;

            if ($user->type == "manager") {
                //maintain a session to user status already logged in or not
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['fname'] = $user->first_name;
                $_SESSION['lname'] = $user->last_name;
                $_SESSION['username'] = $user->username;

                //redirect to the profile page
                redirect("user/manager", "refresh");
            } elseif ($user->type == 'editor') {
                //maintain a session to user status already logged in or not
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['fname'] = $user->first_name;
                $_SESSION['lname'] = $user->last_name;

                //redirect to the profile page
                redirect("user/editor", "refresh");

            } elseif ($user->type == 'shop_director') {
                //maintain a session to user status already logged in or not
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['fname'] = $user->first_name;
                $_SESSION['lname'] = $user->last_name;

                //redirect to the profile page
                redirect("user/shop_editor", "refresh");

            } else {
                // If user did not validate, then show them login page again
                $msg = '<font color=red>Please Enter your Username and Password First</font><br />';
                $data['msg'] = $msg;
                $this->load->view('login1', $data);

            }

        } else {
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $data['msg'] = $msg;
            $this->load->view('login1', $data);
        }
		$this->load->view('login1');
	}

    //function for reset password
    public function reset_password(){
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $this->load->library('form_validation');

            //first check if its a valid email or not
            $this->form_validation->set_rules('email','Email','trim|required|min_length[6]|max_length[50]|valid_email|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                // email didn't validate, send back to reset password form and show errors
                //this will likely never occur due to front end validation done on type="email"
                $this->load->view('reset_password_request');
            }else{
                $email = trim($this->input->post('email'));
                $result = $this->Auth_model->email_exist($email);

                if ($result) {
                    // if we found the email, $result is now their first name
                    $this->send_reset_password_email($email,$result);
                    $this->load->view('reset_password',array('email' => $email));
                }else{
                    $this->load->view('reset_password',array('error' => 'Email address not registered with WebStation' ));
                }
            }
        }else{
            $this->load->view('reset_password_request');
        }
    }

    //function for sending reset password email
    public function send_reset_password_email($email, $username){

        $this->load->library('email');
        $email_code = md5($this->config->item('camera').$username);

        $this->email->set_mailtype('html');
        $this->email->from($this->config->item('bot_email'),'WebStation Technology');
        $this->email->to($email);
        $this->email->subject('Reset your password');

        //message that send to email account of users
        $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict// EN"
                    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                    </head><body>';
        $message .= '<p>Dear ' . $username . ',</p>';
        $message .= '<p>We want to help you reset your password! Please <strong><a href="' . base_url() .'Auth/reset_password_form/' . $email . '/'.$email_code . '">click here</a></strong> to reset your password.</p>';
        $message .= '<p>Thank you!</p>';
        $message .= '<p>The Team at WebStation Technology</p>';
        $message .= '</body></html>';

        $this->email->message($message);
        $this->email->send();

    }

    //function to load a page after verifying reset password code
    public function reset_password_form($email,$email_code){

        if (isset($email,$email_code)) {
            $email = trim($email);
            $email_hash = sha1($email . $email_code);
            $verified = $this->Auth_model->verify_reset_password_code($email, $email_code);

            if ($verified) {
                //if the verificatio is done, load next view
                $this->load->view('update_password_form', array('email_hash' => $email_hash, 'email_code' => $email_code, 'email' => $email));
            }else{
                //send back to reset_password page, not update_password, if there was a problem
                $this->load->view('reset_password_request', array('error' => 'There was a problem with your link. Please click it again or request to reset your password again', 'email' => $email));
            }
        }
    }

    public function update_password(){

        if (isset($_POST['email'], $_POST['email_hash']) || $_POST['email_hash'] !== sha1($_POST['email'] . $_POST['email_code'])) {
            // either a hackeer or they changed their email in the field, just die.
            die('Error updating your password');
        }

        $this->load->library('form_validation');

        $this->form_validation->set_rules('email_hash', 'Email Hash', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[50]|matches[password_conf]|xss_clean');
        $this->form_validation->set_rules('password_conf', 'Confirmed Password', 'trim|required|min_length[6]|max_length[50]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            // user didn't validate, send back to update password form and show errors
            $this->load->view('update_password_form');
        } else {
            // successful update
            //returns users username id successful

            $result = $this->Auth_model->update_password();

            if ($result) {
                $this->load->view('update_password_success');
            } else {
                // this should never happen
                $this->load->view('update_password_form', array('error' => 'Problem updating your password. Please contact' . $this->config->item('admin_email')));
            }
        }
    }

    public function logout()
    {

        unset($_SESSION);
        session_destroy();
        redirect("auth/login", "refresh");

    }
    public function proceed(){
        if(isset($_SESSION['email'])){
            $this->load->view('billing');
        }
        else{
            $msg = '<font color=green>Sign in first.</font><br />';
            $data['msg'] = $msg;
            $this->load->view('login1', $data);
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[5]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('repassword', 'RePassowrd', 'required|min_length[5]');

        if ($this->form_validation->run() == TRUE) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];
            if ($password == $repassword) {
                $_SESSION['full_name'] = $name;
                $_SESSION['email'] = $email;
                $data = array(
                    'full_name' => $name,
                    'email' => $email,
                    'password' => $password

                );

                $this->load->model('auth_model');
                $this->auth_model->add_customer($data);
                $data['message'] = 'Data Inserted Successfully';
//Loading View
                $this->load->view('index');

            } else {
                $msg = '<font color=red>Password Different.Try Again</font><br />';
                $data['msg'] = $msg;
                $this->load->view('login1', $data);
            }


        } else {
            $msg = '<font color=red>Invalid email and/or name.</font><br />';
            $data['msg'] = $msg;
            $this->load->view('login1', $data);
        }

    }

    public function cart()
    {
        $this->load->model("cart_model");
        $data["product"] = $this->cart_model->fetch_all();
        $this->load->view("shopping_cart", $data);
    }

    function add()
    {
        $this->load->library("cart");
        $data = array(
            "id" => $_POST["product_id"],
            "name" => $_POST["product_name"],
            "qty" => $_POST["quantity"],
            "price" => $_POST["product_price"]
        );
        $this->cart->insert($data); //return rowid
        echo $this->view();
    }

    function load()
    {
        echo $this->view();
    }

    function remove()
    {
        $this->load->library("cart");
        $row_id = $_POST["row_id"];
        $data = array(
            'rowid' => $row_id,
            'qty' => 0
        );
        $this->cart->update($data);
        echo $this->view();
    }

    function clear()
    {
        $this->load->library("cart");
        $this->cart->destroy();
        echo $this->view();
    }

    function view()
    {
        $this->load->library("cart");
        $output = '';
        $output .= '
  <h3>Shopping Cart</h3><br />
  <div class="table-responsive">
   <div align="right">
    <button type="button" id="clear_cart" class="btn btn-warning">Clear Cart</button>
   </div>
   <br />
   <table class="table table-bordered">
    <tr>
     <th width="40%">Name</th>
     <th width="15%">Quantity</th>
     <th width="15%">Price</th>
     <th width="15%">Total</th>
     <th width="15%">Action</th>
    </tr>

  ';
        $count = 0;
        foreach ($this->cart->contents() as $items) {
            $count++;
            $output .= '
   <tr> 
    <td>' . $items["name"] . '</td>
    <td>' . $items["qty"] . '</td>
    <td>' . $items["price"] . '</td>
    <td>' . $items["subtotal"] . '</td>
    <td><button type="button" name="remove" class="btn btn-danger btn-xs remove_inventory" id="' . $items["rowid"] . '">Remove</button></td>
   </tr>
   ';
        }
        $output .= '
   <tr>
    <td colspan="4" align="right">Total</td>
    <td>' . $this->cart->total() . '</td>
   </tr>
  </table>

  </div>
  ';

        if ($count == 0) {
            $output = '<h3 align="center">Cart is Empty</h3>';
        }
        return $output;
    }

    //livesearch
    public function ajaxsearch()
    {
        $output = '';
        if (isset($_POST["query"])) {
            $this->load->model('Auth_model');

            $data['booktable']= $this->Auth_model->booktable($_POST["query"]);




        } else {
            $data['booktable'] = $this->Auth_model->booktable1();
        }

        if (!empty($data['booktable'])){
            foreach ($data['booktable'] as $objects)  {
                $item_name=$objects->item_name;
                $category=$objects->category;
                $item_id=($objects->item_id);
                $price="Rs.".$objects->price;
                $image=$objects->image;
                $link= base_url().'assets/'.$image.'.jpg';
                $more_link=base_url().'index.php/link/getdata/'.$item_id;
                //Call the admin controller calss to get the more information about the student
                echo '

                <div class="member" style="float:left;
    width:210px;
    height:450px;
    background:#fff;
    padding:3px;
    margin-right:3px;
    margin-left:3px;
    -moz-box-shadow: 1px 2px 2px #ccc;
    -webkit-box-shadow: 1px 2px 2px #ccc;
    box-shadow: 1px 2px 2px #ccc;">
    
    <br><br>
    <img style="width: 200px;height: 200px" src="'.$link.' " alt="Click the link to see more info"  />
    <div class="name">
        <h4 style="font-size: 20px;text-align: center" class="card-title">
        '.$item_name.'
        </h4>
        <p style="font-size:15px;text-align: center"  class="card-text">'.$price.'</p>
        <p style="color: #003399; font-size: 15px;text-align: center"  class="card-text"><a href='.$more_link.'>More</a></p>
     <button type="button" style="margin-left: 80px" name="add_cart" class="btn btn-success add_cart"  >Buy</button>
    </div>
    


</div>
<script>
    $(document).ready(function(){

        $(".add_cart").click(function(){
            var product_id = $(this).data("productid");
            var product_name = $(this).data("productname");
            var product_price = $(this).data("price");
            var quantity = $("#" + product_id).val();
            if(quantity != "" && quantity > 0)
            {
                $.ajax({
                    url:"<?php echo base_url(); ?>index.php/auth/add",
                    method:"POST",
                    data:{product_id:product_id, product_name:product_name, product_price:product_price, quantity:quantity},
                    success:function(data)
                    {
                        alert("Product Added into Cart");
                        $("#v'.$item_id.'").html(data);
                        $("#" + product_id).val("");
                    }
                });
            }
            else
            {
                alert("Please Enter quantity");
            }
        });

        $("#v'.$item_id.'").load("<?php echo base_url(); ?>index.php/auth/load");

        $(document).on("click", ".remove_inventory", function(){
            var row_id = $(this).attr("id");
            if(confirm("Are you sure you want to remove this?"))
            {
                $.ajax({
                    url:"<?php echo base_url(); ?>index.php/auth/remove",
                    method:"POST",
                    data:{row_id:row_id},
                    success:function(data)
                    {
                        alert("Product removed from Cart");
                        $("#v'.$item_id.'").html(data);
                    }
                });
            }
            else
            {
                return false;
            }
        });

        $(document).on("click", "#clear_cart", function(){
            if(confirm("Are you sure you want to clear cart?"))
            {
                $.ajax({
                    url:"<?php echo base_url(); ?>index.php/auth/clear",
                    success:function(data)
                    {
                        alert("Your cart has been clear...");
                        $("#v'.$item_id.'").html(data);
                    }
                });
            }
            else
            {
                return false;
            }
        });

    });
</script>

';


            }

        } else {
            echo 'Data Not Found';
        }

    }
}

