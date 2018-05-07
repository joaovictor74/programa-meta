<?php
//Sequencia do banco `agente`(id,`matricula`, `nome`, `funcao`, `local`)
function listaTabelaAgente($con){
    $selecao = "SELECT * FROM `agente`";
    $resultado = mysqli_query($con,$selecao);
    if (!$resultado) {
        echo 'Não é possivel rodar o Comando: ' . mysqli_error($con);
        exit;
    }
    while($var = mysqli_fetch_row($resultado)) {
        $matricula = $var[1];
        $nome      = $var[2];
        $funcao    = $var[3];
        $local     = $var[4];
        echo "<tr>"."<td>".$matricula."</td>"."<td>".$nome."</td>"."<td>".$funcao."</td>"."<td>".$local."</td>"."</tr>";
    }
}
//Sequencia do banco`reeducando`(id,`nome`, `vulgo`, `nome_pai`, `nome_mae`, `cela`)
function listaTabelaDetento($con){
    $selecao = "SELECT * FROM `reeducando`";
    $resultado = mysqli_query($con,$selecao);
    if (!$resultado) {
        echo 'Não é possivel rodar o Comando: ' . mysqli_error($con);
        exit;
    }
    while($var = mysqli_fetch_row($resultado)) {
        $nome      = $var[1];
        $vulgo     = $var[2];
        $nome_pai  = $var[3];
        $nome_mae  = $var[4];
        $cela      = $var[5];
        echo "<tr>"."<td>".$nome."</td>"."<td>".$vulgo."</td>"."<td>".$nome_pai."</td>"."<td>".$nome_mae."</td>"."</tr>";
    }
}