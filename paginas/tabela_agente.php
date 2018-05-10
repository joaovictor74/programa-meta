<?php   require_once "cabecalho.php";
        require_once "funcoes.php"?>
<!-- Legenda Tabela Agente-->
<div class="row">
    <div class="offset-md-3 col-md-6 ">
        <div class="page-header">
            <h3 class="text-center" style="margin-bottom:30px">Tabela de Agentes</h3>
        </div>
    </div>
</div>
<table id="myTable" class="display table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Matricula</th>
        <th>Nome</th>
        <th>Função</th>
        <th>Local</th>
        <th>Opções</th>
    </tr>
    </thead>
    <tbody>
        <?php
            listaTabelaAgente($con);
            mysqli_close($con);?>
    </tbody>
</table>

<?php require_once "rodape.php"?>
