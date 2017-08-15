<?php

defined ('BASEPATH') OR exit ('No akses;');

class Keluarga_model extends CI_Model {

    public function ambil_keluarga($limit, $offset){
        return $this->db->limit($limit, $offset)->get('keluarga')->result();
    }

    public function ambil_keluarga_by_no_kk($no_kk){
        return $this->db->get_where('keluarga', array('no_kk' => $no_kk))->row();
    }

    public function ambil_anggota_keluarga_by_nomor_rumah($nomor_rumah){
        $keluarga = $this->db->get_where('keluarga', array('no_rumah'=>$nomor_rumah))->row();

        $keluarga->anggota_keluarga = $this->db->get_where('penduduk', array('no_kk'=> $keluarga->no_kk))->result();

        $data = json_encode($keluarga);
        echo $data;
    }

    public function hitung_keluarga(){
        return $this->db->get('keluarga')->num_rows();
    }
}