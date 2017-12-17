<?php
class manager_model extends CI_Model{

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
    public function find_details($name){

        $this->db->select ('*');
        $this->db->from('sales_item');

        $this->db->where((array('item_id'=>$name)));
        $query = $this->db->get();
        $query=$query->result();
        return $query;
    }

    public function add_user($data){
        $this->db->insert('users', $data);


    }
    public function find_all_users(){

        $this->db->select ('*');
        $this->db->from('users');
        $query = $this->db->get();
        $query=$query->result();
        return $query;
    }
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}

