<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-hover table-responsive-md table-sm">
          <thead>
            <tr>
              <th scope="col">CPF/CNPJ</th>
              <th scope="col">Nome</th>
              <th scope="col">Endereço</th>
              <th scope="col">Status</th>
              <th scope="col">Ação</th>
            </tr>
          </thead>
          <?php
          include 'scripts/conexao.php';
          $sql = "SELECT * FROM `clientes`";
          $busca = mysqli_query($conexao, $sql);
          $contador = 0;
          while ($array = mysqli_fetch_array($busca)) {

            $contador = $contador + 1;
            $id_cliente = $array['id_cliente'];
            $c_doc = $array['c_doc'];
            $c_nome = $array['c_nome'];
            $c_end = $array['c_end'];
            $c_status = $array['c_status'];
          ?>
          <tbody>
            <tr>
              <th scope="row"><?php echo $c_doc ?></th>
              <td><?php echo $c_nome ?></td>
              <td><?php echo $c_end ?></td>
              <td><?php echo $c_status ?></td>
              <td><a href="?pagina=clientes_edit" style="font-size: 23px;"><i class="bi bi-eye"></i></a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
</body>
</html>