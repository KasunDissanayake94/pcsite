<?php
class detail_model extends CI_Model{

    public function __construct(){

        parent::__construct();
    }



    //live search
    public function find_items($category){        
        $query = $this
            ->db
            ->select('*')
            ->from('sales_item')
            ->where('category',$category)
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

