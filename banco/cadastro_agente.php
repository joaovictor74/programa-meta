<?php

require_once "conexao.php";

$matricula = $_POST["matricula"];
$nome = $_POST["nome"];
$funcao = $_POST["selecao_funcao"];
$local = $_POST["selecao_local"];
$mysql = "INSERT INTO `agente`(`matricula`, `nome`, `funcao`, `local`) VALUES ('$matricula','$nome','$funcao','$local')";

if($resp = mysqli_query($con,$mysql)){
    header("Location:../paginas/formulario_agente.php");
    die();
}else{
    echo "Problema na insercao";
}