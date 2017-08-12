<?php
defined("BASEPATH") or exit("No direct script access allowed!");

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->has_userdata("id_pengguna"))
            redirect(base_url("/panel"));
        $this->load->model("Pengguna_model","pengguna");
    }

    public function index() {
        $this->onButtonSubmit(function(){
            $data = $this
                ->pengguna
                ->ambil_pengguna_by_credit(
                    $this->input->post("username"),
                    $this->input->post("password")
                );
            if($data != null) {
                $this->session->set_userdata((array)$data);
                set_flash_notif("login_success","Selamat datang kembali " . $data->nama_lengkap . "! Selamat bekerja");
                redirect(base_url("/panel"));
            } else {
                set_flash_notif("loginNotif","Username atau password yang anda masukkan tidak valid!");
                redirect(base_url("/"));
            }
        });
        $this->load->view("sign-in.php");
    }

    public function ambil_flash_notif() {
        if($this->input->is_ajax_request()) {
            $notif = get_flash_notif();
            header("Content-Type: application/json;charset=utf-8");
            echo json_encode($notif);
        }
    }

    private function onButtonSubmit($callback,$btnName = "btnSubmit") {
        if(isset($_POST[$btnName])) {
            $callback();
            exit();
        }
    }

}