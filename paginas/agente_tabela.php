<?php   require_once "cabecalho.php";
        require_once "../banco/conexao.php";
        require_once "funcoes.php"?>

<table id="myTable" class="display table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Matricula</th>
        <th>Nome</th>
        <th>Função</th>
        <th>Local</th>
    </tr>
    </thead>
    <tbody>
        <?php
            listaTabelaAgente($con);
            mysqli_close($con);?>
    </tbody>
</table>

<?php require_once "rodape.php"?>
