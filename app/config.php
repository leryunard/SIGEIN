<?php
    define('SERVIDOR','localhost');
    define('USUARIO','root');
    define('PASSWORD','');
    define('BD','sistemadeventas');

    $servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

    try{
        $pdo = new PDO($servidor, username: USUARIO, password: PASSWORD);
        $pdo -> exec("set names utf8");
        //echo "La conexión a la base de datos fue éxitosa";
    }catch (PDOException $e){
        //print_r($e);
        echo "Error al conectar a la base de datos";
    }


    $URL = "http://localhost/sigein";

    date_default_timezone_set("America/El_Salvador");
    $fechaHora = date('Y-m-d H:i:s');

?>