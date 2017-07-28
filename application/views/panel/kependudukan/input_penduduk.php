<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><?php echo $title; ?></h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            FORMULIR KTP
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another
                                            action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else
                                            here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form class="form-horizontal" id="form_advanced_validation">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="nama">Nama</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input id="nama" type="text" class="form-control" name="nama"
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
                                                    <input id="nomor_ktp" type="number" class="form-control" name="nomor_ktp"
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
                                                    <input id="tempat_lahir" type="text" class="form-control"
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
                                                    <input id="tanggal_lahir" type="text" class="datepicker form-control"
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
                                                <select class="form-control show-tick" name="jenis_kelamin" required>
                                                    <option value="">Pilih</option>
                                                    <option value="L">Laki-Laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="agama">Agama</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <select class="form-control show-tick" name="agama" required>
                                                    <option value="">Pilih</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                                    <option value="Kristen Katholik">Kristen Katholik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Buddha">Buddha</option>
                                                    <option value="Konghuchu">Konghuchu</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="sudah_bekerja">Status Pekerjaan</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <input type="checkbox" id="sudah_bekerja" name="sudah_bekerja"
                                                       class="filled-in">
                                                <label for="sudah_bekerja">Sudah Bekerja</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="pekerjaan">Pekerjaan</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input id="pekerjaan" type="text" class="form-control"
                                                           name="pekerjaan" maxlength="255" disabled required>
                                                    <label class="form-label">Isi tempat kerja</label>
                                                </div>
                                                <div class="help-info">Field Teks (Max: 255)</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="sudah_kawin">Status Perkawinan</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <input type="checkbox" id="sudah_kawin" name="sudah_kawin"
                                                       class="filled-in">
                                                <label for="sudah_kawin">Sudah Kawin</label>
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
                                                    <input id="nomor_kk" type="number" class="form-control" name="nomor_kk"
                                                           maxlength="16" minlength="16" required>
                                                    <label class="form-label">Isi No. KK</label>
                                                </div>
                                                <div class="help-info">Field Angka (Max: 16 - Min: 16)</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SIMPAN</button>
                                            <button type="reset" class="btn btn-danger m-t-15 waves-effect">KOSONGKAN</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>