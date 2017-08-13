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
                "password" => md5($password)
            ))
            ->row();
    }

}