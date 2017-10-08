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
    public function fetch_data($search){

        $query = $this
            ->db
            ->select('*')
            ->from('sales_item')
            ->or_like('item_name',$search)
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

