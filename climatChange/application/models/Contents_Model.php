<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contents_Model extends CI_Model{


    public function get_itemCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('Title', $this->input->get("search"));
          $this->db->or_like('Content', $this->input->get("search"));
          $this->db->or_like('IdContent', $this->input->get("search"));
          $this->db->or_like('Description', $this->input->get("search"));
          $this->db->or_like('Auteur', $this->input->get("search"));
          $this->db->or_like('DatePublication', $this->input->get("search"));  
        }
        $query = $this->db->get("inside");
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'title' => $this->input->post('Title'),
            'content' => $this->input->post('Content'),
            'idcontent' => $this->input->post('IdContent'),
            'description' => $this->input->post('Description'),
            'auteur' => $this->input->post('Auteur'),
            'datepublication' => $this->input->post('DatePublication')
        );
        return $this->db->insert('inside', $data);
    }


    public function update_item($id) 
    {
        $data=array(
            'title' => $this->input->post('Title'),
            'content' => $this->input->post('Content'),
            'idcontent' => $this->input->post('IdContent'),
            'description' => $this->input->post('Description'),
            'auteur' => $this->input->post('Auteur'),
            'datepublication' => $this->input->post('DatePublication')
        );
        if($id==0){
            return $this->db->insert('inside',$data);
        }else{
            $this->db->where('idcontent',$id);
            return $this->db->update('inside',$data);
        }        
    }


    public function find_item($id)
    {
        return $this->db->get_where('inside', array('idcontent' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('inside', array('idcontent' => $id));
    }
}
?>