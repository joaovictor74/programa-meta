<!DOCTYPE html>
    <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <script src="../js/jquery.js"></script>
            <script src="../js/jquery.dataTables.js"></script>
            <link rel="stylesheet" href="../js/jquery.dataTablesEstilo.css">
            <link href = "../css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
            <link href = "../css/front_presidio.css" rel="stylesheet">
            <title>Controle - Presidio</title>
            <script>
                $(document).ready( function () {
                    $('#myTable').DataTable({

                    });
                } );
                $(function () {
                    $('.dropdown-toggle').dropdown();
                });
            </script>
        </head>
        <body>
            <?php require_once "../banco/conexao.php"?>
            <?php require_once "navegacao.php"?>
            <div class ="container">
                <div class="principal">
