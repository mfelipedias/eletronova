<?php
include 'conexao.php';
$id=$_GET['id'];
$sql = "UPDATE ordens SET os_status = '0' WHERE id_os = '$id'";
$atualizar = mysqli_query($conexao, $sql);

$deletar = "DELETE FROM ordens where id_os = $id";
$fila = mysqli_query($conexao, $deletar);
$retorno = "Ordem: " . $id . " deletada/inativada com sucesso.";
header("Location: ../?pagina=ordens-del-ok&&retorno=" . $retorno);
?>