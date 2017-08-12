<?php

defined ('BASEPATH') OR exit ('No akses;');

class Hubungan_keluarga_model extends CI_Model{

    public function ambil_hubungan_keluarga(){
        return $this->db->get('hubungan_keluarga')->result();
    }

    public function ambil_hubungan_keluarga_by_id($id){
        return $this->db->get_where('hubungan_keluarga', array('id_hubungan_keluarga'=>$id))->row();
    }

    public function hitung_hubungan_keluarga(){
        return $this->db->get('hubungan_keluarga')->num_rows();
    }
}