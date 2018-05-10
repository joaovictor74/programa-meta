<?php

$host="localhost";
$usuario ="root";
$senha ="";
$bd="presidio";

if(!$con = mysqli_connect($host,$usuario,$senha,$bd)){
    echo"Problema na conexao";
};

