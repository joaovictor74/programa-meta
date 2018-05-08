<?php
require_once "conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$vulgo = $_POST["vulgo"];
$nomeMae = $_POST["nome_mae"];
$nomePai = $_POST["nome_pai"];
$cela = $_POST["cela"];

$mysql = "UPDATE `reeducando` SET `nome` = '$nome', `vulgo` = '$vulgo', `nome_mae` = '$nomeMae', `nome_pai` = '$nomePai', `cela` = '$cela' WHERE `id` = $id;";

if($resp = mysqli_query($con,$mysql)){
    header("Location:../paginas/tabela_reeducando.php");
    die();
}else{
    echo "Problema na insercao".mysqli_error($con);
}
