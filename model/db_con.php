<?php
date_default_timezone_set("America/Mexico_City");
class conexion{
    public function get_connection(){
        $connection = mysqli_connect("0.tcp.ngrok.io","root","","mlogic","17831");
        $connection -> set_charset("utf8");
        return $connection;
    }
}
