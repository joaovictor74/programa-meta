<?php
    require_once "cabecalho.php";
    require_once "navegacao.php";
?>

    <form class="form-horizontal" action="../banco/cadastro_detento.php" method="post">
        <fieldset>
            <div class="row">
                <div class="offset-md-3 col-md-7 ">
                    <div class="page-header">
                        <div class="page-header ">
                            <h3 class="text-center">Cadastro do Reeducando</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Form Nome do Detento -->
            <div class="form-group form-inline">
                <label class="offset-md-4 col-md-2" for="nome_id">Nome:</label>
                <div class="col-md-2">
                    <input id="nome_id" name="nome" type="text" class="form-control"  required="" placeholder="Nome" maxlength="60">
                </div>
            </div>
            <!--  Form Vulgo (Apelido) do detento-->
            <div class="form-group form-inline">
                <label class="offset-md-4 col-md-2" for="vulgo_id">Vulgo:</label>
                <div class="col-md-2">
                    <input id="vulgo_id" name="vulgo" type="text" class="form-control"  required="" placeholder="Vulgo" maxlength="60">
                </div>
            </div>
            <!--  Form Nome da Mae Detento -->
            <div class="form-group form-inline">
                <label class="offset-md-4 col-md-2" style="white-space: nowrap" for="nomeMae_id">Nome do Mãe:</label>
                <div class="col-md-2">
                    <input id="nomeMae_id" name="nome_mae" type="text" class="form-control"  required="" placeholder="Nome da Mãe" maxlength="60">
                </div>
            </div>
            <!--  Form Nome do Pai Detento -->
            <div class="form-group form-inline">
                <label class="offset-md-4 col-md-2" for="nomePai_id">Nome do Pai:</label>
                <div class="col-md-2">
                    <input id="nomePai_id" name="nome_pai" type="text" class="form-control"  required="" placeholder="Nome do Pai" maxlength="60">
                </div>
            </div>
            <!--  Form Nome da Cela -->
            <div class="form-group form-inline">
                <label class="offset-md-4 col-md-2" for="cela_id">Cela:</label>
                <div class="col-md-2">
                    <input id="cela_id" name="cela" type="text" class="form-control"  required="" placeholder="Cela" maxlength="255">
                </div>
            </div>
            <!--  Form Botão de Inserir-->
            <div class="form-group">
                <label class="control-label" for="inserir_id"></label>
                <div class="offset-md-3 col-md-7">
                    <input type="submit" id="inserir_id" name="inserir" class="btn btn-primary" value="Inserir">
                </div>
            </div>
        </fieldset>
    </form>

<?php require_once "rodape.php";?>



