<?php
    require_once "cabecalho.php";
    require_once "navegacao.php";
?>

    <form class="form-horizontal"  action="../banco/cadastro_agente.php" method="post">
        <fieldset>
            <!-- Legenda Cadastro-->
            <div class="row">
                <div class="offset-md-3 col-md-7 ">
                    <div class="page-header">
                        <h3 class="text-center" style="margin-bottom:30px">Cadastro de Agente</h3>
                    </div>
                </div>
            </div>
            <!-- Form Matricula do Agente-->
            <div class="form-group form-inline">
                <label class="offset-md-4 col-md-2" for="matricula_id">Matrícula:</label>
                <div class="col-md-2">
                    <input id="matricula_id" name="matricula" type="text" class="form-control" required=""  placeholder="Matrícula do Agente" maxlength="14" style="width: 300px;">
                </div>
            </div>
            <!-- Form Nome do Agente -->
            <div class="form-group form-inline">
                <label class="offset-md-4  col-md-2" for="nome_id">Nome:</label>
                <div class="col-md-2">
                    <input id="nome_id" name="nome" type="text" class="form-control"  required="" placeholder="Nome do Agente" maxlength="60" style="width: 300px;">
                </div>
            </div>
            <!-- Form Funcão do Agente -->
            <div class="form-group form-inline">
                <label class="offset-md-4  col-md-2" for="funcao_id">Função:</label>
                <div class="col-md-2">
                    <input id="funcao_id" name="funcao" type="text" class="form-control"  required="" placeholder="Função do Agente" maxlength="60" style="width: 300px;">
                </div>
            </div>
            <!-- Form Local-->
            <div class="form-group form-inline">
                <label class="offset-md-4  col-md-2" for="local_id">Local:</label>
                <div class="col-md-2">
                    <input id="local_id" name="local" type="text" class="form-control"  required="" placeholder="Local do Agente" maxlength="255" style="width: 300px;">
                </div>
            </div>
            <!-- Form Botão de Inserir-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="inserir_id"></label>
                <div class="offset-md-3 col-md-7">
                    <input type="submit" id="inserir_id" name="inserir" class="btn btn-primary" value="Inserir">
                </div>
            </div>
        </fieldset>
    </form>

<?php require_once "rodape.php";?>



