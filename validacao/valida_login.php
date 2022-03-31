<?php
require '../banco/conDatabase.php';


if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $senha = $_POST['password'];

    $sql = "SELECT * FROM tb_usuario WHERE nm_usuario = '$email' AND cd_senha = '$senha'";
    $response = $conn->query($sql);
    $array = $response->fetch_array();


    $quantidade = $response->num_rows;

    if ($quantidade == 1 ) {
        $usuario = $response->fetch_assoc();

        if(isset($_SESSION)){
            session_start();
        }

        $_SESSION['user'] = $usuario['id'];

        header('location: ../pagina_principal/home.php');     
    } else {
        echo "falha ao logar";
    }
}