<?php

defined ('BASEPATH') OR exit('No akses');

class Api extends CI_Controller {

    public function __construct(){
        parent::__construct();
        header("Content-Type: application/json;charset=utf-8");
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
        $this->load->model('Penduduk_model');
        $this->load->model('Keluarga_model');
        $this->load->model('Pekerjaan_model');
        $this->load->model('Agama_model');
        $this->load->model('Golongan_darah_model');
        $this->load->model('Hubungan_keluarga_model');
        $this->load->model('Status_kawin_model');
        $this->load->model("Wilayah_model","wilayah");
    }

    public function ambil_penduduk($limit=20,$offset=0){
        $data = $this->Penduduk_model->ambil_penduduk($limit,$offset);
        $data = json_encode($data);
        echo $data;
    }

    public function ambil_penduduk_by_id($id){
        $data = $this->Penduduk_model->ambil_penduduk_by_id($id);
        $data = json_encode($data);
        echo $data;
    }

    public function ambil_penduduk_by_no_kk($no_kk){
        $data = $this->Penduduk_model->ambil_penduduk_by_no_kk($no_kk);
        $data = json_encode($data);
        echo $data;
    }

    public function ambil_penduduk_by_no_ktp($no_ktp){
        $data = $this->Penduduk_model->ambil_penduduk_by_no_ktp($no_ktp);
        $data = json_encode($data);
        echo $data;
    }

    public function hitung_penduduk(){
        $data = $this->Penduduk_model->hitung_penduduk();
        $data = json_encode($data);
        echo $data;
    }

    public function cari_penduduk($limit=20, $offset=0){
        $data = $this->Penduduk_model->cari_penduduk($limit, $offset);
        $data = json_encode($data);
        echo $data;
    }

    public function ambil_keluarga($limit = 20, $offset=0){
        $data = $this->Keluarga_model->ambil_keluarga($limit,$offset);
        $data = json_encode($data);
        echo $data;
    }

    public function ambil_keluarga_by_no_kk($no_kk){
        $data = $this->Keluarga_model->ambil_keluarga_by_no_kk($no_kk);
        $data = json_encode($data);
        echo $data;
    }

    public function hitung_keluarga(){
        $data = $this->Keluarga_model->hitung_keluarga();
        $data = json_encode($data);
        echo $data;
    }

    public function ambil_pekerjaan(){
        $data = $this->Pekerjaan_model->ambil_pekerjaan();
        $data = json_encode($data);
        echo $data;
    }

    public function ambil_pekerjaan_by_id($id){
        $data = $this->Pekerjaan_model->ambil_pekerjaan_by_id($id);
        $data = json_encode($data);
        echo $data;
    }

    public function hitung_pekerjaan(){
        $data = $this->Pekerjaan_model->hitung_pekerjaan();
        $data = json_encode($data);
        echo $data;
    }


    public function ambil_agama(){
        $data = $this->Agama_model->ambil_agama();
        $data = json_encode($data);
        echo $data;
    }

    public function ambil_agama_by_id($id){
        $data = $this->Agama_model->ambil_agama_by_id($id);
        $data = json_encode($data);
        echo $data;
    }

    public function hitung_agama(){
        $data = $this->Agama_model->hitung_agama();
        $data = json_encode($data);
        echo $data;
    }

    public function ambil_pendidikan(){
        $data = $this->Pendidikan_model->ambil_pendidikan();
        $data = json_encode($data);
        echo $data;
    }

    public function ambil_pendidikan_by_id($id){
        $data = $this->Pendidikan_model->ambil_pendidikan_by_id($id);
        $data = json_encode($data);
        echo $data;
    }

    public function hitung_pendidikan(){
        $data = $this->Pendidikan_model->hitung_pendidikan();
        $data = json_encode($data);
        echo $data;
    }


    public function ambil_golongan_darah(){
        $data = $this->Golongan_darah_model->ambil_golongan_darah;
        $data = json_encode($data);
        echo $data;
    }


    public function ambil_golongan_darah_by_id($id){
        $data = $this->Golongan_darah_model->ambil_golongan_darah_by_id($id);
        $data = json_encode($data);
        echo $data;
    }

    public function hitung_golongan_darah(){
        $data = $this->Golongan_darah_model->hitung_golongan_darah();
        $data = json_encode($data);
        echo $data;
    }


    public function ambil_hubungan_keluarga(){
        $data = $this->Hubungan_keluarga_model->ambil_hubungan_keluarga();
        $data = json_encode($data);
        echo $data;
    }

    public function ambil_hubungan_keluarga_by_id($id){
        $data = $this->Hubungan_keluarga_model->ambil_hubungan_keluarga_by_id($id);
        $data = json_encode($data);
        echo $data;
    }

    public function hitung_hubungan_keluarga(){
        $data = $this->Hubungan_keluarga_model->hitung_hubungan_keluarga();
        $data = json_encode($data);
        echo $data;
    }


    public function ambil_status_kawin(){
        $data= $this->Status_kawin_model->ambil_status_kawin();
        $data = json_encode($data);
        echo $data;
    }

    public function ambil_status_kawin_by_id($id){
        $data = $this->Status_kawin_model->ambil_status_kawin_by_id($id);
        $data = json_encode($data);
        echo $data;;
    }

    public function hitung_status_kawin(){
        $data = $this->Status_kawin_model->hitung_status_kawin();
        $data = json_encode($data);
        echo $data;
    }

    public function ambil_anggota_keluarga_by_nomor_rumah($nomor_rumah){
        $data = $this->Keluarga_model->ambil_anggota_keluarga_by_nomor_rumah($nomor_rumah);
        $data = json_encode($data);
        echo $data;
    }

    public function ambil_struktur_profil() {
        $data = $this->db->field_data("profil");
        echo json_encode($data);
    }

    public function ambil_profil() {
        $get = $this->input->get();
        if(isset($get["tipe"]) && isset($get["idwilayah"])) {
            switch (strtolower($get["tipe"])) {
                case "kecamatan":
                    $level = "Camat";
                    break;
                case "kelurahan":
                    $level = "Lurah";
                    break;
                case "lingkungan":
                    $level = "Pala";
                    break;
                default:
                    $level = null;
                    break;
            }
            $triwulan = ceil(date("m",time())/3);
            $data = $this->wilayah->ambil_profil_wilayah($get["idwilayah"],$level,$triwulan);
            echo json_encode($data);
        } else {
            echo json_encode(array("status"=>false,"msg"=>"GET parameter tidak cukup"));
        }

    }

}