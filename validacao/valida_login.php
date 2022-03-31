<?php

    if(isset ($_POST['email']) || isset($_POST['password'])){

        if(strlen($_POST['email']) == 0){
            echo "prencha seu email";
        } else if(strlen($_POST['password']) == 0) {
            echo "prencha sua senha";
        }else{

            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['password']);

            $slqcod= "SELECT * FROM tb_usuario
                            WHERE  nm_usuario = $email AND cd_senha = $senha";
            
            $sql_query = $mysqli->query($sql_query) or die("Falha na execução so codigo sql" . $mysqli->error);

            $quatidade =$sql_query->num_rows;

            if($quantidade == 1 ){

                $usuario = $sql_query->fetch_assoc();

                if(isset($_SESSION)){
                    session_start();
                }

                $_SESSION['user'] = $usuario['id'];

                header('location: ../pagina_principal/home.php');


                
                
            }else{
                echo "falha ao logar";
            }

        }



    }



?>