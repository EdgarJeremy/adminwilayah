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
                            <?php echo $pengguna->nama_lengkap; ?>
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
                                <form action="" method="post" id="input_pengguna_form">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h4>Nama Lengkap</h4>
                                                <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">perm_identity</i>
                                            </span>
                                                    <div class="form-line">
                                                        <input name="nama_lengkap" type="text" class="form-control" value="<?php echo $pengguna->nama_lengkap; ?>"
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Username</h4>
                                                <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">verified_user</i>
                                            </span>
                                                    <div class="form-line">
                                                        <input name="username" type="text" class="form-control" value="<?php echo $pengguna->username; ?>"
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Email</h4>
                                                <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                                    <div class="form-line">
                                                        <input name="email" type="email" class="form-control" value="<?php echo $pengguna->email; ?>"
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Password</h4>
                                                <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock</i>
                                            </span>
                                                    <div class="form-line">
                                                        <input name="password" type="password" class="form-control" placeholder="Kosongkan jika tidak ingin mengubah">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Ketik Ulang Password</h4>
                                                <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                                    <div class="form-line">
                                                        <input name="cpassword" type="password" class="form-control" placeholder="Kosongkan jika tidak ingin mengubah"
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h4>Level Pengguna</h4>
                                                <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">label</i>
                                            </span>
                                                    <div class="form-line">
                                                        <select class="form-control show-tick" id="level" name="level" data-live-search="true" required>
                                                            <option value=""></option>
                                                            <option value="Pala" <?php echo ($pengguna->level == "Pala") ? "selected" : ""; ?>>Pala (Lingkungan)</option>
                                                            <option value="Lurah" <?php echo ($pengguna->level == "Lurah") ? "selected" : ""; ?>>Lurah (Kelurahan)</option>
                                                            <option value="Camat" <?php echo ($pengguna->level == "Camat") ? "selected" : ""; ?>>Camat (Kecamatan)</option>
                                                            <option value="System Administrator" <?php echo ($pengguna->level == "System Administrator") ? "selected" : ""; ?>>System Administrator</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h4>Status Pengguna</h4>
                                                <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">block</i>
                                            </span>
                                                    <div class="form-line">
                                                        <div class="switch">
                                                            <label>Suspend<input type="checkbox" name="aktif" id="aktif" <?php echo ($pengguna->aktif == 1) ? "checked" : ""; ?>><span class="lever"></span>Aktif</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" id="kecamatan_container">
                                                <h4>Kecamatan</h4>
                                                <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">map</i>
                                            </span>
                                                    <div class="form-line">
                                                        <select class="form-control show-tick" id="kecamatan" name="idkecamatan" data-live-search="true">
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" id="kelurahan_container">
                                                <h4>Kelurahan</h4>
                                                <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">map</i>
                                            </span>
                                                    <div class="form-line">
                                                        <select class="form-control show-tick" id="kelurahan" name="idkelurahan" data-live-search="true">
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" id="lingkungan_container">
                                                <h4>Lingkungan</h4>
                                                <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">map</i>
                                            </span>
                                                    <div class="form-line">
                                                        <select class="form-control show-tick" id="lingkungan" name="idlingkungan" data-live-search="true">
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" style="display: none;">
                                                <input type="hidden" id="idkecamatan" value="<?php echo $pengguna->idkecamatan ?>">
                                                <input type="hidden" id="idkelurahan" value="<?php echo $pengguna->idkelurahan ?>">
                                                <input type="hidden" id="idlingkungan" value="<?php echo $pengguna->idlingkungan ?>">
                                            </div>
                                            <div class="form-group">
                                                <button name="btnSubmit" class="btn btn-primary bg-blue" type="submit">SIMPAN</button>
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