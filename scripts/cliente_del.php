<?php
include 'conexao.php';
$id=$_GET['id'];
$nome=$_GET['nome'];
$sql = "UPDATE clientes SET c_status = '0' WHERE id_cliente = '$id'";
$atualizar = mysqli_query($conexao, $sql);

$deletar = "DELETE FROM clientes where id_cliente = $id";
$fila = mysqli_query($conexao, $deletar);
$retorno = "Cliente: " . $nome . " deletado/inativado com sucesso.";
header("Location: /eletronova/?pagina=clientes-del-ok&&retorno=" . $retorno);
?>