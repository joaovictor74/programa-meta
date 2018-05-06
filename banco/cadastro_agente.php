<?php

require_once "conexao.php";

$matricula = $_POST["matricula"];
$nome = $_POST["nome"];
$funcao = $_POST["funcao"];
$local = $_POST["local"];
$mysql = "INSERT INTO `reeducando`(`nome`, `vulgo`, `nome_pai`, `nome_mae`, `cela`) VALUES ('$nome','$vulgo','$nomeMae','$nomePai','$cela')";

if($resp = mysqli_query($con,$mysql)){
    header("Location:../paginas/agente_form.php");
    die();
}else{
    echo "Problema na insercao";
}