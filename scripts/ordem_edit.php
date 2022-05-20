<?php
include 'conexao.php';

$id_os = $_POST['id_os'];
$status = $_POST['status'];
$tipo = $_POST['tipo'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$info = $_POST['maisinfo'];

$sql = "UPDATE ordens SET os_status='$status' , os_tipo='$tipo', os_cep='$cep', os_rua='$rua', os_bairro='$bairro', os_cidade='$cidade', os_uf='$uf', os_comp='$complemento', os_info='$info', os_update=now() WHERE id_os = '$id_os'";
   
//$sql = "UPDATE clientes SET c_status = '$status', c_nome = '$nome', c_ramo = '$ramo', c_cep = '$cep', c_rua = '$rua',c_bairro = '$bairro', c_comp = '$comp', c_cidade = '$cidade', c_uf = '$uf', c_contato = '$contato', c_tel = '$tel', c_mail = '$mail', c_info = '$info', c_update = now() WHERE id_cliente = '$id'";

$atualizar = mysqli_query($conexao, $sql);

$retorno = "Ordem: " . $id_os . " alterada com sucesso!";
header("Location: ../?pagina=ordens-up-ok&&id=" . $id_os. "&&retorno=" . $retorno);
