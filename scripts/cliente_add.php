<?php
include 'conexao.php';

$doc = $_POST['cpfcnpj'];
$nome = $_POST['nome'];
$ramo = $_POST['ramo'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$comp = $_POST['complemento'];
$contato = $_POST['cnome'];
$tel = $_POST['telefone'];
$mail = $_POST['cemail'];
$info = $_POST['maisinfo'];
$status = $_POST['status'];

$sqlbuscar = "SELECT c_doc FROM clientes WHERE c_doc = '$doc'";
$buscar = mysqli_query($conexao, $sqlbuscar);
$total = mysqli_num_rows($buscar);
if($total>0){
    $retorno = "CPF/CNPJ: " . $doc ." já existe cadastrado.";
    header("Location: /eletronova/?pagina=clientes-add-erro&&retorno=" . $retorno);
}
else{

$sql = "INSERT INTO clientes (c_doc, c_nome, c_ramo, c_cep, c_rua, c_bairro, c_comp, c_cidade, c_uf, c_contato, c_tel, c_mail, c_info, c_status, c_cadastro, c_update) values ('$doc', '$nome', '$ramo', '$cep', '$rua', '$bairro', '$comp', '$cidade', '$uf', '$contato', '$tel', '$mail', '$info', '$status', now(), now())";
$inserir = mysqli_query($conexao, $sql);
$retorno = "Cliente: " . $nome . " cadastrado com sucesso!";
header("Location: /eletronova/?pagina=clientes-add-ok&&retorno=" . $retorno);

}