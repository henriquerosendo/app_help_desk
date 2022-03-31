<?php

$hotsname = "localhost";
$usuario = "root";
$senha = "";
$database = "db_help_desk";


function get_my_db()
{
    static $con;

    if(!$con){
        $con = new mysqli($hotsname, $usuario,  $senha, $database);

    }

    return $con;
}

if ($con->connect_errno) {
    echo "Falha ao conectar ao banco de dados: (". $mysqli->connect_errno . ") ". $mysqli->connect_error;

}
echo "Olá mundo";

