<?php
require_once "../banco/conexao.php";
$login = $_POST['usuario'];
$senha = md5($_POST['senha']);
$entrar = $_POST['entrar'];
$query = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
if (isset($entrar)) {

    $verifica = mysqli_query($con,$query) or die("erro ao selecionar");
    if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../index.php';</script>";
        die();
    }else{
        setcookie("login",$login);
        header("Location:presidio-index.php");
        die();
    }
}
?>