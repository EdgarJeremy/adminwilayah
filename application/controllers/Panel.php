<?php

/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 7/22/17
 * Time: 12:24 AM
 */
class Panel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $config = Array(
            "menu" => $this->active_menu("dashboard"),
            "title" => "Dashboard"
        );
        $this->load->view("panel/include/frame",$config);
        $this->load->view("panel/index");
        $this->load->view("panel/include/footer");
    }

    // Kependudukan--------------------------------------
    public function daftar_penduduk() {
        $config = Array(
            "menu" => $this->active_menu("kependudukan","daftar_penduduk"),
            "title" => "Daftar Penduduk"
        );
        $this->load->view("panel/include/frame",$config);
        $this->load->view("panel/kependudukan/daftar_penduduk");
        $this->load->view("panel/include/footer");
    }
    public function input_penduduk() {
        $config = Array(
            "menu" => $this->active_menu("kependudukan","input_penduduk"),
            "title" => "Input Penduduk"
        );
        $this->load->view("panel/include/frame",$config);
        $this->load->view("panel/kependudukan/input_penduduk");
        $this->load->view("panel/include/footer");
    }
    public function daftar_keluarga() {
        $config = Array(
            "menu" => $this->active_menu("kependudukan","daftar_keluarga"),
            "title" => "Daftar Keluarga"
        );
        $this->load->view("panel/include/frame",$config);
        $this->load->view("panel/kependudukan/daftar_keluarga");
        $this->load->view("panel/include/footer");
    }

    public function import() {
//        $file = fopen(base_url("/assets/files/biowni.csv"),"r");
//        $result = [];
//        $b = [];
//        $first = true;
//        $i = 1;
//        while(($data = fgetcsv($file)) != false) {
//            if($first) {
//                $first = false;
//                continue;
//            }
//            array_push($result,array(
//                "nama" => $data[5],
//                "no_ktp" => $data[0],
//                "tempat_lahir" => $data[7],
//                "tanggal_lahir" => date("Y-m-d",strtotime($data[8])),
//                "jenis_kelamin" => $data[6],
//                "id_kecamatan" => 4,
//                "id_kelurahan" => 35,
//                "no_kk" => $data[36],
//                "id_agama" => $data[12],
//                "id_pekerjaan" => $data[24],
//                "id_pendidikan" => $data[23],
//                "id_golongan_darah" => $data[11],
//                "id_hubungan_keluarga" => $data[20],
//                "id_status_kawin" => $data[13]
//            ));
//            array_push($b,$data);
////            if($i == 20) break;
//            $i++;
//        }
//        echo "<pre>";
//        var_dump($result);
////        var_dump($b);
//        $this->db->insert_batch("penduduk",$result);
    }

    protected function active_menu($parent,$child = null) {
        $menus = Array(
            "dashboard" => Array(
                "current" => "",
                "childs" => Array()
            ),
            "kependudukan" => Array(
                "current" => "",
                "childs" => Array(
                    "daftar_penduduk" => "",
                    "input_penduduk" => "",
                    "daftar_keluarga" => "",
                    "input_keluarga" => "",
                    "histori" => ""
                )
            ),
            "pekerjaan" => Array(
                "current" => "",
                "childs" => Array(
                    "daftar_pekerjaan" => "",
                    "input_pekerjaan" => ""
                )
            ),
            "pendidikan" => Array(
                "current" => "",
                "childs" => Array(
                    "daftar_pendidikan" => "",
                    "input_pendidikan" => ""
                )
            ),
            "wilayah" => Array(
                "current" => "",
                "childs" => Array()
            ),
            "pengguna" => Array(
                "current" => "",
                "childs" => Array(
                    "daftar_pengguna" => "",
                    "input_pengguna" => ""
                )
            )
        );

        if(isset($menus[$parent])) {
            if(count($menus[$parent]["childs"]) != 0 && $child == null)
                exit("Sertakan child menu");

            if($child != null) {
                if(!isset($menus[$parent]["childs"][$child])) {
                    exit("Child menu tidak ditemukan");
                }
            }
        } else {
            exit("Parent menu tidak ditemukan");
        }


        $menus[$parent]["current"] = "active";
        $menus[$parent]["childs"][$child] = "active";

        return $menus;
    }

}