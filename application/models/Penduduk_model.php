<?php

defined ('BASEPATH') OR exit ('No akses;');

class Penduduk_model extends CI_Model{

    public function ambil_penduduk($limit,$offset){
        return $this->db
			->select('id_penduduk,penduduk.id_agama,penduduk.id_pekerjaan,penduduk.id_status_kawin,nama,no_ktp,tempat_lahir,tanggal_lahir,jenis_kelamin,no_kk,nama_kecamatan,nama_kelurahan,nama_pekerjaan,nama_agama,nama_pendidikan,nama_golongan_darah,nama_hubungan_keluarga,nama_status_kawin')
            ->limit($limit,$offset)
            ->from('penduduk')
            ->join('pekerjaan', 'penduduk.id_pekerjaan = pekerjaan.id_pekerjaan')
            ->join('agama', 'penduduk.id_agama = agama.id_agama')
            ->join('pendidikan', 'penduduk.id_pendidikan = pendidikan.id_pendidikan')
            ->join('golongan_darah', 'penduduk.id_golongan_darah = golongan_darah.id_golongan_darah')
            ->join('hubungan_keluarga', 'penduduk.id_hubungan_keluarga = hubungan_keluarga.id_hubungan_keluarga')
            ->join('status_kawin','penduduk.id_status_kawin = status_kawin.id_status_kawin')
            ->join('kelurahan', 'penduduk.idkelurahan = kelurahan.idkelurahan')
            ->join('kecamatan', 'penduduk.idkecamatan = kecamatan.idkecamatan')
            ->where($this->input->get())
            ->get()
            ->result();
    }

    public function ambil_penduduk_by_id($id){
        return $this
            ->db
            ->select('id_penduduk,penduduk.id_agama,penduduk.id_pekerjaan,penduduk.id_pendidikan,penduduk.id_status_kawin,penduduk.id_golongan_darah,penduduk.id_hubungan_keluarga,nama,no_ktp,tempat_lahir,tanggal_lahir,jenis_kelamin,no_kk,nama_kecamatan,nama_kelurahan,nama_pekerjaan,nama_agama,nama_pendidikan,nama_golongan_darah,nama_hubungan_keluarga,nama_status_kawin')
            ->limit(1)
            ->from('penduduk')
            ->join('pekerjaan', 'penduduk.id_pekerjaan = pekerjaan.id_pekerjaan')
            ->join('agama', 'penduduk.id_agama = agama.id_agama')
            ->join('pendidikan', 'penduduk.id_pendidikan = pendidikan.id_pendidikan')
            ->join('golongan_darah', 'penduduk.id_golongan_darah = golongan_darah.id_golongan_darah')
            ->join('hubungan_keluarga', 'penduduk.id_hubungan_keluarga = hubungan_keluarga.id_hubungan_keluarga')
            ->join('status_kawin','penduduk.id_status_kawin = status_kawin.id_status_kawin')
            ->join('kelurahan', 'penduduk.idkelurahan = kelurahan.idkelurahan')
            ->join('kecamatan', 'penduduk.idkecamatan = kecamatan.idkecamatan')
            ->where(array('id_penduduk'=>$id))
            ->get()
            ->row();
    }

    public function ambil_penduduk_by_no_kk($no_kk){
        return $this->db
			->select('id_penduduk,penduduk.id_agama,penduduk.id_pekerjaan,penduduk.id_status_kawin,nama,no_ktp,tempat_lahir,tanggal_lahir,jenis_kelamin,no_kk,nama_kecamatan,nama_kelurahan,nama_pekerjaan,nama_agama,nama_pendidikan,nama_golongan_darah,nama_hubungan_keluarga,nama_status_kawin')
            ->limit(1)
            ->from('penduduk')
            ->join('pekerjaan', 'penduduk.id_pekerjaan = pekerjaan.id_pekerjaan')
            ->join('agama', 'penduduk.id_agama = agama.id_agama')
            ->join('pendidikan', 'penduduk.id_pendidikan = pendidikan.id_pendidikan')
            ->join('golongan_darah', 'penduduk.id_golongan_darah = golongan_darah.id_golongan_darah')
            ->join('hubungan_keluarga', 'penduduk.id_hubungan_keluarga = hubungan_keluarga.id_hubungan_keluarga')
            ->join('status_kawin','penduduk.id_status_kawin = status_kawin.id_status_kawin')
            ->join('kelurahan', 'penduduk.idkelurahan = kelurahan.idkelurahan')
            ->join('kecamatan', 'penduduk.idkecamatan = kecamatan.idkecamatan')
            ->where(array('no_kk'=> $no_kk))
            ->get()
            ->row();
    }

