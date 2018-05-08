<?php

require_once "conexao.php";

$nome = $_POST["nome"];
$vulgo = $_POST["vulgo"];
$nomeMae = $_POST["nome_mae"];
$nomePai = $_POST["nome_pai"];
$cela = $_POST["cela"];
$mysql = "INSERT INTO `reeducando`(`nome`, `vulgo`, `nome_pai`, `nome_mae`, `cela`) VALUES ('$nome','$vulgo','$nomeMae','$nomePai','$cela')";

if($resp = mysqli_query($con,$mysql)){
    header("Location:../paginas/formulario_reeducandos.php");
    die();
}else{
    echo "Problema na insercao";
}