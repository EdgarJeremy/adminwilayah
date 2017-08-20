<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Wilayah_model extends CI_Model
{

    public function ambil_kecamatan()
    {
        $query = $this->db->get("kecamatan");
        return $query->result();
    }

    public function ambil_kelurahan($idkecamatan)
    {
        $this->db->where("idkecamatan", $idkecamatan);
        $query = $this->db->get("kelurahan");
        return $query->result();
    }

    public function ambil_satu_kelurahan($idkelurahan)
    {
        return $this->db->where("idkelurahan", $idkelurahan)->get("kelurahan")->row();
    }

    public function ambil_satu_kecamatan($idkecamatan)
    {
        return $this->db->where("idkecamatan", $idkecamatan)->get("kecamatan")->row();
    }

    public function ambil_lingkungan($idkelurahan)
    {
        return $this->db
            ->where("idkelurahan", $idkelurahan)
            ->get("lingkungan")
            ->result();
    }

    public function ambil_satu_lingkungan($idlingkungan)
    {
        return $this->db->where("idlingkungan", $idlingkungan)->get("lingkungan")->row();
    }

    public function ambil_profil_wilayah($idwilayah = null, $user_level = null, $triwulan = null)
    {
        $user_level = ($user_level == null) ? $this->session->userdata("level") : $user_level;
        switch ($user_level) {
            case "Camat" :
                $table = "kecamatan";
                $field = "idkecamatan";
                break;
            case "Lurah" :
                $table = "kelurahan";
                $field = "idkelurahan";
                break;
            case "Pala" :
                $table = "lingkungan";
                $field = "idlingkungan";
                break;
            default:
                $table = null;
                $field = null;
                break;
        }
        if($table == null || $field == null) return false;

        $idwilayah = ($idwilayah == null) ? $this->session->userdata($field) : $idwilayah;
        return $this
            ->db
            ->select("profil.*," . $table . ".*")
            ->join($table, "profil." . $field . " = " . $table . "." . $field, "left")
            ->where("profil." . $field, $idwilayah)
            ->where("triwulan",$triwulan)
            ->where("tahun",date("Y",time()))
            ->get("profil")
            ->row();
    }
    public function simpan_profil_wilayah(
        $luas_kawasan,
        $latitude,
        $longitude,
        $jumlah_bangunan,
        $jumlah_lahan,
        $jumlah_bangunan_ber_imb,
        $desc_karakteristik_wilayah,
        $urt_sampah_terangkut,
        $desc_urt_sampah_terangkut,
        $kws_bebas_banjir,
        $desc_kws_bebas_banjir,
        $kws_mengalami_banjir,
        $desc_kws_mengalami_banjir,
        $saluran_tidak_memadai,
        $desc_saluran_tidak_memadai,
        $urt_bersanitasi,
        $desc_urt_bersanitasi,
        $urt_air_minum,
        $desc_urt_air_minum,
        $urt_air_bersih,
        $desc_urt_air_bersih,
        $kws_proteksi_kebakaran,
        $desc_kws_proteksi_kebakaran,
        $jln_akses_pemadam,
        $desc_jln_akses_pemadam,
        $desc_permasalahan_utama,
        $triwulan,
        $idkecamatan = null,
        $idkelurahan = null,
        $idlingkungan = null,
        $idpengguna = null
    ) {
        $idkecamatan = ($idkecamatan == null) ? $this->session->userdata("idkecamatan") : $idkecamatan;
        $idkelurahan = ($idkelurahan == null) ? $this->session->userdata("idkelurahan") : $idkelurahan;
        $idlingkungan = ($idlingkungan == null) ? $this->session->userdata("idlingkungan") : $idlingkungan;
        $idpengguna = ($idpengguna == null) ? $this->session->userdata("id_pengguna") : $idpengguna;
        $row_before = $this
            ->db
            ->from("profil")
            ->where("idkecamatan",$idkecamatan)
            ->where("idkelurahan",$idkelurahan)
            ->where("idlingkungan",$idlingkungan)
            ->where("triwulan",$triwulan)
            ->where("tahun",date("Y",time()))
            ->get()
            ->num_rows();
        if($row_before == 0) {
            return $this
                ->db
                ->insert("profil",[
                    "luas_kawasan" => $luas_kawasan,
                    "latitude" => $latitude,
                    "longitude" => $longitude,
                    "jumlah_bangunan" => $jumlah_bangunan,
                    "jumlah_Lahan" => $jumlah_lahan,
                    "jumlah_bangunan_ber_imb" => $jumlah_bangunan_ber_imb,
                    "desc_karakteristik_wilayah" => $desc_karakteristik_wilayah,
                    "urt_sampah_terangkut" => $urt_sampah_terangkut,
                    "desc_urt_sampah_terangkut" => $desc_urt_sampah_terangkut,
                    "kws_bebas_banjir" => $kws_bebas_banjir,
                    "desc_kws_bebas_banjir" => $desc_kws_bebas_banjir,
                    "kws_mengalami_banjir" => $kws_mengalami_banjir,
                    "desc_kws_mengalami_banjir" => $desc_kws_mengalami_banjir,
                    "saluran_tidak_memadai" => $saluran_tidak_memadai,
                    "desc_saluran_tidak_memadai" => $desc_saluran_tidak_memadai,
                    "urt_bersanitasi" => $urt_bersanitasi,
                    "desc_urt_bersanitasi" => $desc_urt_bersanitasi,
                    "urt_air_minum" => $urt_air_minum,
                    "desc_urt_air_minum" => $desc_urt_air_minum,
                    "urt_air_bersih" => $urt_air_bersih,
                    "desc_urt_air_bersih" => $desc_urt_air_bersih,
                    "kws_proteksi_kebakaran" => $kws_proteksi_kebakaran,
                    "desc_kws_proteksi_kebakaran" => $desc_kws_proteksi_kebakaran,
                    "jln_akses_pemadam" => $jln_akses_pemadam,
                    "desc_jln_akses_pemadam" => $desc_jln_akses_pemadam,
                    "desc_permasalahan_utama" => $desc_permasalahan_utama,
                    "idkecamatan" => $idkecamatan,
                    "idkelurahan" => $idkelurahan,
                    "idlingkungan" => $idlingkungan,
                    "id_pengguna" => $idpengguna,
                    "triwulan" => $triwulan,
                    "tahun" => date("Y",time())
                ]);
        } else {
            return $this
                ->db
                ->where("idkecamatan",$idkecamatan)
                ->where("idkelurahan",$idkelurahan)
                ->where("idlingkungan",$idlingkungan)
                ->where("triwulan",$triwulan)
                ->where("tahun",date("Y",time()))
                ->update("profil",[
                    "luas_kawasan" => $luas_kawasan,
                    "latitude" => $latitude,
                    "longitude" => $longitude,
                    "jumlah_bangunan" => $jumlah_bangunan,
                    "jumlah_Lahan" => $jumlah_lahan,
                    "jumlah_bangunan_ber_imb" => $jumlah_bangunan_ber_imb,
                    "desc_karakteristik_wilayah" => $desc_karakteristik_wilayah,
                    "urt_sampah_terangkut" => $urt_sampah_terangkut,
                    "desc_urt_sampah_terangkut" => $desc_urt_sampah_terangkut,
                    "kws_bebas_banjir" => $kws_bebas_banjir,
                    "desc_kws_bebas_banjir" => $desc_kws_bebas_banjir,
                    "kws_mengalami_banjir" => $kws_mengalami_banjir,
                    "desc_kws_mengalami_banjir" => $desc_kws_mengalami_banjir,
                    "saluran_tidak_memadai" => $saluran_tidak_memadai,
                    "desc_saluran_tidak_memadai" => $desc_saluran_tidak_memadai,
                    "urt_bersanitasi" => $urt_bersanitasi,
                    "desc_urt_bersanitasi" => $desc_urt_bersanitasi,
                    "urt_air_minum" => $urt_air_minum,
                    "desc_urt_air_minum" => $desc_urt_air_minum,
                    "urt_air_bersih" => $urt_air_bersih,
                    "desc_urt_air_bersih" => $desc_urt_air_bersih,
                    "kws_proteksi_kebakaran" => $kws_proteksi_kebakaran,
                    "desc_kws_proteksi_kebakaran" => $desc_kws_proteksi_kebakaran,
                    "jln_akses_pemadam" => $jln_akses_pemadam,
                    "desc_jln_akses_pemadam" => $desc_jln_akses_pemadam,
                    "desc_permasalahan_utama" => $desc_permasalahan_utama,
                    "id_pengguna" => $idpengguna
                ]);
        }

    }

}