<?php

require_once "conexao.php";
$id = $_POST["id"];
$alteracao = $_POST["local"];

$mysql = "UPDATE `local` SET `local` = '$alteracao' WHERE `$linha`.`id` = $id;";

if($resp = mysqli_query($con,$mysql)){
    header("Location:../paginas/tabela_local.php");
    die();
}else{
    echo "Problema na insercao";
}
