<?php 
class Auth_model extends CI_Model{

	public function __construct(){

		parent::__construct();
	}

	public function find_all_items(){

        $this->db->select ('*');
        $this->db->from('sales_item');
        $query = $this->db->get();
        $query=$query->result();
        return $query;
    }
    public function fetch_data(){

        $output = "";

        $data = $_GET['searchData'];
        if($data == "")
        {
            $this->db->select ('*');
            $this->db->from('sales_item');
            $query = $this->db->get();
            $query=$query->result_array();
            return $query;
        }
        else
        {
            $this->db->select ('*');
            $this->db->from('sales_item');
            $this->db->like('item_name',$data);
            $query = $this->db->get();
            $query=$query->result_array();
            return $query;
        }
    }
    public function fetch_users(){

        $output = "";

        $data = $_GET['searchData'];
        if($data == "")
        {
            $this->db->select ('*');
            $this->db->from('users');
            $query = $this->db->get();
            $query=$query->result_array();
            return $query;
        }
        else
        {


            $this->db->select ('*');
            $this->db->from('users');
            $this->db->like('first_name',$data);
            $query = $this->db->get();
            $query=$query->result_array();
            return $query;


        }
    }
    public function fetch_users(){

        $output = "";

        $data = $_GET['searchData'];
        if($data == "")
        {
            $this->db->select ('*');
            $this->db->from('users');
            $query = $this->db->get();
            $query=$query->result_array();
            return $query;
        }
        else
        {


            $this->db->select ('*');
            $this->db->from('users');
            $this->db->like('first_name',$data);
            $query = $this->db->get();
            $query=$query->result_array();
            return $query;


        }
    }
    public function find_details($name){

        $this->db->select ('*');
        $this->db->from('sales_item');

        $this->db->where((array('item_id'=>$name)));
        $query = $this->db->get();
        $query=$query->result();
        return $query;
    }

    public function email_exists($email){
        $sql = "SELECT username, email FROM users WHERE email = '{$email}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();

        return ($result->num_rows() === 1 && $row->email) ? $row->username : false;
    }

    public function verify_reset_password_code($email, $code){

        $sql = "SELECT username, email FROM users WHERE email = '{$email}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();

        if ($result->num_rows() === 1) {
            return ($code == md5($this->config->item('camera') . $row->username)) ? true : false;
        } else {
            return false;
        }
    }

    public function update_password(){
        $email = $this->input->post('email');
        $password = sha1($this->config->item('camera') . $this->input->post('password');

        $sql = "UPDATE users SET password = '{$password}' WHERE email = '$email' LIMIT 1";
        $this->db->query($sql);

        if ($this->db->affected_rows() === 1) {
            return true;
        } else {
            return false;
        }
    public function add_customer($data){
        $this->db->insert('customer', $data);


    }
    public function add_customer($data){
        $this->db->insert('customer', $data);


    }
    //live search
    public function booktable($search){

        $query = $this
            ->db
            ->select('*')
            ->from('sales_item')
            ->like('item_name',$search)
            ->or_like('description',$search)
            ->get();

        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else
        {
            return null;
        }

    }
    public function booktable1(){

        $query = $this
            ->db
            ->select('*')
            ->from('sales_item')
            ->get();

        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else
        {
            return null;
        }

    }

}

