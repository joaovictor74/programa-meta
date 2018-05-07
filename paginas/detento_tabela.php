<?php   require_once "cabecalho.php";
require_once "../banco/conexao.php";
require_once "funcoes.php"?>

    <table id="myTable" class="display table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Vulgo</th>
            <th>Nome da Mãe</th>
            <th>Nome do Pai</th>
            <th>Cela</th>
        </tr>
        </thead>
        <tbody>
        <?php
        listaTabelaDetento($con);
        mysqli_close($con);?>
        </tbody>
    </table>

<?php require_once "rodape.php"?>