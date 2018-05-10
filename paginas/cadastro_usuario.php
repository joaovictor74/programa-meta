<?php
    require_once "../banco/conexao.php";
    $login = $_POST['usuario'];
    $senha = MD5($_POST['senha']);
    $query = "SELECT login FROM usuarios WHERE login = '$login'";
    $select = mysqli_query($con,$query);
    $array = mysqli_fetch_array($select);
    $logarray = $array['login'];

    if($login == "" || $login == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.php';</script>";

    }else{
        if($logarray == $login){

            echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.php';</script>";
            die();

        }else{
            $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
            $insert = mysqli_query($con,$query);

            if($insert){
                echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../index.php'</script>";
            }else{
                echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.php'</script>";
            }
        }
    }
?>