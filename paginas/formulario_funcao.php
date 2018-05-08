<form class="form-horizontal"  action="../banco/cadastro_funcoes.php" method="post">
    <fieldset>
        <!-- Legenda Cadastro-->
        <div class="row">
            <div class="offset-md-4 col-md-8 ">
                <div class="page-header">
                    <h3 class="text-center" style="margin-bottom:30px; white-space:nowrap;">Cadastro de Funções</h3>
                </div>
            </div>
        </div>
        <!-- Form Matricula do Agente-->
        <div class="form-group form-inline">
            <label class="offset-md-4 col-md-2" for="funcao_id">Função:</label>
            <div class="col-md-2">
                <input id="funcao_id" name="funcao" type="text" class="form-control" required=""  placeholder="Nome da Função do Agente" maxlength="60" style="width: 300px;">
            </div>
        </div>
        <!-- Form Botão de Inserir-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="inserir_id"></label>
            <div class="offset-md-4 col-md-8">
                <input type="submit" id="inserir_id" name="inserir" class="btn btn-primary" value="Inserir">
            </div>
        </div>
    </fieldset>
</form>
