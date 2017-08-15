<?php

defined ('BASEPATH') OR exit ('No akses;');

class Status_kawin_model extends CI_Model{

    public function ambil_status_kawin(){
        return $this->db->get('status_kawin')->result();
    }

    public function ambil_status_kawin_by_id($id){
        return $this->db->get_where('status_kawin', array('id_status_kawin'=>$id))->row();
    }

    public function hitung_status_kawin(){
        return $this->db->get('status_kawin')->num_rows();
    }
}