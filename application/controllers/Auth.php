<?php 

class Auth extends CI_Controller{

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

