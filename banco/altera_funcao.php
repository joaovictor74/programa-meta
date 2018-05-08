<?php

require_once "conexao.php";
$id = $_POST["id"];
$alteracao = $_POST["funcao"];

$mysql = "UPDATE `funcao` SET `funcao` = '$alteracao' WHERE `$linha`.`id` = $id;";

if($resp = mysqli_query($con,$mysql)){
    header("Location:../paginas/tabela_funcao.php");
    die();
}else{
    echo "Problema na insercao";
}
