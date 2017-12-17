<?php
class cart_model extends CI_Model
{
    function fetch_all()
    {
        $query = $this->db->get("sales_item");
        return $query->result();
    }
}