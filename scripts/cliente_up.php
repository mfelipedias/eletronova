<?php
include 'conexao.php';

$id=$_POST['id_cliente'];
$doc = $_POST['cpfcnpj'];
$nome = $_POST['nome'];
$ramo = $_POST['ramo'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$comp = $_POST['complemento'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$contato = $_POST['contato'];
$tel = $_POST['telefone'];
$mail = $_POST['email'];
$info = $_POST['maisinfo'];
$status = $_POST['status'];

$sql = "UPDATE clientes SET c_status = '$status', c_ramo = '$ramo', c_cep = '$cep', c_rua = '$rua',c_bairro = '$bairro', c_comp = '$comp', c_cidade = '$cidade', c_uf = '$uf', c_contato = '$contato', c_tel = '$tel', c_mail = '$mail', c_info = '$info', c_update = now() WHERE id_cliente = '$id'";
$atualizar = mysqli_query($conexao, $sql);

header("Location: /eletronova/?pagina=clientes_view&&id=" . $id);
?>