    public function ambil_penduduk_by_no_ktp($no_ktp){
        return $this->db
			->select('id_penduduk,penduduk.id_agama,penduduk.id_pekerjaan,penduduk.id_status_kawin,nama,no_ktp,tempat_lahir,tanggal_lahir,jenis_kelamin,no_kk,nama_kecamatan,nama_kelurahan,nama_pekerjaan,nama_agama,nama_pendidikan,nama_golongan_darah,nama_hubungan_keluarga,nama_status_kawin')
            ->limit(1)
            ->from('penduduk')
            ->join('pekerjaan', 'penduduk.id_pekerjaan = pekerjaan.id_pekerjaan')
            ->join('agama', 'penduduk.id_agama = agama.id_agama')
            ->join('pendidikan', 'penduduk.id_pendidikan = pendidikan.id_pendidikan')
            ->join('golongan_darah', 'penduduk.id_golongan_darah = golongan_darah.id_golongan_darah')
            ->join('hubungan_keluarga', 'penduduk.id_hubungan_keluarga = hubungan_keluarga.id_hubungan_keluarga')
            ->join('status_kawin','penduduk.id_status_kawin = status_kawin.id_status_kawin')
            ->join('kelurahan', 'penduduk.idkelurahan = kelurahan.idkelurahan')
            ->join('kecamatan', 'penduduk.idkecamatan = kecamatan.idkecamatan')
            ->where(array('no_ktp'=> $no_ktp))
            ->get()
            ->row();
    }

    public function cari_penduduk($limit,$offset){
        $cari = $this->input->get('q');

        return $this->db
						->select('id_penduduk,penduduk.id_agama,penduduk.id_pekerjaan,penduduk.id_status_kawin,nama,no_ktp,tempat_lahir,tanggal_lahir,jenis_kelamin,no_kk,nama_kecamatan,nama_kelurahan,nama_pekerjaan,nama_agama,nama_pendidikan,nama_golongan_darah,nama_hubungan_keluarga,nama_status_kawin')
						->limit($limit,$offset)
                        ->from('penduduk')
                        ->join('pekerjaan', 'penduduk.id_pekerjaan = pekerjaan.id_pekerjaan')
                        ->join('agama', 'penduduk.id_agama = agama.id_agama')
                        ->join('pendidikan', 'penduduk.id_pendidikan = pendidikan.id_pendidikan')
                        ->join('golongan_darah', 'penduduk.id_golongan_darah = golongan_darah.id_golongan_darah')
                        ->join('hubungan_keluarga', 'penduduk.id_hubungan_keluarga = hubungan_keluarga.id_hubungan_keluarga')
                        ->join('status_kawin','penduduk.id_status_kawin = status_kawin.id_status_kawin')
                        ->join('kelurahan', 'penduduk.idkelurahan = kelurahan.idkelurahan')
                        ->join('kecamatan', 'penduduk.idkecamatan = kecamatan.idkecamatan')
                        ->like('nama', $cari)
                        ->or_like('no_ktp', $cari)
                        ->or_like('tempat_lahir', $cari)
                        ->or_like('tanggal_lahir', $cari)
                        ->or_like('jenis_kelamin', $cari)
                        ->or_like('pekerjaan.nama_pekerjaan', $cari)
                        ->or_like('agama.nama_agama', $cari)
                        ->or_like('pendidikan.nama_pendidikan', $cari)
                        ->or_like('golongan_darah.nama_golongan_darah', $cari)
                        ->or_like('status_kawin.nama_status_kawin', $cari)
                        ->or_like('kelurahan.nama_kelurahan', $cari)
                        ->or_like('kecamatan.nama_kecamatan', $cari)
                        ->get()
                        ->result();
    }

