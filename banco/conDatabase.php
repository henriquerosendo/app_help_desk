<?php

$hotsname = "localhost";
$usuario = "root";
$senha = "";
$database = "db_help_desk";

$conn = mysqli_connect($hotsname, $usuario,  $senha, $database);

if ($conn->connect_errno) {
    echo "Falha ao conectar ao banco de dados: (". $mysqli->connect_errno . ") ". $mysqli->connect_error;
}

