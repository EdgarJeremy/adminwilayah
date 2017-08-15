<?php
//session_start();
if(!function_exists("set_flash_notif")) {
    function set_flash_notif($index,$data) {
        $_SESSION["notif"] = [];
        $_SESSION["notif"][$index] = $data;
    }
}

if(!function_exists("get_flash_notif")) {
    function get_flash_notif($index = null)
    {
        if($index != null) {
            if (isset($_SESSION["notif"][$index])) {
                $data = $_SESSION["notif"][$index];
                unset($_SESSION["notif"][$index]);
                return $data;
            } else {
                return false;
            }
        } else {
            $data = $_SESSION["notif"];
            foreach($_SESSION["notif"] as $key=>$notif) {
                unset($_SESSION["notif"][$key]);
            }
            return $data;
        }
    }
}

if(!function_exists("berisi")) {
    function berisi($data) {
        return (
            isset($data) &&
            !is_null($data) &&
            !empty($data) &&
            $data != "" &&
            $data != NULL
        );
    }
}

if(!function_exists("permit")) {
    function permit($levels,$b = true) {
        $ci = &get_instance();
        $session_level = $ci->session->userdata("level");
        $modul_name = ucwords(str_replace("_"," ",$ci->router->method));
        if(in_array($session_level,$levels) != $b) {
            set_flash_notif("akses_error","Modul ".$modul_name." tidak bisa diakses dengan level login anda");
            redirect(base_url("/panel/"));
            exit();
        }
    }
}

if(!function_exists("sendJSON")) {
    function sendJSON($data) {
        header("Content-Type: application/json;charset=utf-8");
        echo json_encode($data);
        exit();
    }
}