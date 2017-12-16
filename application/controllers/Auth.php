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

    }

    public function logout()
    {

        unset($_SESSION);
        session_destroy();
        redirect("auth/login", "refresh");

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
                $price=$objects->price;
                $image=$objects->image;
                $link= base_url().'assets/'.$image.'.jpg';
                //Call the admin controller calss to get the more information about the student
                echo "<div class=\"member\" style='float:left;
    width:210px;
    height:350px;
    background:#fff;
    padding:3px;
    margin-right:3px;
    margin-left:3px;
    -moz-box-shadow: 1px 2px 2px #ccc;
    -webkit-box-shadow: 1px 2px 2px #ccc;
    box-shadow: 1px 2px 2px #ccc;'>
    
    <br><br>
    <img style=\"width: 200px;\" src=".$link. " alt=\"Click the link to see more info\"  />
    <div class=\"name\">
        <h4 style=\"font-size: 20px\" class=\"card-title\">
        $item_name 
        </h4>
        <p style=\"font-size:15px\"  class=\"card-text\"></p>
        <p style=\"color: #003399; font-size: 15px\"  class=\"card-text\"><a href=".$category.">More Information</a></p>
    </div>
    


</div>";


            }

        } else {
            echo 'Data Not Found';
        }

    }
}

