<?php

/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 7/22/17
 * Time: 12:24 AM
 */
class Panel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->has_userdata("id_pengguna"))
            redirect(base_url("/login"));

        $this->load->model("Agama_model", "agama");
        $this->load->model("Golongan_darah_model", "golongan_darah");
        $this->load->model("Hubungan_keluarga_model", "hubungan_keluarga");
        $this->load->model("Keluarga_model", "keluarga");
        $this->load->model("Pekerjaan_model", "pekerjaan");
        $this->load->model("Pendidikan_model", "pendidikan");
        $this->load->model("Penduduk_model", "penduduk");
        $this->load->model("Status_kawin_model", "status_kawin");
        $this->load->model("Wilayah_model", "wilayah");
        $this->load->library("pagination");
    }

    public function index()
    {
        $config = Array(
            "menu" => $this->active_menu("dashboard"),
            "title" => "Dashboard"
        );
        $this->load->view("panel/include/frame", $config);
        $this->load->view("panel/index");
        $this->load->view("panel/include/footer");
    }

    // Kependudukan--------------------------------------
    public function daftar_penduduk($page = 0)
    {
        $config = Array(
            "menu" => $this->active_menu("kependudukan", "daftar_penduduk"),
            "title" => "Daftar Penduduk"
        );

        $jumlahData = $this->penduduk->hitung_penduduk();
        $pgConfig = $this->get_pagination_config(base_url("/panel/daftar_penduduk/"), $jumlahData);
        $this->pagination->initialize($pgConfig);

        if (isset($_GET["q"]))
            $data = $this->penduduk->cari_penduduk($pgConfig["per_page"], $page);
        else
            $data = $this->penduduk->ambil_penduduk($pgConfig["per_page"], $page);

        $this->load->view("panel/include/frame", $config);
        $this->load->view("panel/kependudukan/daftar_penduduk", compact("data", "jumlahData"));
        $this->load->view("panel/include/footer");
    }

    public function detail_penduduk($id_penduduk = null)
    {
        if ($id_penduduk == null)
            redirect(base_url("/panel/daftar_penduduk"));
        $config = Array(
            "menu" => $this->active_menu("kependudukan", "daftar_penduduk"),
            "title" => "Detail Penduduk"
        );

        $data = $this->penduduk->ambil_penduduk_by_id($id_penduduk);
        $pekerjaan = $this->pekerjaan->ambil_pekerjaan();
        $pendidikan = $this->pendidikan->ambil_pendidikan();
        $agama = $this->agama->ambil_agama();
        $status_kawin = $this->status_kawin->ambil_status_kawin();
        $golongan_darah = $this->golongan_darah->ambil_golongan_darah();
        $hubungan_keluarga = $this->hubungan_keluarga->ambil_hubungan_keluarga();

        $this->load->view("panel/include/frame", $config);
        $this->load->view("panel/kependudukan/detail_penduduk", compact("data", "pekerjaan", "pendidikan", "agama", "status_kawin", "golongan_darah", "hubungan_keluarga"));
        $this->load->view("panel/include/footer");
    }

    public function input_penduduk()
    {
        /*---------- Form input submit ---------*/
        /*--------------------------------------*/
        $this->onButtonSubmit(function () {
            $this->onPostInvalid([
                "nama",
                "no_ktp",
                "tempat_lahir",
                "tanggal_lahir",
                "jenis_kelamin",
                "no_kk",
                "id_agama",
                "id_pekerjaan",
                "id_pendidikan",
                "id_golongan_darah",
                "id_hubungan_keluarga",
                "id_status_kawin"
            ], function ($invalidKey) {
                set_flash_notif("form_error", "Isi field " . $invalidKey . "!");
                redirect(base_url("/panel/input_penduduk"));
            });
            $post = $this->input->post();
            $insert = $this->penduduk->simpan_penduduk(
                $post["nama"],
                $post["no_ktp"],
                $post["tempat_lahir"],
                $post["tanggal_lahir"],
                $post["jenis_kelamin"],
                $post["no_kk"],
                $post["id_agama"],
                $post["id_pekerjaan"],
                $post["id_pendidikan"],
                $post["id_golongan_darah"],
                $post["id_hubungan_keluarga"],
                $post["id_status_kawin"]
            );
            if ($insert) {
                set_flash_notif("form_success", "Data berhasil terinput di database!");
                redirect(base_url("/panel/input_penduduk"));
            } else {
                set_flash_notif("form_error", "Database error");
                redirect(base_url("/panel/input_penduduk"));
            }
        });
        /*--------------------------------------*/
        /*---------- END form input submit ---------*/

        $config = Array(
            "menu" => $this->active_menu("kependudukan", "input_penduduk"),
            "title" => "Input Penduduk"
        );
        $pekerjaan = $this->pekerjaan->ambil_pekerjaan();
        $pendidikan = $this->pendidikan->ambil_pendidikan();
        $agama = $this->agama->ambil_agama();
        $status_kawin = $this->status_kawin->ambil_status_kawin();
        $golongan_darah = $this->golongan_darah->ambil_golongan_darah();
        $hubungan_keluarga = $this->hubungan_keluarga->ambil_hubungan_keluarga();

        $this->load->view("panel/include/frame", $config);
        $this->load->view("panel/kependudukan/input_penduduk", compact("pekerjaan", "pendidikan", "agama", "status_kawin", "golongan_darah", "hubungan_keluarga"));
        $this->load->view("panel/include/footer");
    }


    public function daftar_keluarga($page = 0)
    {
        $config = Array(
            "menu" => $this->active_menu("kependudukan", "daftar_keluarga"),
            "title" => "Daftar Keluarga"
        );
        $jumlahData = $this->keluarga->hitung_keluarga();
        $pgConfig = $this->get_pagination_config(base_url("/panel/daftar_keluarga/"), $jumlahData);
        $this->pagination->initialize($pgConfig);

        $data = $this->keluarga->ambil_keluarga($pgConfig["per_page"], $page);

        $this->load->view("panel/include/frame", $config);
        $this->load->view("panel/kependudukan/daftar_keluarga", compact("data", "jumlahData"));
        $this->load->view("panel/include/footer");
    }

    public function profil_wilayah($triwulan = null)
    {
        permit(["System Administrator"],false);
        $triwulan = ($triwulan == null) ? ceil(date("m", time()) / 3) : $triwulan;
        if ($triwulan > 4 || $triwulan < 1) {
            set_flash_notif("input_error", "triwulan tidak valid!");
            redirect(base_url("/panel/profil_wilayah/"));
            exit();
        }

        /*---------- Form input submit ---------*/
        /*--------------------------------------*/
        $this->onButtonSubmit(function () {
            $this->onPostInvalid([
                "luas_kawasan",
                "latitude",
                "longitude",
                "jumlah_bangunan",
                "jumlah_lahan",
                "jumlah_bangunan_ber_imb",
                "desc_karakteristik_wilayah",
                "urt_sampah_terangkut",
                "kws_bebas_banjir",
                "kws_mengalami_banjir",
                "saluran_tidak_memadai",
                "urt_bersanitasi",
                "urt_air_minum",
                "urt_air_bersih",
                "kws_proteksi_kebakaran",
                "jln_akses_pemadam",
                "desc_permasalahan_utama"
            ], function ($invalidKey) {
                set_flash_notif("form_error", "Isi field " . $invalidKey . "!");
                redirect(base_url("/panel/profil_wilayah"));
            });
            $post = $this->input->post();
            $current_triwulan = ceil(date("m", time()) / 3);
            if ($post["triwulan"] != $current_triwulan) {
                set_flash_notif("input_error", "triwulan sudah berlalu!");
                redirect(base_url("/panel/profil_wilayah/"));
                exit();
            }
            $condition = $this
                ->wilayah
                ->simpan_profil_wilayah(
                    $post["luas_kawasan"],
                    $post["latitude"],
                    $post["longitude"],
                    $post["jumlah_bangunan"],
                    $post["jumlah_lahan"],
                    $post["jumlah_bangunan_ber_imb"],
                    $post["desc_karakteristik_wilayah"],
                    $post["urt_sampah_terangkut"],
                    $post["desc_urt_sampah_terangkut"],
                    $post["kws_bebas_banjir"],
                    $post["desc_kws_bebas_banjir"],
                    $post["kws_mengalami_banjir"],
                    $post["desc_kws_mengalami_banjir"],
                    $post["saluran_tidak_memadai"],
                    $post["desc_saluran_tidak_memadai"],
                    $post["urt_bersanitasi"],
                    $post["desc_urt_bersanitasi"],
                    $post["urt_air_minum"],
                    $post["desc_urt_air_minum"],
                    $post["urt_air_bersih"],
                    $post["desc_urt_air_bersih"],
                    $post["kws_proteksi_kebakaran"],
                    $post["desc_kws_proteksi_kebakaran"],
                    $post["jln_akses_pemadam"],
                    $post["desc_jln_akses_pemadam"],
                    $post["desc_permasalahan_utama"],
                    $post["triwulan"]
                );
            if ($condition) {
                set_flash_notif("form_success", "Data profil berhasil diupdate!");
                redirect(base_url("/panel/profil_wilayah/"));
            } else {
                set_flash_notif("form_error", "Data profil gagal diupdate!");
                redirect(base_url("/panel/profil_wilayah/"));
            }
        });
        /*--------------------------------------*/
        /*---------- END form input submit ---------*/

        $config = Array(
            "menu" => $this->active_menu("wilayah", "profil_wilayah"),
            "title" => "Profil Wilayah"
        );
        $data = $this->wilayah->ambil_profil_wilayah(null, null, $triwulan);

        $this->load->view("panel/include/frame", $config);
        $this->load->view("panel/wilayah/profil_wilayah", compact("data", "triwulan"));
        $this->load->view("panel/include/footer");
    }

    public function input_pengguna() {
        permit(["System Administrator"],true);
        /*---------- Form input submit ---------*/
        /*--------------------------------------*/
        $this->onButtonSubmit(function(){
            $this->onPostInvalid(function(){

            });
        });

        $config = Array(
            "menu" => $this->active_menu("pengguna","input_pengguna"),
            "title" => "Input Pengguna"
        );

        $this->load->view("panel/include/frame");
//        $this->load->view("panel/");
        $this->load->view("panel/include/footer");

    }

    public
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url("/login"));
    }

    public
    function import()
    {
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

    /*--- Ajax endpoints ---*/
    public
    function ambil_flash_notif()
    {
        if ($this->input->is_ajax_request()) {
            $notif = get_flash_notif();
            sendJSON($notif);
        }
    }

    /*--- Fungsi konfig / triggered ---*/
    protected
    function active_menu($parent, $child = null)
    {
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
                "childs" => Array(
                    "profil_wilayah" => "",
                    "permasalahan_wilayah" => ""
                )
            ),
            "pengguna" => Array(
                "current" => "",
                "childs" => Array(
                    "daftar_pengguna" => "",
                    "input_pengguna" => ""
                )
            )
        );

        if (isset($menus[$parent])) {
            if (count($menus[$parent]["childs"]) != 0 && $child == null)
                exit("Sertakan child menu");

            if ($child != null) {
                if (!isset($menus[$parent]["childs"][$child])) {
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

    private
    function get_pagination_config($base_url, $total, $per_page = 10, $uri_segment = 3)
    {
        $pgConfig = [];
        $pgConfig["enable_query_strings"] = true;
        $pgConfig["suffix"] = "?q=" . $this->input->get("q");
        $pgConfig["first_url"] = $base_url . "?q=" . $this->input->get("q");
        $pgConfig["base_url"] = $base_url;
        $pgConfig["total_rows"] = $total;
        $pgConfig["per_page"] = $per_page;
        $pgConfig["uri_segment"] = $uri_segment;

        $pgConfig['full_tag_open'] = '<ul class="pagination">';
        $pgConfig['full_tag_close'] = '</ul><!--pagination-->';
        $pgConfig['first_link'] = '&laquo; Halaman Awal';
        $pgConfig['first_tag_open'] = '<li class="prev page">';
        $pgConfig['first_tag_close'] = '</li>';
        $pgConfig['last_link'] = 'Halaman Akhir &raquo;';
        $pgConfig['last_tag_open'] = '<li class="next page">';
        $pgConfig['last_tag_close'] = '</li>';
        $pgConfig['next_link'] = 'Berikut &rarr;';
        $pgConfig['next_tag_open'] = '<li class="next page">';
        $pgConfig['next_tag_close'] = '</li>';
        $pgConfig['prev_link'] = '&larr; Sebelum';
        $pgConfig['prev_tag_open'] = '<li class="prev page">';
        $pgConfig['prev_tag_close'] = '</li>';
        $pgConfig['cur_tag_open'] = '<li class="active"><a href="">';
        $pgConfig['cur_tag_close'] = '</a></li>';
        $pgConfig['num_tag_open'] = '<li class="page">';
        $pgConfig['num_tag_close'] = '</li>';
        return $pgConfig;
    }

    private
    function onButtonSubmit($callback, $btnName = "btnSubmit")
    {
        if (isset($_POST[$btnName])) {
            $callback();
            exit();
        }
    }

    private
    function onPostInvalid($keys, $callback)
    {
        $invalid = false;
        $invalidKey = null;
        foreach ($keys as $key) {
            if (!berisi($this->input->post($key))) {
                $invalid = true;
                $invalidKey = $key;
                break;
            }
        }
        if ($invalid) {
            $callback($invalidKey);
            exit();
        }

    }
}