    public function hitung_penduduk(){
        $cari = $this->input->get("q");
        return $this
            ->db
            ->join('pekerjaan', 'penduduk.id_pekerjaan = pekerjaan.id_pekerjaan')
            ->join('agama', 'penduduk.id_agama = agama.id_agama')
            ->join('pendidikan', 'penduduk.id_pendidikan = pendidikan.id_pendidikan')
            ->join('golongan_darah', 'penduduk.id_golongan_darah = golongan_darah.id_golongan_darah')
            ->join('hubungan_keluarga', 'penduduk.id_hubungan_keluarga = hubungan_keluarga.id_hubungan_keluarga')
            ->join('status_kawin','penduduk.id_status_kawin = status_kawin.id_status_kawin')
            ->join('kelurahan', 'penduduk.idkelurahan = kelurahan.idkelurahan')
            ->join('kecamatan', 'penduduk.idkecamatan = kecamatan.idkecamatan')
            ->like('nama', $cari)
            ->or_like('no_ktp', $cari)
            ->or_like('tempat_lahir', $cari)
            ->or_like('tanggal_lahir', $cari)
            ->or_like('jenis_kelamin', $cari)
            ->or_like('pekerjaan.nama_pekerjaan', $cari)
            ->or_like('agama.nama_agama', $cari)
            ->or_like('pendidikan.nama_pendidikan', $cari)
            ->or_like('golongan_darah.nama_golongan_darah', $cari)
            ->or_like('status_kawin.nama_status_kawin', $cari)
            ->or_like('kelurahan.nama_kelurahan', $cari)
            ->or_like('kecamatan.nama_kecamatan', $cari)
//            ->count_all("penduduk");
            ->get("penduduk")->num_rows();
    }
	
	public function simpan_penduduk(
		$nama, 
		$no_ktp, 
		$tempat_lahir, 
		$tanggal_lahir,
		$jenis_kelamin, 
		$no_kk, 
		$id_agama, 
		$id_pekerjaan, 
		$id_pendidikan, 
		$id_golongan_darah, 
		$id_hubungan_keluarga, 
		$id_status_kawin, 
		$idlingkungan = NULL,
		$idkelurahan = NULL,
		$idkecamatan = NULL
	){
		$idlingkungan = (is_null($idlingkungan)) ? $this->session->userdata('idlingkungan') : $idlingkungan;		
		$idkelurahan = (is_null($idkelurahan)) ? $this->session->userdata('idkelurahan') : $idkelurahan;
		$idkecamatan = (is_null($idkecamatan)) ? $this->session->userdata('idkecamatan') : $idkecamatan;
							                     
		$this->db->insert('penduduk', array('nama'=>$nama, 
											'no_ktp'=>$no_ktp,
											'tempat_lahir'=>$tempat_lahir,
											'jenis_kelamin'=>$jenis_kelamin,
											'no_kk'=>$no_kk,
											'id_agama'=>$id_agama,
											'id_pekerjaan'=>$id_pekerjaan,
											'id_pendidikan'=>$id_pendidikan,
											'id_golongan_darah'=>$id_golongan_darah,
											'id_hubungan_keluarga'=>$id_hubungan_keluarga,
											'id_status_kawin'=>$id_status_kawin,
											'idlingkungan'=>$idlingkungan,
											'idkelurahan'=>$idkelurahan,
											'idkecamatan'=>$idkecamatan
											));
	
		if($this->db->affected_rows() == 1){
			return TRUE; 
		} else {
			return FALSE;
		}
	}
}