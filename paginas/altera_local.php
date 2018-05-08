<?php
require_once "cabecalho.php";
require_once "funcoes.php";

$id = $_GET["id"];
$tab = "local";
$local = buscarLinha($con,$tab,$id);
?>
<form class="form-horizontal"  action="../banco/altera_local.php" method="post">
    <fieldset>
        <!-- Legenda Cadastro-->
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="page-header">
                    <h3 class="text-center" style="white-space:nowrap; margin-bottom:30px">Alterar Local</h3>
                </div>
            </div>
        </div>
        <!-- Form Matricula do Local-->
        <div class="form-group form-inline" >
            <label class="offset-md-3 col-md-2" for="local_id" >Local:</label>
            <div class="col-md-2">
                <input value="<?=$local["local"]?>" id="local_id" name="local" type="text" class="form-control" required=""  placeholder="Nome do local" maxlength="100" style="width: 300px;">
            </div>
        </div>
        <input type="hidden" value="<?=$id?>" name="id">
        <!-- Form Botão de Inserir-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="altera_id"></label>
            <div class="offset-md-2 col-md-8">
                <input type="submit" id="altera_id" class="btn btn-primary" value="Alterar">
            </div>
        </div>
    </fieldset>
</form>





