<?php

defined ('BASEPATH') OR exit ('No akses;');

class Pendidikan_model extends CI_Model{

    public function ambil_pendidikan(){
        return $this->db->get('pendidikan')->result();
    }

    public function ambil_pendidikan_by_id($id){
        return $this->db->get_where('pendidikan', array('id_pendidikan'=>$id))->row();
    }

    public function hitung_pendidikan(){
        return $this->db->get('pendidikan')->num_rows();
    }
}