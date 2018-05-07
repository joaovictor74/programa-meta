<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <script src="../js/jquery.js"></script>
            <script src="../js/jquery.dataTables.js"></script>
            <link rel="stylesheet" href="../js/jquery.dataTablesEstilo.css">
            <link href = "../css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
            <link href = "../css/front_presidio.css" rel="stylesheet">
            <title>Loja</title>
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
            <?php require_once "navegacao.php"?>
            <div class ="container">
                <div class="principal">
