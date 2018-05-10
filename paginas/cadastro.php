<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href = "../css/bootstrap.css" rel="stylesheet">
    <link href = "../css/front_presidio.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="offset-md-3 col-md-6 ">
            <div class="page-header">
                <h3 class="text-center" style="margin-bottom:30px; margin-top: 15%">Cadastro Presidio</h3>
            </div>
        </div>
    </div>

    <form action="cadastro_usuario.php" method="post" class="form-horizontal">
        <fieldset>
            <div class="row">
                <div class="span12" style="text-align:center; margin: 0 auto;">
                    <label class="" for="usuario_id">Usuario:</label>
                    <div class="">
                        <input id="usuario_id" name="usuario" type="text" class="form-control" required=""  placeholder="Insira o usuario" maxlength="30" style="width: 300px;">
                    </div>
                    <label class="" for="senha_id"style="margin-top: 10px">Senha:</label>
                    <div class="">
                        <input id="senhao_id" name="senha" type="password" class="form-control" required=""  placeholder="Insira a senha" maxlength="40" style="width: 300px;">
                    </div>
                </div>
            </div>
            <div class="span12" style="text-align:center; margin: 0 auto;">
                <div class="btn-group" style="margin-bottom: 10px; margin-top: 10px">
                    <input style="margin-right: 7px" class="btn btn-lg btn-success" name="cadastrar" type="submit" value="Cadastrar">
                </div>
            </div>
        </fieldset>
    </form>

    <?php require_once "rodape.php"?>
