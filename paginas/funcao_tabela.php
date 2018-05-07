<?php   require_once "cabecalho.php";
require_once "../banco/conexao.php";
require_once "funcoes.php"?>

<table id="myTable" class="display table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Funções</th>
    </tr>
    </thead>
    <tbody>
    <?php
    listaTabelaFuncoes($con);
    mysqli_close($con);?>
    </tbody>
</table>

<?php require_once "rodape.php"?>
