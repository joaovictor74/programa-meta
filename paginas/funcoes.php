<?php

//Sequencia do banco `agente`(id,`matricula`, `nome`, `funcao`, `local`)
function listaTabelaAgente($con){
    $selecao = "SELECT * FROM `agente`";
    $resultado = mysqli_query($con,$selecao);
    if (!$resultado) {
        echo 'Não é possivel rodar o Comando: ' . mysqli_error($con);
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
function listaTabelaDetento($con)
{
    $selecao = "SELECT * FROM `reeducando`";
    $resultado = mysqli_query($con, $selecao);
    if (!$resultado) {
        echo 'Não é possivel rodar o Comando: ' . mysqli_error($con);
    }
    while ($var = mysqli_fetch_row($resultado)) {
        $nome = $var[1];
        $vulgo = $var[2];
        $nome_pai = $var[3];
        $nome_mae = $var[4];
        $cela = $var[5];
        echo "<tr>" . "<td>" . $nome . "</td>" . "<td>" . $vulgo . "</td>" . "<td>" . $nome_mae . "</td>" . "<td>" . $nome_pai . "</td>" . "<td>" . $cela . "</td>" . "</tr>";
    }
}
//Sequencia do banco`Funcao`(id,`funcao`)
function listaTabelaFuncoes($con)
{
    $selecao = "SELECT * FROM `funcao`";
    $resultado = mysqli_query($con, $selecao);
    if (!$resultado) {
        echo 'Não é possivel rodar o Comando: ' . mysqli_error($con);
        exit;
    }
    while ($var = mysqli_fetch_row($resultado)) {
        $id    = $var[0];
        $funcao = $var[1];
        echo "<tr>";
        echo "<td>".$funcao."</td>";
        echo "<td>"."<a href='altera_funcao.php?id=$id' class='btn btn-primary' style='margin-right:3px'>"."Alterar"."</a>";
        echo        "<a href='remove_linha.php?id=$id&&linha=funcao' class='btn btn-danger'>"."Deletar"."</a>"."</td>";
        echo "</tr>";
    }
}
//Sequencia do banco`local`(id,`local`)
function listaTabelaLocais($con){
    $selecao = "SELECT * FROM `local`";
    $resultado = mysqli_query($con,$selecao);
    if (!$resultado) {
        echo 'Não é possivel rodar o Comando: ' . mysqli_error($con);

    }
    while($var = mysqli_fetch_row($resultado)) {
        $id     = $var[0];
        $local = $var[1];
        echo "<tr>";
        echo "<td>".$local."</td>";
        echo "<td>"."<a href='altera_local.php?id=$id' class='btn btn-primary' style='margin-right:3px'>"."Alterar"."</a>";
        echo        "<a href='remove_linha.php?id=$id&&linha=local' class='btn btn-danger'>"."Deletar"."</a>"."</td>";
        echo "</tr>";
    }
}
//Funcao de listagem do select dos forms de funcoes e locais
function listaSelect($con,$tabela){
    $selecao = "SELECT * FROM `$tabela`";
    $resultado = mysqli_query($con,$selecao);
    if (!$resultado) {
        echo 'Não é possivel rodar o Comando: ' . mysqli_error($con);

    }
    while($var = mysqli_fetch_row($resultado)) {
        $selecao    = $var[1];

        echo "<option value=$selecao>$selecao</option>";
    }
}

//funcao deletar
function deletar($con,$tabela,$linha,$id){
    $resp = mysqli_query($con,"DELETE FROM `$tabela` WHERE `$linha`.`id` = $id");
    return $resp;
}
//funcao buscar
function buscarLinha($con,$tabela,$id){
    $query = "SELECT * FROM `$tabela` WHERE id = $id";
    $resp  = mysqli_query($con,$query);
    return mysqli_fetch_assoc($resp);
}
