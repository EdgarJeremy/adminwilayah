<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><?php echo $title;?></h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            PENDUDUK (wilayah_disini)
                            <small>Menampilkan <code>20 KTP</code> dari <code>2130</code> total KTP terinput</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="<?php echo base_url("/panel/input_penduduk/"); ?>" class=" waves-effect waves-block">Tambah Penduduk</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Cetak Halaman Ini</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Cetak Semua</a></li>
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
                                <input type="text" class="form-control date" placeholder="Cari (Tekan enter)">
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>No. KTP</th>
                                <th>Tempat/Tgl Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Agama</th>
                                <th>Status Perkawinan</th>
                                <th>Pekerjaan</th>
                                <th>Tindakan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php for($i=0;$i<20;$i++):?>
                            <tr>
                                <th scope="row"><?php echo $i++;?></th>
                                <td>Mark</td>
                                <td>7171032208980003</td>
                                <td>22/Aug/1998</td>
                                <td><b>L</b></td>
                                <td>Singkil Satu - Singkil</td>
                                <td>Kristen Protestan</td>
                                <td>Belum Bekerja</td>
                                <td>-</td>
                                <td>
                                    <button type="button" class="btn bg-blue waves-effect">DETAIL</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $i++;?></th>
                                <td>Jacob</td>
                                <td>7171032786544432</td>
                                <td>13/Sep/2001</td>
                                <td><b>L</b></td>
                                <td>Tikala Ares - Tikala</td>
                                <td>Kristen Katholik</td>
                                <td>Sudah Bekerja</td>
                                <td>Karyawan Swasta</td>
                                <td>
                                    <button type="button" class="btn bg-blue waves-effect">DETAIL</button>
                                </td>
                            </tr>
                            <?php endfor;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>