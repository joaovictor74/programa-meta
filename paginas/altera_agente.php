<?php
require_once "cabecalho.php";
require_once "funcoes.php";

$id = $_GET["id"];
$tab = "agente";
$funcao = buscarLinhaAgente($con,$tab,$id);
?>
<form class="form-horizontal"  action="../banco/altera_agente.php" method="post">
    <fieldset>
        <!-- Legenda Cadastro-->
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="page-header">
                    <h3 class="text-center" style="white-space:nowrap; margin-bottom:30px">Alterar Agente</h3>
                </div>
            </div>
        </div>
        <!-- Form Matricula do Agente-->
        <div class="form-group form-inline">
            <label class="offset-md-4 col-md-2" for="matricula_id">Matrícula:</label>
            <div class="col-md-2">
                <input readonly="readonly" value="<?=$funcao["matricula"]?>" id="matricula_id" name="matricula" type="text" class="form-control" required=""  placeholder="Matrícula do Agente" maxlength="14" style="width: 300px;">
            </div>
        </div>
        <!-- Form Nome do Agente -->
        <div class="form-group form-inline">
            <label class="offset-md-4  col-md-2" for="nome_id">Nome:</label>
            <div class="col-md-2">
                <input value="<?=$funcao["nome"]?>" id="nome_id" name="nome" type="text" class="form-control"  required="" placeholder="Nome do Agente" maxlength="60" style="width: 300px;">
            </div>
        </div>
        <!-- Form Funcão do Agente -->
        <div class="form-group form-inline">
            <label class="offset-md-4  col-md-2" for="funcao_id">Função:</label>
            <div class="col-md-2">
                <select   name="selecao_funcao" id="funcao_id" required="" style="width: 200px;" class="form-control">
                    <option value="<?=$funcao["funcao"]?>" selected="selected"><?=$funcao["funcao"]?></option>
                    <?php listaSelect($con,funcao); ?>
                </select>
            </div>
        </div>
        <!-- Form Local-->
        <div class="form-group form-inline">
            <label class="offset-md-4  col-md-2" for="local_id">Local:</label>
            <div class="col-md-2">
                <select name="selecao_local" id="local_id" required="" style="width: 200px;" class="form-control">
                    <option value="<?=$funcao["local"]?>" selected="selected"><?=$funcao["local"]?></option>
                    <?php listaSelect($con,local); ?>
                </select>
            </div>
        </div>
        <!-- Form Botão de Alterar-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="altera_id"></label>
            <div class="offset-md-2 col-md-8">
                <input type="submit" id="altera_id" class="btn btn-primary" value="Alterar">
            </div>
        </div>
    </fieldset>
</form>
<?= require_once "rodape.php"?>