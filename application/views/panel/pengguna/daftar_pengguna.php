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
                            Daftar Pengguna
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
                                <form action="<?php echo base_url("/panel/daftar_pengguna/"); ?>"
                                      id="search_value_form">
                                    <input name="q" type="hidden">
                                </form>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Wilayah</th>
                                <th>Status Pengguna</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $key => $pengguna): ?>
                                <tr>
                                    <td><?php echo $pengguna->nama_lengkap; ?></td>
                                    <td><?php echo $pengguna->username; ?></td>
                                    <td><?php echo $pengguna->email; ?></td>
                                    <td><?php echo $pengguna->level; ?></td>
                                    <td>
                                        <?php
                                        switch ($pengguna->level) {
                                            case "Pala" :
                                                echo $pengguna->nama_kecamatan . ", " . $pengguna->nama_kelurahan . ", " . $pengguna->nama_lingkungan;
                                                break;
                                            case "Lurah" :
                                            case "Pala" :
                                                echo $pengguna->nama_kecamatan . ", " . $pengguna->nama_kelurahan;
                                                break;
                                            case "Camat" :
                                                echo $pengguna->nama_kecamatan;
                                                break;
                                            case "Wakil Walikota" :
                                                break;
                                            case "Walikota" :
                                                break;
                                            case "System Administrator" :
                                                break;
                                            default :
                                                break;
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo ($pengguna->aktif == 1) ? "<span style='display: block;text-transform: uppercase;' class='font-bold col-green waves-effect p-t-5 p-r-5 p-b-5 p-l-5'>Aktif</span>" : "<span style='display: block;text-transform: uppercase;' class='font-bold col-amber waves-effect p-t-5 p-r-5 p-b-5 p-l-5'>Suspend</span>"; ?></td>
                                    <td>
                                        <a href="<?php echo base_url("/panel/detail_pengguna/" . $pengguna->id_pengguna); ?>"
                                           class="btn waves-effect btn-primary btn-lg">Lihat/Edit</a>
                                        <?php if ($pengguna->aktif == 1): ?>
                                            <a href="<?php echo base_url("/panel/update_status/0/".$pengguna->id_pengguna."/".$pengguna->nama_lengkap); ?>"
                                               class="btn waves-effect btn-lg bg-amber">Kunci Akun</a>
                                        <?php else: ?>
                                            <a href="<?php echo base_url("/panel/update_status/1/".$pengguna->id_pengguna."/".$pengguna->nama_lengkap); ?>" class="btn waves-effect btn-lg bg-green">Aktifkan Akun</a>
                                        <?php endif; ?>
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
</section>