<?php
require_once "cabecalho.php";
require_once "funcoes.php";

$id = $_GET["id"];
$tab = "reeducando";
$funcao = buscarLinha($con,$tab,$id);
?>
<form class="form-horizontal"  action="../banco/altera_reeducando.php" method="post">
    <fieldset>
        <!-- Legenda Cadastro-->
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="page-header">
                    <h3 class="text-center" style="white-space:nowrap; margin-bottom:30px">Alterar Reeducando</h3>
                </div>
            </div>
        </div>
        <!--  Form Nome do Detento -->
        <div class="form-group form-inline">
            <label class="offset-md-3 col-md-2" for="nome_id">Nome:</label>
            <div class="col-md-2">
                <input value="<?=$funcao["nome"]?>" id="nome_id" name="nome" type="text" class="form-control"  required="" placeholder="Nome do Reeducando" maxlength="60" style="width: 300px;">
            </div>
        </div>
        <!--  Form Vulgo (Apelido) do detento-->
        <div class="form-group form-inline">
            <label class="offset-md-3 col-md-2" for="vulgo_id">Vulgo:</label>
            <div class="col-md-2">
                <input value="<?=$funcao["vulgo"]?>" id="vulgo_id" name="vulgo" type="text" class="form-control"  required="" placeholder="Vulgo do Reeducando" maxlength="60" style="width: 300px;">
            </div>
        </div>
        <!--  Form Nome da Mae Detento -->
        <div class="form-group form-inline">
            <label class="offset-md-3 col-md-2" style="white-space: nowrap" for="nomeMae_id">Nome do Mãe:</label>
            <div class="col-md-2">
                <input value="<?=$funcao["nome_mae"]?>" id="nomeMae_id" name="nome_mae" type="text" class="form-control"  required="" placeholder="Nome da Mãe do Reeducando" maxlength="60" style="width: 300px;">
            </div>
        </div>
        <!--  Form Nome do Pai Detento -->
        <div class="form-group form-inline">
            <label class="offset-md-3 col-md-2" for="nomePai_id">Nome do Pai:</label>
            <div class="col-md-2">
                <input value="<?=$funcao["nome_pai"]?>" id="nomePai_id" name="nome_pai" type="text" class="form-control"  required="" placeholder="Nome do Pai do Reeducando" maxlength="60" style="width: 300px;">
            </div>
        </div>
        <!--  Form Nome da Cela -->
        <div class="form-group form-inline">
            <label class="offset-md-3 col-md-2" for="cela_id">Cela:</label>
            <div class="col-md-2">
                <input value="<?=$funcao["cela"]?>" id="cela_id" name="cela" type="text" class="form-control"  required="" placeholder="Cela do Reeducando" maxlength="255" style="width: 300px;">
            </div>
        </div>
        <input type="hidden" value="<?=$id?>" name="id">
        <!--  Form Botão de Alterar-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="altera_id"></label>
            <div class="offset-md-2 col-md-8">
                <input type="submit" id="altera_id" class="btn btn-primary" value="Alterar">
            </div>
        </div>
    </fieldset>
</form>

<?= require_once "rodape.php"?>



