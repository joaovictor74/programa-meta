<?php

require_once "conexao.php";

$local = $_POST["local"];

$mysql = "INSERT INTO `local`(`local`) VALUES ('$local')";

if($resp = mysqli_query($con,$mysql)){
    header("Location:../paginas/local_tabela.php");
    die();
}else{
    echo "Problema na insercao";
}