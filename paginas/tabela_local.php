<?php   require_once "cabecalho.php";
require_once "funcoes.php"?>
<div class="offset-sm-0 col-md-4" style="float: left;">
    <?php require_once "formulario_local.php" ?>
</div>
<div class="offset-sm-3 col-md-5" style="float: left;">
    <!-- Legenda Tabela Local-->
    <div class="row">
        <div class="offset-md-3 col-md-6 ">
            <div class="page-header">
                <h3 class="text-center" style="margin-bottom:30px; white-space:nowrap;">Tabela de Locais</h3>
            </div>
        </div>
    </div>
    <table id="myTable" class="display table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
           <th>Locais</th>
           <th>Opções</th>
        </tr>
        </thead>
        <tbody>
        <?php
        listaTabelaLocais($con);
        mysqli_close($con);?>
        </tbody>
    </table>
</div>

<?php require_once "rodape.php"?>
