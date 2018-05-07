<?php   require_once "cabecalho.php";
        require_once "../banco/conexao.php"?>

<table id="myTable" class="display table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Matricula</th>
        <th>Nome</th>
        <th>Função</th>
        <th>Local</th>
    </tr>
    </thead>
    <tbody>
        <?php
        $selecao = "SELECT * FROM `agente`";
        $resultado = mysqli_query($con,$selecao);
        if (!$resultado) {
            echo 'Não é possivel rodar o Comando: ' . mysqli_error($con);
            exit;
        }
        while($var = mysqli_fetch_row($resultado)) {
             $matricula = $var[1];
             $nome      = $var[2];
             $funcao    = $var[3];
             $local     = $var[4];
             echo "<tr>"."<td>".$matricula."</td>"."<td>".$nome."</td>"."<td>".$funcao."</td>"."<td>".$local."</td>"."</tr>";
          }?>
    </tbody>
</table>

<?php require_once "rodape.php"?>
