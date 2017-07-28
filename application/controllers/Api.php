<?php

defined ('BASEPATH') OR exit('No akses');

class Api extends CI_Controller {

    public function __construct(){
        parent::__construct();
        header('Content-Type: application/json');
    }

    public function ambil_penduduk(){
        $tes = $this->db->get('penduduk')->result();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_penduduk_by_id($id){
        $tes = $this->db->get_where('penduduk', array('id_penduduk'=>$id))->row();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_penduduk_by_no_kk($no_kk){
        $tes = $this->db->get_where('penduduk', array('no_kk'=> $no_kk))->result();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_penduduk_by_no_ktp($no_ktp){
        $tes = $this->db->get_where('penduduk', array('no_ktp'=> $no_ktp))->row();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_keluarga(){
        $tes = $this->db->get('keluarga')->result();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_keluarga_by_no_kk($no_kk){
        $tes = $this->db->get_where('keluarga', array('no_kk'=>$no_kk))->row();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_pekerjaan(){
        $tes = $this->db->get('pekerjaan')->result();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_pekerjaan_by_id($id){
        $tes = $this->db->get_where('pekerjaan', array('id_pekerjaan'=>$id))->row();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_agama(){
        $tes = $this->db->get('agama')->result();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_agama_by_id($id){
        $tes = $this->db->get_where('agama', array('id_agama'=>$id))->row();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_pendidikan(){
        $tes = $this->db->get('pendidikan')->result();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_pendidikan_by_id($id){
        $tes = $this->db->get_where('pendidikan', array('id_pendidikan'=>$id))->row();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_golongan_darah(){
        $tes = $this->db->get('golongan_darah')->result();
        $data = json_encode($tes);
        echo $data;
    }


    public function ambil_golongan_darah_by_id($id){
        $tes = $this->db->get_where('golongan_darah', array('id_golongan_darah'=>$id))->row();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_hubungan_keluarga(){
        $tes = $this->db->get('hubungan_keluarga')->result();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_hubungan_keluarga_by_id($id){
        $tes = $this->db->get_where('hubungan_keluarga', array('id_hubungan_keluarga'=>$id))->row();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_status_kawin(){
        $tes= $this->db->get('status_kawin')->result();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_status_kawin_by_id($id){
        $tes = $this->db->get_where('status_kawin', array('id_status_kawin'=>$id))->row();
        $data = json_encode($tes);
        echo $data;
    }

    public function ambil_anggota_keluarga_by_nomor_rumah($nomor_rumah){
        $keluarga = $this->db->get_where('keluarga', array('no_rumah'=>$nomor_rumah))->row();

        $keluarga->anggota_keluarga = $this->db->get_where('penduduk', array('no_kk'=> $keluarga->no_kk))->result();

        $data = json_encode($keluarga);
        echo $data;
    }
}