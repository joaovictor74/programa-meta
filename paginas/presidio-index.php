<?php require_once "cabecalho.php";
if(isset($_COOKIE["login"])){
$user = $_COOKIE["login"];?>

    <h1>Bem vindo</h1>
    <h5 class="text-success">'<?=$user?>' logado com sucesso !</h5>

<?php require_once "rodape.php"; }else{
    echo "<h1>Você não tem acesso a este Recurso<h1>";
}?>
