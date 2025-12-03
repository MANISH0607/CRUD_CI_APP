<?php


class Crud_model extends CI_Model
{

    public function get_all_items()
    {
        $query = $this->db->get('item');

        if ($query) {
            return $query->result();
        }
    }


    public function insertItem($data)
    {

       $query = $this->db->insert('item', $data);

       if($query){

        return true;
       }
       else{

        return false;
       }
    }

    public function getSingleItem($id){

        $this->db->where('id',$id);
        $query = $this->db->get('item');

        if($query){

            return $query->row();
        }
    }

    public function updateItem($data, $id){

        $this->db->where('id',$id);
        $query = $this->db->update('item', $data);

        if($query){

            return true;
        }
        else{

            return false;
        }
    }

    public function deleteItem($id){

        $this->db->where('id',$id);
        $query = $this->db->delete('item');

        if($query){

            return true;
        }
        else{

            return false;
        }
    }
}



?>
