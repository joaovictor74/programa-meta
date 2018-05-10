<?php require_once "../banco/conexao.php";
      require_once "funcoes.php";

$id = $_GET["id"];
$tab = $_GET["tab"];
if($tab == "agente"){
    if (deletarAgente($con, $tab, $id)) {
        header("Location:tabela_$tab.php");
        die();
    } else {
        echo 'Não é possivel rodar o Comando: ' . mysqli_error($con);
    }
}else {
    if (deletar($con, $tab, $id)) {
        header("Location:tabela_$tab.php");
        die();
    } else {
        echo 'Não é possivel rodar o Comando: ' . mysqli_error($con);
    }
}
?>




