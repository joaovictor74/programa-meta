<?php

require_once "conexao.php";

$funcao = $_POST["funcao"];

$mysql = "INSERT INTO `funcao`(`funcao`) VALUES ('$funcao')";

if($resp = mysqli_query($con,$mysql)){
    header("Location:../paginas/funcao_tabela.php");
    die();
}else{
    echo "Problema na insercao";
}