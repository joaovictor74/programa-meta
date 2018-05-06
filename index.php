<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <script src="../js/jquery.js"></script>
            <link href = "css/bootstrap.css" rel="stylesheet">
            <link href = "css/front_presidio.css" rel="stylesheet">
            <title>Login</title>
        </head>
        <body>
            <div class ="container">
                <div class="principal">

                <h1>Logo da loja</h1><br/>

                <form action="paginas/presidio-index.php" method="post" class="form-control form-horizontal">

                        <div class="form-group">
                            <br/>
                            <label>Usuario: </label>
                            <input type="text" name="usuario"><br/>
                        </div>

                        <div class="form-group">
                            <label>Senha: </label>
                            <input style="margin-left: 10px " type="password" name="senha"><br/>
                        </div>
                    <input style="margin-bottom: 10px"class="btn btn-lg btn-primary" type="submit" value="Entrar">

                </form>

<?php require_once "paginas/rodape.php"?>
