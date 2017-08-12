<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Masuk | AdminWILAYAH</title>
    <!-- Favicon-->
<!--    <link rel="icon" href="../../favicon.ico" type="image/x-icon">-->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url("/assets/plugins/bootstrap/css/bootstrap.css");?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url("/assets/plugins/node-waves/waves.css");?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url("/assets/plugins/animate-css/animate.css");?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url("/assets/css/style.css");?>" rel="stylesheet">

    <script>
        window.base_url = function(dir) {
            if(dir === undefined)
                return "<?php echo base_url();?>";
            else
                return "<?php echo base_url();?>" + "/" + dir;
        };
        window.current_page = "<?php echo $this->uri->segment(2); ?>";
    </script>


</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>Wilayah</b></a>
            <small>Aplikasi administrasi data penduduk kota</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST">
                    <div class="msg">Masuk untuk memulai sesi</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Ingat Saya</label>
                        </div>
                        <div class="col-xs-4">
                            <button name="btnSubmit" class="btn btn-block bg-pink waves-effect" type="submit">MASUK</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6 align-right">
                            <a href="#">Lupa Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url("/assets/plugins/jquery/jquery.min.js");?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url("/assets/plugins/bootstrap/js/bootstrap.js");?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url("/assets/plugins/node-waves/waves.js");?>"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url("/assets/plugins/jquery-validation/jquery.validate.js");?>"></script>


    <!-- Bootstrap Notify Plugin Js -->
    <script src="<?php echo base_url("/assets/plugins/bootstrap-notify/bootstrap-notify.js");?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url("/assets/js/admin.js");?>"></script>

    <script>
        $(function () {
            $('#sign_in').validate({
                highlight: function (input) {
                    $(input).parents('.form-line').addClass('error');
                },
                unhighlight: function (input) {
                    $(input).parents('.form-line').removeClass('error');
                },
                errorPlacement: function (error, element) {
                    $(element).parents('.input-group').append(error);
                }
            });
            $.getJSON(base_url("/login/ambil_flash_notif"),function(response){
                console.log(response);
                for(var item in response) {
                    if(response.hasOwnProperty(item)) {
                        showNotification("bg-red",response[item],null,"center");
                    }
                }
            });
        });
    </script>

</body>

</html>