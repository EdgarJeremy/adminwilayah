<?php

defined ('BASEPATH') OR exit ('No akses;');

class Pekerjaan_model extends CI_Model{

    public function ambil_pekerjaan(){
        return $this->db->get('pekerjaan')->result();
    }

    public function ambil_pekerjaan_by_id($id){
        return $this->db->get_where('pekerjaan', array('id_pekerjaan'=>$id))->row();
    }

    public function hitung_keluarga(){
        return $this->db->get('pekerjaan')->num_rows();
    }
}