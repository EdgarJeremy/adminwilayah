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
                            KELUARGA (wilayah_disini)
                            <small>Menampilkan <code>20 KK</code> dari <code>2130</code> total KK terinput</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="<?php echo base_url("/panel/input_penduduk/"); ?>" class=" waves-effect waves-block">Tambah Keluarga</a></li>
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
                                <th>Nama Kepala Keluarga</th>
                                <th>No. KK</th>
                                <th>No. Rumah</th>
                                <th>Tindakan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $key=>$keluarga):?>
                            <tr>
                                <td><?php echo $keluarga->nama_kepemilikan; ?></td>
                                <td><?php echo $keluarga->no_kk; ?></td>
                                <td><?php echo $keluarga->no_rumah; ?></td>
                                <td>
                                    <button type="button" class="btn bg-blue waves-effect">DETAIL</button>
                                </td>
                            </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>