<?php
class fetch_model extends CI_Model{

    public function __construct(){

        parent::__construct();
    }



    //live search
    public function booktable($search){

        $query = $this
            ->db
            ->select('*')
            ->from('users')
            ->or_like('id',$search)
            ->or_like('username',$search)
            ->or_like('first_name',$search)
            ->or_like('last_name',$search)
            ->or_like('type',$search)
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

