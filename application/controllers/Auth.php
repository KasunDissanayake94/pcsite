<?php 

class Auth extends CI_Controller{
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

    public function home(){

        $this->load->view('index');
    }

    public function login(){

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

            if ($user->email){
                $this->session->set_flashdata("success","You are logged in");

                $_SESSION['user_logged']= TRUE;
                $_SESSION['username'] =$user->username;

                //redirect to the profile page
                redirect("user/profile","refresh");
            }else{
                $this->session->set_flashdata("error","No such user found");
                redirect("auth/login","refresh");
            }

        }
		$this->load->view('login');
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

