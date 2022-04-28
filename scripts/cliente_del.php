<?php
include 'conexao.php';
$id=$_GET['id'];

$sql = "UPDATE clientes SET c_status = '0' WHERE id_cliente = '$id'";
$atualizar = mysqli_query($conexao, $sql);

$deletar = "DELETE FROM clientes where id_cliente = $id";
$fila = mysqli_query($conexao, $deletar);

header("Location: /eletronova/?pagina=clientes");
?>