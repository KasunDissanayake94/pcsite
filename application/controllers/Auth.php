<?php 

class Auth extends CI_Controller{

    public function home(){

        $this->load->view('index');
    }

    public function login(){

        $msg = '<font color=green>Enter your username and password here to sign in.</font><br />';
        $data['msg'] = $msg;
        $this->load->view('login1', $data);
	}
	public function login_user(){
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');

        if ($this->form_validation->run() == TRUE){
            $username=$_POST['username'];
            $password=$_POST['password'];


            //check the user from the database
            $this->db->select ('*');
            $this->db->from('users');
            $this->db->where(array('username'=>$username,'password'=>$password));

            $query = $this->db->get();
            $user = $query->row();
            //maintain a session for prticular user
            $_SESSION['type']=$user->type;

            if ($user->type=="manager"){
                //maintain a session to user status already logged in or not
                $_SESSION['user_logged']= TRUE;
                $_SESSION['fname'] =$user->first_name;
                $_SESSION['lname'] =$user->last_name;
                $_SESSION['username'] =$user->username;

                //redirect to the profile page
                redirect("user/manager","refresh");
            }
            elseif($user->type=='editor'){
                //maintain a session to user status already logged in or not
                $_SESSION['user_logged']= TRUE;
                $_SESSION['fname'] =$user->first_name;
                $_SESSION['lname'] =$user->last_name;

                //redirect to the profile page
                redirect("user/editor","refresh");

            }
            elseif($user->type=='shop_director'){
                //maintain a session to user status already logged in or not
                $_SESSION['user_logged']= TRUE;
                $_SESSION['fname'] =$user->first_name;
                $_SESSION['lname'] =$user->last_name;

                //redirect to the profile page
                redirect("user/shop_editor","refresh");

            }else{
                // If user did not validate, then show them login page again
                $msg = '<font color=red>Please Enter your Username and Password First</font><br />';
                $data['msg'] = $msg;
                $this->load->view('login1', $data);

            }

        }else{
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $data['msg'] = $msg;
            $this->load->view('login1', $data);
        }

    }
	public function logout(){

	    unset($_SESSION);
	    session_destroy();
	    redirect("auth/login","refresh");

    }

	public function register(){

	    if (isset($_POST['register'])){
	        $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('email','Email','required|min_length[5]');
            $this->form_validation->set_rules('password','Password','required|min_length[5]');
            $this->form_validation->set_rules('password','Confirm Password','required|min_length[5]|matches[password]');
            $this->form_validation->set_rules('telephone','Telephone','required|min_length[10]');

	        if ($this->form_validation->run() == TRUE){
	            echo "form validated";

	            //add user to the database
                $data=array(
                    'username'=>$_POST['username'],
                    'password'=>$_POST['password'],
                    'email'=>$_POST['email']


                );
                $this->db->insert('users',$data);

                $this->session->set_flashdata("success","Your Account has been created");
                redirect("auth/register","refresh");

            }
        }
        //load view
		$this->load->view('register');
    }
}

