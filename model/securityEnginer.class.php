<?php

include_once"config/ConexaoDB.php";

class securityEnginer {

    public $hostname;
    public $data;
    public $ip;

    function getIp() {

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {

            $ip = $_SERVER['REMOTE_ADDR'];
            $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        }

        $ip = $ip;

        $sql = "INSERT INTO sistema.auditoria_tb (host, data, hostname) VALUES('" . $ip . "', now(), '" . $hostname . "')";
        $result = pg_query($sql);
        if (!$result) {
            $errormessage = pg_last_error();
            echo "Erro ao cadastrar: " . $errormessage;
            exit();
        } else {
            sleep(2);
            pg_close();
            header('location: view/login.php');
        }
    }

}
