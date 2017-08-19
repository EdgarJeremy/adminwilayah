<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Pengguna_model extends CI_Model {

    public function ambil_pengguna_by_credit($username,$password) {
        return $this
            ->db
            ->select("
                pengguna.id_pengguna,
                pengguna.nama_lengkap,
                pengguna.username,
                pengguna.email,
                pengguna.aktif,
                pengguna.level,
                pengguna.idkecamatan,
                pengguna.idkelurahan,
                pengguna.idlingkungan,
                kecamatan.nama_kecamatan,
                kelurahan.nama_kelurahan,
                lingkungan.nama_lingkungan
            ")
            ->join("kecamatan","pengguna.idkecamatan = kecamatan.idkecamatan","left")
            ->join("kelurahan","pengguna.idkelurahan = kelurahan.idkelurahan","left")
            ->join("lingkungan","pengguna.idlingkungan = lingkungan.idlingkungan","left")
            ->get_where("pengguna",array(
                "username" => $username,
                "password" => md5($password),
                "aktif" => 1
            ))
            ->row();
    }

    public function simpan_pengguna($nama_lengkap,$username,$email,$password,$level,$aktif,$idkecamatan,$idkelurahan,$idlingkungan) {
        if($this
                ->db
                ->select("username")
                ->from("pengguna")
                ->where("username",$username)
                ->get()->num_rows() > 0) {
            return "username";
        }
        if($this
                ->db
                ->select("email")
                ->from("pengguna")
                ->where("email",$email)
                ->get()->num_rows() > 0) {
            return "email";
        }
        return $this
            ->db
            ->insert("pengguna",array(
                "nama_lengkap" => $nama_lengkap,
                "username" => $username,
                "email" => $email,
                "password" => md5($password),
                "level" => $level,
                "aktif" => $aktif,
                "idkecamatan" => $idkecamatan,
                "idkelurahan" => $idkelurahan,
                "idlingkungan" => $idlingkungan
            ));
    }

    public function ambil_pengguna($limit,$offset) {
        $cari = $this->input->get("q");
        return $this
            ->db
            ->select("
                pengguna.id_pengguna,
                pengguna.nama_lengkap,
                pengguna.username,
                pengguna.email,
                pengguna.level,
                pengguna.aktif,
                pengguna.idkecamatan,
                pengguna.idkelurahan,
                pengguna.idlingkungan,
                kecamatan.nama_kecamatan,
                kelurahan.nama_kelurahan,
                lingkungan.nama_lingkungan
            ")
            ->limit($limit,$offset)
            ->join("kecamatan","kecamatan.idkecamatan = pengguna.idkecamatan","left")
            ->join("kelurahan","kelurahan.idkelurahan = pengguna.idkelurahan","left")
            ->join("lingkungan","lingkungan.idlingkungan = pengguna.idlingkungan","left")
            ->like("pengguna.nama_lengkap",$cari)
            ->or_like("pengguna.username",$cari)
            ->or_like("pengguna.email",$cari)
            ->or_like("pengguna.level",$cari)
            ->or_like("pengguna.aktif",$cari)
            ->or_like("kecamatan.nama_kecamatan",$cari)
            ->or_like("kelurahan.nama_kelurahan",$cari)
            ->or_like("lingkungan.nama_lingkungan",$cari)
            ->get("pengguna")
            ->result();
    }

    public function ambil_pengguna_by_id($id_pengguna) {
        return $this
            ->db
            ->select("
                pengguna.id_pengguna,
                pengguna.nama_lengkap,
                pengguna.username,
                pengguna.email,
                pengguna.level,
                pengguna.aktif,
                pengguna.idkecamatan,
                pengguna.idkelurahan,
                pengguna.idlingkungan,
                kecamatan.nama_kecamatan,
                kelurahan.nama_kelurahan,
                lingkungan.nama_lingkungan
            ")
            ->join("kecamatan","kecamatan.idkecamatan = pengguna.idkecamatan","left")
            ->join("kelurahan","kelurahan.idkelurahan = pengguna.idkelurahan","left")
            ->join("lingkungan","lingkungan.idlingkungan = pengguna.idlingkungan","left")
            ->where("pengguna.id_pengguna",$id_pengguna)
            ->get("pengguna")
            ->row();
    }

    public function hitung_pengguna() {
        $cari = $this->input->get("q");
        return $this
            ->db
            ->select("
                pengguna.id_pengguna,
                pengguna.nama_lengkap,
                pengguna.username,
                pengguna.email,
                pengguna.level,
                pengguna.aktif,
                pengguna.idkecamatan,
                pengguna.idkelurahan,
                pengguna.idlingkungan,
                kecamatan.nama_kecamatan,
                kelurahan.nama_kelurahan,
                lingkungan.nama_lingkungan
            ")
            ->join("kecamatan","kecamatan.idkecamatan = pengguna.idkecamatan","left")
            ->join("kelurahan","kelurahan.idkelurahan = pengguna.idkelurahan","left")
            ->join("lingkungan","lingkungan.idlingkungan = pengguna.idlingkungan","left")
            ->like("pengguna.nama_lengkap",$cari)
            ->or_like("pengguna.username",$cari)
            ->or_like("pengguna.email",$cari)
            ->or_like("pengguna.level",$cari)
            ->or_like("pengguna.aktif",$cari)
            ->or_like("kecamatan.nama_kecamatan",$cari)
            ->or_like("kelurahan.nama_kelurahan",$cari)
            ->or_like("lingkungan.nama_lingkungan",$cari)
            ->get("pengguna")
            ->num_rows();
    }

}