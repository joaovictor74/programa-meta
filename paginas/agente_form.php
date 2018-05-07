<?php
    require_once "cabecalho.php";
    require_once "navegacao.php";
?>

    <form class="form-horizontal" style="margin-left:30%; margin-top: -5%" action="../banco/cadastro_agente.php" method="post">
        <fieldset>
            <!-- Legenda Cadastro-->
            <legend class="col-md-6">Cadastro Agente</legend><br>
            <!-- Form Matricula do Agente-->
            <div class="form-group form-inline">
                <label class="col-md-2" for="matricula_id">Matrícula:</label>
                <div class="col-md-2">
                    <input id="matricula_id" name="matricula" type="text" class="form-control" required=""  placeholder="Matrícula" maxlength="14" >
                </div>
            </div>
            <!-- Form Nome do Agente -->
            <div class="form-group form-inline">
                <label class="col-md-2" for="nome_id">Nome:</label>
                <div class="col-md-2">
                    <input id="nome_id" name="nome" type="text" class="form-control"  required="" placeholder="Nome" maxlength="60">
                </div>
            </div>
            <!-- Form Funcão do Agente -->
            <div class="form-group form-inline">
                <label class="col-md-2" for="funcao_id">Função:</label>
                <div class="col-md-2">
                    <input id="funcao_id" name="funcao" type="text" class="form-control"  required="" placeholder="Função" maxlength="60">
                </div>
            </div>
            <!-- Form Local-->
            <div class="form-group form-inline">
                <label class="col-md-2" for="local_id">Local:</label>
                <div class="col-md-2">
                    <input id="local_id" name="local" type="text" class="form-control"  required="" placeholder="Local" maxlength="255">
                </div>
            </div>
            <!-- Form Botão de Inserir-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="inserir_id"></label>
                <div class="col-md-5">
                    <input type="submit" id="inserir_id" name="inserir" class="btn btn-primary" value="Inserir">
                </div>
            </div>
        </fieldset>
    </form>

<?php require_once "rodape.php";?>



