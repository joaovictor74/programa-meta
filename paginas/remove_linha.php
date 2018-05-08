<?php require_once "../banco/conexao.php";
      require_once "funcoes.php";

$id = $_GET["id"];
$linha = $_GET["linha"];

if(deletar($con,$linha,$linha,$id)){
    header("Location:tabela_$linha.php");
    die();
}else {
    echo 'Não é possivel rodar o Comando: ' . mysqli_error($con);
}
?>




