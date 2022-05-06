<?php
include 'conexao.php';
include 'password.php';

$id=$_POST['id_usuario'];
$u_psw=$_POST['senha'];


$sql = "UPDATE usuarios SET u_psw = sha1('$u_psw'), u_update = now() WHERE id_usuario = '$id'";
$atualizar = mysqli_query($conexao, $sql);

$retorno = "Senha alterada com sucesso!";
header("Location: ../?pagina=usuarios-up-ok&&id=" . $id. "&&retorno=" . $retorno);
?>