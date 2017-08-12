<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><?php echo $title; ?></h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2><?php echo $data->nama; ?></h2>
                        <small>Nomor Induk Kependudukan <code><?php echo $data->no_ktp; ?></code></small>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="<?php echo base_url("/panel/daftar_penduduk/"); ?>"
                                           class=" waves-effect waves-block">Daftar Penduduk</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Cetak Halaman
                                            Ini</a></li>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <table class="table table-responsive">
                                    <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <td><?php echo $data->nama; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Induk Kependudukan</th>
                                        <td><?php echo $data->no_ktp; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tempat/Tanggal Lahir</th>
                                        <td><?php echo $data->tempat_lahir . "/" . $data->tanggal_lahir; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td><?php echo ($data->jenis_kelamin == 1) ? "Laki-laki" : "Perempuan"; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Domisili Kecamatan</th>
                                        <td><?php echo $data->nama_kecamatan; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Domisili Kelurahan</th>
                                        <td><?php echo $data->nama_kelurahan; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <table class="table table-responsive">
                                    <tbody>
                                    <tr>
                                        <th>Pekerjaan</th>
                                        <td><?php echo $data->nama_pekerjaan; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Agama</th>
                                        <td><?php echo $data->nama_agama; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Pendidikan Terakhir</th>
                                        <td><?php echo $data->nama_pendidikan; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Golongan Darah</th>
                                        <td><?php echo $data->nama_golongan_darah; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Hubungan Keluarga</th>
                                        <td><?php echo $data->nama_hubungan_keluarga; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Status Kawin</th>
                                        <td><?php echo $data->nama_status_kawin; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="btn-group btn-group-md" role="group" aria-label="Large button group">
                            <button type="button" class="btn bg-blue waves-effect">
                                <i class="material-icons">print</i>
                                <span>PRINT</span>
                            </button>
                            <button type="button" data-toggle="modal" data-target="#largeModal" class="btn bmd- bg-green waves-effect">
                                <i class="material-icons">mode_edit</i>
                                <span>UBAH DATA</span>
                            </button>
                            <button type="button" class="btn bg-pink waves-effect">
                                <i class="material-icons">trending_up</i>
                                <span>PINDAH DOMISILI</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Large Size -->
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">Ubah Data</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" id="form_advanced_validation">
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nama">Nama</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input id="nama" type="text" value="<?php echo $data->nama; ?>" class="form-control" name="nama"
                                                       maxlength="255" required>
                                                <label class="form-label">Isi Nama</label>
                                            </div>
                                            <div class="help-info">Field Teks (Max: 255)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nomor_ktp">No. KTP</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input id="nomor_ktp" value="<?php echo $data->no_ktp; ?>" type="number" class="form-control" name="nomor_ktp"
                                                       maxlength="16" minlength="16" required>
                                                <label class="form-label">Isi No. KTP</label>
                                            </div>
                                            <div class="help-info">Field Angka (Max: 16 - Min: 16)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input id="tempat_lahir" value="<?php echo $data->tempat_lahir; ?>" type="text" class="form-control"
                                                       name="tempat_lahir" maxlength="255" required>
                                                <label class="form-label">Isi tempat lahir</label>
                                            </div>
                                            <div class="help-info">Field Teks (Max: 255)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input id="tanggal_lahir" value="<?php echo $data->tanggal_lahir; ?>" type="text" class="datepicker form-control"
                                                       name="tanggal_lahir" required>
                                                <label class="form-label">Isi tanggal lahir</label>
                                            </div>
                                            <div class="help-info">Field Tanggal</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="jenis_kelamin" data-live-search="true" required>
                                                <option value="">Pilih</option>
                                                <option value="1" <?php echo ($data->jenis_kelamin == 1) ? "selected" : ""; ?>>Laki-Laki</option>
                                                <option value="2" <?php echo ($data->jenis_kelamin == 2) ? "selected" : ""; ?>>Perempuan</option>
                                            </select><hr style="margin: 5px 0 10px 0;"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="id_golongan_darah">Golongan Darah</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="id_golongan_darah" data-live-search="true" required>
                                                <option value="">Pilih</option>
                                                <?php foreach($golongan_darah as $item): ?>
                                                    <option value="<?php echo $item->id_golongan_darah; ?>" <?php echo ($data->id_golongan_darah == $item->id_golongan_darah) ? "selected" : ""; ?>><?php echo $item->nama_golongan_darah; ?></option>
                                                <?php endforeach; ?>
                                            </select><hr style="margin: 5px 0 10px 0;"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="agama">Agama</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="id_agama" data-live-search="true" required>
                                                <option value="">Pilih</option>
                                                <?php foreach($agama as $item): ?>
                                                <option value="<?php echo $item->id_agama; ?>" <?php echo ($data->id_agama == $item->id_agama) ? "selected" : ""; ?>><?php echo $item->nama_agama; ?></option>
                                                <?php endforeach; ?>
                                            </select><hr style="margin: 5px 0 10px 0;"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="pekerjaan">Pekerjaan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="id_pekerjaan" data-live-search="true" required>
                                                <option value="">Pilih</option>
                                                <?php foreach($pekerjaan as $item): ?>
                                                <option value="<?php echo $item->id_pekerjaan; ?>" <?php echo ($data->id_pekerjaan == $item->id_pekerjaan) ? "selected" : ""; ?>><?php echo $item->nama_pekerjaan; ?></option>
                                                <?php endforeach; ?>
                                            </select><hr style="margin: 5px 0 10px 0;"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="id_pendidikan">Pendidikan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="id_pendidikan" data-live-search="true" required>
                                                <option value="">Pilih</option>
                                                <?php foreach($pendidikan as $item): ?>
                                                    <option value="<?php echo $item->id_pendidikan; ?>" <?php echo ($data->id_pendidikan == $item->id_pendidikan) ? "selected" : ""; ?>><?php echo $item->nama_pendidikan; ?></option>
                                                <?php endforeach; ?>
                                            </select><hr style="margin: 5px 0 10px 0;"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="sudah_kawin">Status Perkawinan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="id_status_kawin" data-live-search="true" required>
                                                <option value="">Pilih</option>
                                                <?php foreach($status_kawin as $item): ?>
                                                <option value="<?php echo $item->id_status_kawin; ?>" <?php echo ($data->id_status_kawin == $item->id_status_kawin) ? "selected" : ""; ?>><?php echo $item->nama_status_kawin; ?></option>
                                                <?php endforeach; ?>
                                            </select><hr style="margin: 5px 0 10px 0;"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="id_hubungan_keluarga">Hubungan Keluarga</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="id_hubungan_keluarga" data-live-search="true" required>
                                                <option value="">Pilih</option>
                                                <?php foreach($hubungan_keluarga as $item): ?>
                                                    <option value="<?php echo $item->id_hubungan_keluarga; ?>" <?php echo ($data->id_hubungan_keluarga == $item->id_hubungan_keluarga) ? "selected" : ""; ?>><?php echo $item->nama_hubungan_keluarga; ?></option>
                                                <?php endforeach; ?>
                                            </select><hr style="margin: 5px 0 10px 0;"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nomor_kk">No. KK</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input id="nomor_kk" value="<?php echo $data->no_kk; ?>" type="number" class="form-control" name="nomor_kk"
                                                       maxlength="16" minlength="16" required>
                                                <label class="form-label">Isi No. KK</label>
                                            </div>
                                            <div class="help-info">Field Angka (Max: 16 - Min: 16)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>

</section>