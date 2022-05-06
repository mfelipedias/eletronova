<?php
include 'conexao.php';
$id=$_GET['id'];
$nome=$_GET['nome'];


$sql = "UPDATE usuarios SET u_status = '0' WHERE id_usuario = '$id'";
$atualizar = mysqli_query($conexao, $sql);

$deletar = "DELETE FROM usuarios where id_usuario = $id";
$fila = mysqli_query($conexao, $deletar);
$retorno = "Usuário: " . $nome . " deletado/inativado com sucesso.";
header("Location: ../?pagina=usuarios-del-ok&&retorno=" . $retorno);
?>