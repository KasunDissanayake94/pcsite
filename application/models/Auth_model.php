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
            $query=$query->result();
        }
        else
        {
            $this->db->select ('*');
            $this->db->from('sales_item');
            $this->like('item_name',$data);
            $query = $this->db->get();
            $query=$query->result();
            return $query;
        }
    }
}

