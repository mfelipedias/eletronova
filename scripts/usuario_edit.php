<?php
include 'conexao.php';
include 'password.php';

$id=$_POST['id_usuario'];
$u_status=$_POST['status'];
$u_cpf=$_POST['cpf'];
$u_rg = $_POST['rg'];
$u_nome=$_POST['nome'];
$u_cep=$_POST['cep'];
$u_bairro=$_POST['bairro'];
$u_rua=$_POST['rua'];
$u_cidade=$_POST['cidade'];
$u_uf=$_POST['uf'];
$u_comp=$_POST['complemento'];
$u_cargo=$_POST['cargo'];
$u_tel=$_POST['telefone'];
$u_mail=$_POST['email'];
$u_user=$_POST['usuario'];
$u_info=$_POST['info'];

$sql = "UPDATE usuarios SET u_cpf = '$u_cpf', u_rg = '$u_rg', u_nome = '$u_nome', u_cep = '$u_cep', u_bairro = '$u_bairro', u_rua = '$u_rua', u_cidade = '$u_cidade', u_uf = '$u_uf', u_comp = '$u_comp', u_cargo = '$u_cargo', u_tel = '$u_tel', u_status = '$u_status', u_mail = '$u_mail',u_user = '$u_user', u_info = '$u_info' , u_update = now() WHERE id_usuario = '$id'";
$atualizar = mysqli_query($conexao, $sql);

$retorno = "Usuário: " . $u_nome . " alterado com sucesso!";
header("Location: ../?pagina=usuarios-up-ok&&id=" . $id. "&&retorno=" . $retorno);
?>