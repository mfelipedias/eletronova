<?php
$servername = "eletronova.mysql.uhserver.com";
$database = "eletronova";
$username = "eletronova";
$password = "Eletro.102030";

$conexao = mysqli_connect($servername, $username, $password, $database);

if (!mysqli_set_charset($conexao, 'utf8')) {
    printf('Error ao usar utf8: %s', mysqli_error($conexao));
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM clientes INNER JOIN ramos ON c_ramo=id_ramo WHERE id_cliente = $id";
$busca = mysqli_query($conexao, $sql);
while ($array = mysqli_fetch_array($busca)) {
    $doc = $array['c_doc'];
    $nome = $array['c_nome'];
    $idramo = $array['c_ramo'];
    $ramo = $array['ramo'];
    $cep = $array['c_cep'];
    $rua = $array['c_rua'];
    $bairro = $array['c_bairro'];
    $comp = $array['c_comp'];
    $cidade = $array['c_cidade'];
    $uf = $array['c_uf'];
    $contato = $array['c_contato'];
    $tel = $array['c_tel'];
    $mail = $array['c_mail'];
    $info = $array['c_info'];
    $status = $array['c_status'];
    $c_cadastro = $array['c_cadastro'];
    $c_update = $array['c_update'];

    echo $nome . "<br>";
    echo "CPF/CNPJ: " . $doc . "<br>";
    echo "CEP: " .$cep . "<br>";
    echo "Endereço: " .$rua . " - " . $comp . ", " . $bairro. " / " . $cidade. " - " . $uf;
}
