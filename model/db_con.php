<?php
date_default_timezone_set("America/Mexico_City");
class conexion{
    public function get_connection(){
        $connection = mysqli_connect("db","mariadb","","mariadb","mariadb");
        $connection -> set_charset("utf8");
        return $connection;
    }
}
