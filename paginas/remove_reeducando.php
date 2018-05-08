<?php require_once "../banco/conexao.php";
      require_once "funcoes.php";

$id = $_GET["id"];


if(deletar($con,"reeducando",$id)){
    header("Location:tabela_reeducando.php");
    die();
}else {
    echo 'Não é possivel rodar o Comando: ' . mysqli_error($con);
}
?>




