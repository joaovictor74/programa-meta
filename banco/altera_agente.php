<?php

require_once "conexao.php";

$matricula = $_POST["matricula"];
$nome = $_POST["nome"];
$funcao = $_POST["selecao_funcao"];
$local = $_POST["selecao_local"];
$mysql = "UPDATE `agente` SET `nome` = '$nome', `funcao` = '$funcao', `local` = '$local' WHERE `matricula` = $matricula;";

if($resp = mysqli_query($con,$mysql)){
    header("Location:../paginas/tabela_agente.php");
    die();
}else{
    echo "Problema na insercao";
}
