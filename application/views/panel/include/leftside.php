<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="<?php echo base_url("/assets/images/user.png");?>" width="48" height="48" alt="User"/>
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata("nama_lengkap"); ?></div>
            <div class="email">
                <?php
                if($this->session->userdata("level") == "Pala") {
                    echo $this->session->userdata("level") . " " . $this->session->userdata("nama_kelurahan")." ".$this->session->userdata("nama_lingkungan");
                } else if($this->session->userdata("level") == "Lurah") {
                    echo $this->session->userdata("level") . " " . $this->session->userdata("nama_kelurahan");
                } else if($this->session->userdata("level") == "Camat") {
                    echo $this->session->userdata("level") . " " . $this->session->userdata("nama_kecamatan");
                } else {
                    echo $this->session->userdata("level");
                }
                ?>
            </div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Grup</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="<?php echo base_url("/panel/logout/"); ?>"><i class="material-icons">input</i>Keluar</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php echo $menu["dashboard"]["current"];?>">
                <a href="<?php echo base_url("/panel");?>" class="">
                    <i class="material-icons">dashboard</i>
                    <span>Dashboard</span>
                </a>
            </li>

            <?php if($this->session->userdata("level") != "System Administrator"):?>
            <li class="<?php echo $menu["kependudukan"]["current"];?>">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">nature_people</i>
                    <span>Kependudukan</span>
                </a>
                <ul class="ml-menu">
                    <li class="<?php echo $menu["kependudukan"]["childs"]["daftar_penduduk"];?>">
                        <a href="<?php echo base_url("/panel/daftar_penduduk/"); ?>">Daftar Penduduk</a>
                    </li>
                    <li class="<?php echo $menu["kependudukan"]["childs"]["input_penduduk"];?>">
                        <a href="<?php echo base_url("/panel/input_penduduk/"); ?>">Input Penduduk</a>
                    </li>
                    <li class="<?php echo $menu["kependudukan"]["childs"]["daftar_keluarga"];?>">
                        <a href="<?php echo base_url("/panel/daftar_keluarga/"); ?>">Daftar Keluarga</a>
                    </li>
                    <li class="<?php echo $menu["kependudukan"]["childs"]["input_keluarga"];?>">
                        <a href="javascript:void(0);">Input Keluarga</a>
                    </li>
                    <li class="<?php echo $menu["kependudukan"]["childs"]["histori"];?>">
                        <a href="javascript:void(0);">Histori</a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo $menu["pekerjaan"]["current"];?>">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">work</i>
                    <span>Pekerjaan</span>
                </a>
                <ul class="ml-menu">
                    <li class="<?php echo $menu["pekerjaan"]["childs"]["daftar_pekerjaan"];?>">
                        <a href="#">Daftar Pekerjaan</a>
                    </li>
                    <li class="<?php echo $menu["pekerjaan"]["childs"]["input_pekerjaan"];?>">
                        <a href="#">Input Pekerjaan</a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo $menu["pendidikan"]["current"];?>">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">school</i>
                    <span>Pendidikan</span>
                </a>
                <ul class="ml-menu">
                    <li class="<?php echo $menu["pendidikan"]["childs"]["daftar_pendidikan"];?>">
                        <a href="#">Daftar Pendidikan</a>
                    </li>
                    <li class="<?php echo $menu["pendidikan"]["childs"]["input_pendidikan"];?>">
                        <a href="#">Input Pendidikan</a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo $menu["wilayah"]["current"];?>">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">map</i>
                    <span>Wilayah</span>
                </a>
                <ul class="ml-menu">
                    <li class="<?php echo $menu["wilayah"]["childs"]["profil_wilayah"];?>">
                        <a href="<?php echo base_url("/panel/profil_wilayah/"); ?>">Profil Wilayah</a>
                    </li>
                    <li class="<?php echo $menu["wilayah"]["childs"]["permasalahan_wilayah"];?>">
                        <a href="javascript:void(0);">Permasalahan Wilayah</a>
                    </li>
                </ul>
            </li>
            <?php endif;?>

            <?php if($this->session->userdata("level") == "System Administrator"): ?>
            <li class="<?php echo $menu["pengguna"]["current"];?>">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">account_circle</i>
                    <span>Pengguna</span>
                </a>
                <ul class="ml-menu">
                    <li class="<?php echo $menu["pengguna"]["childs"]["daftar_pengguna"];?>">
                        <a href="<?php echo base_url("/panel/daftar_pengguna/"); ?>">Daftar Pengguna</a>
                    </li>
                    <li class="<?php echo $menu["pengguna"]["childs"]["input_pengguna"];?>">
                        <a href="<?php echo base_url("/panel/input_pengguna/"); ?>">Input Pengguna</a>
                    </li>
                </ul>
            </li>
            <?php endif;?>

            <li class="header">LABELS</li>
            <li>
                <a href="javascript:void(0);">
                    <i class="material-icons col-red">donut_large</i>
                    <span>Important</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="material-icons col-amber">donut_large</i>
                    <span>Warning</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="material-icons col-light-blue">donut_large</i>
                    <span>Information</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.4
        </div>
    </div>
    <!-- #Footer -->
</aside>