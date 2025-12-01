<?php


class Crud_model extends CI_Model {

    public function get_all_items()
    {
       $query = $this->db->get('item');
       
       if($query){
           return $query->result();
       }
       
    }

    
    public function get_all_shops()
    {
       $query = $this->db->get('shops');
    
       return $query->result();
    
    }

}



    


?>