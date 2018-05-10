<?php

$host="localhost";
$usuario ="root";
$senha ="5555";
$bd="presidio";

if(!$con = mysqli_connect($host,$usuario,$senha,$bd)){
    echo"Problema na conexao";
};

