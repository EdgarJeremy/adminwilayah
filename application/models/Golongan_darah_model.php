<?php

defined ('BASEPATH') OR exit ('No akses;');

class Golongan_darah_model extends CI_Model{

    public function ambil_golongan_darah(){
        return $this->db->get('golongan_darah')->result();
    }


    public function ambil_golongan_darah_by_id($id){
        return $this->db->get_where('golongan_darah', array('id_golongan_darah'=>$id))->row();
    }

    public function hitung_golongan_darah(){
        return $this->db->get('golongan_darah')->num_rows();
    }
}