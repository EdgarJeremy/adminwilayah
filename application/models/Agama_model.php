<?php

class Agama_model extends CI_Model {

    public function ambil_agama(){
        return $this->db->get('agama')->result();
    }

    public function ambil_agama_by_id($id){
        return $this->db->get_where('agama', array('id_agama'=>$id))->row();
    }

    public function hitung_agama(){
        return $this->db->get('agama')->num_rows();
    }
}