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
                            <?php echo $this->session->userdata("nama_kecamatan") . " " . $this->session->userdata("nama_kelurahan") . " " . $this->session->userdata("nama_lingkungan"); ?>
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
                        <div class="row clearfix">
                            <div class="container-fluid">
                                <div class="switch">
                                    <b>Edit Mode</b>&nbsp;&nbsp;
                                    <label>OFF<input type="checkbox" id="edit_mode" <?php echo ($triwulan != ceil(date("m")/3)) ? "disabled" : ""; ?>><span class="lever"></span>ON</label>
                                </div><br />
                                <b>Triwulan (Tahun : <?php echo date("Y",time()); ?>)</b>&nbsp;&nbsp;
                                <select class="form-control show-tick" id="triwulan" name="triwulan" data-live-search="true" required>
                                    <option value="1" <?php echo ($triwulan == 1) ? "selected" : ""; ?>>Triwulan 1 | Januari - Maret</option>
                                    <option value="2" <?php echo ($triwulan == 2) ? "selected" : ""; ?>>Triwulan 2 | April - Juni</option>
                                    <option value="3" <?php echo ($triwulan == 3) ? "selected" : ""; ?>>Triwulan 3 | Juli - September</option>
                                    <option value="4" <?php echo ($triwulan == 4) ? "selected" : ""; ?>>Triwulan 4 | Oktober - Desember</option>
                                </select>
                                <hr/>
                                <?php if ($data == null): ?>
                                    <div class="alert bg-orange">
                                        <p><i class="material-icons">warning</i> Data profil belum diisi! Silahkan isi
                                            profil wilayah anda dengan mengisi form di bawah</p>
                                    </div>
                                <?php endif; ?>
                                <form action="" method="post" id="edit_form">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h4>Luas Kawasan (Ha)</h4>
                                                <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">map</i>
                                            </span>
                                                    <div class="form-line">
                                                        <input name="luas_kawasan" type="number" step="0.0000001" class="form-control" value="<?php echo ($data != null) ? $data->luas_kawasan : "" ; ?>"
                                                               required disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Latitude</h4>
                                                <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">pin_drop</i>
                                            </span>
                                                    <div class="form-line">
                                                        <input name="latitude" type="number" step="0.0000001" class="form-control" value="<?php echo ($data != null) ? $data->latitude : "" ; ?>"
                                                               required disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Longitude</h4>
                                                <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">pin_drop</i>
                                            </span>
                                                    <div class="form-line">
                                                        <input name="longitude" type="number" step="0.0000001" class="form-control" value="<?php echo ($data != null) ? $data->longitude : "" ; ?>"
                                                               required disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Jumlah Bangunan</h4>
                                                <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">home</i>
                                            </span>
                                                    <div class="form-line">
                                                        <input name="jumlah_bangunan" type="number" class="form-control" value="<?php echo ($data != null) ? $data->jumlah_bangunan : "" ; ?>"
                                                               required disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Jumlah Lahan</h4>
                                                <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">layers</i>
                                            </span>
                                                    <div class="form-line">
                                                        <input name="jumlah_lahan" type="number" class="form-control" value="<?php echo ($data != null) ? $data->jumlah_lahan : "" ; ?>"
                                                               required disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Jumlah Bangunan Ber-IMB (Izin Mendirikan Bangunan)</h4>
                                                <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">layers</i>
                                            </span>
                                                    <div class="form-line">
                                                        <input name="jumlah_bangunan_ber_imb" type="number" class="form-control"  value="<?php echo ($data != null) ? $data->jumlah_bangunan_ber_imb : "" ; ?>"
                                                               required disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="<?php echo base_url("/assets/images/map.png"); ?>" alt="Peta"
                                                 width="100%" height="100%">
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h4>Karakteristik Wilayah</h4>
                                                <div class="input-group input-group-lg">
                                                    <div class="form-line">
                                                <textarea name="desc_karakteristik_wilayah"  rows="4" class="form-control no-resize"
                                                          placeholder="Deskripsi..." required disabled><?php echo ($data != null) ? $data->desc_karakteristik_wilayah : "" ; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Cakupan angkutan sampah per unit rumah tangga</h4>
                                                <div class="input-group input-group-lg">
                                                    <div class="form-line">
                                                        <input type="number" placeholder="Jumlah..." step="0.0000001" name="urt_sampah_terangkut" class="form-control" value="<?php echo ($data != null) ? $data->urt_sampah_terangkut : "" ; ?>" required disabled>
                                                    </div>
                                                    <div class="form-line">
                                                <textarea name="desc_urt_sampah_terangkut" rows="4" class="form-control no-resize"
                                                          placeholder="Deskripsi..." disabled><?php echo ($data != null) ? $data->desc_urt_sampah_terangkut : "" ; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Kawasan Bebas Banjir (Ha)</h4>
                                                <div class="input-group input-group-lg">
                                                    <div class="form-line">
                                                        <input type="number" placeholder="Jumlah..." step="0.0000001" name="kws_bebas_banjir" class="form-control" value="<?php echo ($data != null) ? $data->kws_bebas_banjir : "" ; ?>" required disabled>
                                                    </div>
                                                    <div class="form-line">
                                                <textarea name="desc_kws_bebas_banjir" rows="4" class="form-control no-resize"
                                                          placeholder="Deskripsi..." disabled><?php echo ($data != null) ? $data->desc_kws_bebas_banjir : "" ; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Kawasan Mengalami Banjir (Ha)</h4>
                                                <div class="input-group input-group-lg">
                                                    <div class="form-line">
                                                        <input type="number" placeholder="Jumlah... " step="0.0000001" name="kws_mengalami_banjir" class="form-control" value="<?php echo ($data != null) ? $data->kws_mengalami_banjir : "" ; ?>" required disabled>
                                                    </div>
                                                    <div class="form-line">
                                                <textarea name="desc_kws_mengalami_banjir" rows="4" class="form-control no-resize"
                                                          placeholder="Deskripsi..." disabled><?php echo ($data != null) ? $data->desc_kws_mengalami_banjir : "" ; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Konstruksi Saluran Tidak Memadai (Meter)</h4>
                                                <div class="input-group input-group-lg">
                                                    <div class="form-line">
                                                        <input type="number" placeholder="Jumlah..." step="0.0000001" name="saluran_tidak_memadai" class="form-control" value="<?php echo ($data != null) ? $data->saluran_tidak_memadai : "" ; ?>" required disabled>
                                                    </div>
                                                    <div class="form-line">
                                                <textarea name="desc_saluran_tidak_memadai" rows="4" class="form-control no-resize"
                                                          placeholder="Deskripsi..." disabled><?php echo ($data != null) ? $data->desc_saluran_tidak_memadai : "" ; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Unit rumah tangga bersanitasi sesuai persyaratan teknis</h4>
                                                <div class="input-group input-group-lg">
                                                    <div class="form-line">
                                                        <input type="number" placeholder="Jumlah..." name="urt_bersanitasi" class="form-control" value="<?php echo ($data != null) ? $data->urt_bersanitasi : "" ; ?>" required disabled>
                                                    </div>
                                                    <div class="form-line">
                                                <textarea name="desc_urt_bersanitasi" rows="4" class="form-control no-resize"
                                                          placeholder="Deskripsi..." disabled><?php echo ($data != null) ? $data->desc_urt_bersanitasi : "" ; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h4>Cakupan air minum per unit rumah tangga</h4>
                                                <div class="input-group input-group-lg">
                                                    <div class="form-line">
                                                        <input type="number" placeholder="Jumlah..." name="urt_air_minum" class="form-control" value="<?php echo ($data != null) ? $data->urt_air_minum : "" ; ?>" required disabled>
                                                    </div>
                                                    <div class="form-line">
                                                <textarea name="desc_urt_air_minum" rows="4" class="form-control no-resize"
                                                          placeholder="Deskripsi..." disabled><?php echo ($data != null) ? $data->desc_urt_air_minum : "" ; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Cakupan air bersih (mandi & cuci)</h4>
                                                <div class="input-group input-group-lg">
                                                    <div class="form-line">
                                                        <input type="number" placeholder="Jumlah..." name="urt_air_bersih" class="form-control" value="<?php echo ($data != null) ? $data->urt_air_bersih : "" ; ?>" required disabled>
                                                    </div>
                                                    <div class="form-line">
                                                <textarea name="desc_urt_air_bersih" rows="4" class="form-control no-resize"
                                                          placeholder="Deskripsi..." disabled><?php echo ($data != null) ? $data->desc_urt_air_bersih : "" ; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Kawasan yang memiliki proteksi kebakaran (Ha)</h4>
                                                <div class="input-group input-group-lg">
                                                    <div class="form-line">
                                                        <input type="number" placeholder="Jumlah..." step="0.0000001" name="kws_proteksi_kebakaran" class="form-control" value="<?php echo ($data != null) ? $data->kws_proteksi_kebakaran : "" ; ?>" required disabled>
                                                    </div>
                                                    <div class="form-line">
                                                <textarea name="desc_kws_proteksi_kebakaran" rows="4" class="form-control no-resize"
                                                          placeholder="Deskripsi..." disabled><?php echo ($data != null) ? $data->desc_kws_proteksi_kebakaran : "" ; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Jalanan akses kendaraan pemadam kebakaran (Meter)</h4>
                                                <div class="input-group input-group-lg">
                                                    <div class="form-line">
                                                        <input type="number" placeholder="Jumlah..." step="0.0000001" name="jln_akses_pemadam" class="form-control" value="<?php echo ($data != null) ? $data->jln_akses_pemadam : "" ; ?>" required disabled>
                                                    </div>
                                                    <div class="form-line">
                                                <textarea name="desc_jln_akses_pemadam" rows="4" class="form-control no-resize"
                                                          placeholder="Deskripsi..." disabled><?php echo ($data != null) ? $data->desc_jln_akses_pemadam : "" ; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Permasalahan Utama</h4>
                                                <div class="input-group input-group-lg">
                                                    <div class="form-line">
                                                <textarea name="desc_permasalahan_utama" rows="4" class="form-control no-resize"
                                                          placeholder="Deskripsi..."
                                                          required disabled><?php echo ($data != null) ? $data->desc_permasalahan_utama : "" ; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="triwulan" value="<?php echo $triwulan;?>">
                                                <button name="btnSubmit" type="submit"
                                                        class="btn bg-red btn-lg waves-effect" disabled>
                                                    SIMPAN
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>