<form class="form-horizontal"  action="../banco/cadastro_locais.php" method="post">
    <fieldset>
        <!-- Legenda Cadastro-->
        <div class="row">
            <div class="offset-md-4 col-md-8">
                <div class="page-header">
                    <h3 class="text-center" style="white-space:nowrap; margin-bottom:30px">Cadastro de Locais</h3>
                </div>
            </div>
        </div>
        <!-- Form Matricula do Local-->
        <div class="form-group form-inline" >
            <label class="offset-md-4 col-md-2" for="local_id" >Local:</label>
            <div class="col-md-2">
                <input id="local_id" name="local" type="text" class="form-control" required=""  placeholder="Nome do local" maxlength="100" style="width: 300px;">
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
