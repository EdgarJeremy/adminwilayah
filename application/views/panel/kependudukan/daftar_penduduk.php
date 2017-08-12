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
                            PENDUDUK (wilayah_disini)
                            <small>Menampilkan <code><?php echo count($data); ?> KTP</code> dari
                                <code><?php echo $jumlahData; ?> total KTP</code> ditemukan
                            </small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="<?php echo base_url("/panel/input_penduduk/"); ?>"
                                           class=" waves-effect waves-block">Tambah Penduduk</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Cetak Halaman
                                            Ini</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Cetak Semua</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">search</i>
                                        </span>
                            <div class="form-line">
                                <input value="<?php echo(isset($_GET["q"]) ? $_GET["q"] : "") ?>"
                                       class="form-control data" placeholder="Cari (Tekan enter)"
                                       id="enter_search_input">
                            </div>
                            <div style="display:none;">
                                <form action="<?php echo base_url("/panel/daftar_penduduk/"); ?>" id="search_value_form">
                                    <input name="q" type="hidden">
                                </form>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Nama</th>
                                <th>No. KTP</th>
                                <th>Tempat/Tgl Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Agama</th>
                                <th>Golongan Darah</th>
                                <th>Pekerjaan</th>
                                <th>Tindakan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $key => $penduduk): ?>
                                <tr>
                                    <td><?php echo $penduduk->nama; ?></td>
                                    <td><?php echo $penduduk->no_ktp; ?></td>
                                    <td><?php echo $penduduk->tempat_lahir . "/" . $penduduk->tanggal_lahir; ?></td>
                                    <td>
                                        <b><?php echo ($penduduk->jenis_kelamin == 1) ? "Laki-laki" : "Perempuan"; ?></b>
                                    </td>
                                    <td><?php echo $penduduk->nama_kecamatan . " - " . $penduduk->nama_kelurahan; ?></td>
                                    <td><?php echo $penduduk->nama_agama; ?></td>
                                    <td><?php echo $penduduk->nama_golongan_darah; ?></td>
                                    <td><?php echo $penduduk->nama_pekerjaan; ?></td>
                                    <td>
                                        <a href="<?php echo base_url("/panel/detail_penduduk/" . $penduduk->id_penduduk) ?>"
                                           class="btn bg-blue waves-effect">DETAIL</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?php echo $this->pagination->create_links(); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>