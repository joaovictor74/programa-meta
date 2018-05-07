<?php   require_once "cabecalho.php";
require_once "../banco/conexao.php";
require_once "funcoes.php"?>
    <!-- Legenda Tabela Reeducando-->
    <div class="row">
        <div class="offset-md-3 col-md-6 ">
            <div class="page-header">
                <h3 class="text-center" style="margin-bottom:30px">Tabela de Reeducandos</h3>
            </div>
        </div>
    </div>
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