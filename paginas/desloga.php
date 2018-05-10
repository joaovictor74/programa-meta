<?php
require_once "funcoes.php";
if(desloga()){
header("Location:../index.php");
die();}
else{
    echo "<h1>Nao foi possivel deslogar</h1>";
}


