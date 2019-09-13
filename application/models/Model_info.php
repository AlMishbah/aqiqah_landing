<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Model_info extends CI_Model {
                        
    public function get_where($where){
        return $this->db->get_where('info', $where);
    }

    // CRUD

    public function get(){
        return $this->db->get('info');
    }

    public function insert($data){
        return $this->db->insert('info', $data);
    }

    public function update($data, $where){
        $this->db->where($where);
        return $this->db->update('info', $data);
    }

    public function delete($where){
        $this->db->where($where);
        return $this->db->delete('info');
    }
                        
}