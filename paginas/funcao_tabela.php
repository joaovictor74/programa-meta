<?php   require_once "cabecalho.php";
require_once "../banco/conexao.php";
require_once "funcoes.php";?>

    <div class="offset-sm-0 col-md-4" style="float: left;">
    <?php require_once "funcao_form.php"?>
    </div>
        <div class="offset-sm-3 col-md-5" style="float: left;">
        <!-- Legenda Tabela Funcao-->
        <div class="row">
            <div class="offset-md-3 col-md-6 ">
                <div class="page-header">
                    <h3 class="text-center" style="margin-bottom:30px; white-space:nowrap;">Tabela de Funções</h3>
                </div>
            </div>
        </div>
        <table id="myTable" class="display table table-striped table-bordered" style="width:50%">
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
    </div>

<?php require_once "rodape.php"?>
