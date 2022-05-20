<?php
include 'conexao.php';

$status = $_POST['status'];
$tipo = $_POST['tipo'];
$cliente = $_POST['cliente'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$info = $_POST['maisinfo'];


$sqlbuscar = "SELECT * FROM `clientes` WHERE id_cliente = '$cliente'";
$buscar = mysqli_query($conexao, $sqlbuscar);
while ($array = mysqli_fetch_array($buscar)) {
    $c_cep = $array['c_cep'];
    $c_rua = $array['c_rua'];
    $c_cidade = $array['c_cidade'];
    $c_uf = $array['c_uf'];
    $c_bairro = $array['c_bairro'];
    $c_comp = $array['c_comp'];
}

if ($endereco == '1') {

    $lg_rua = str_replace(' ',  '+', $rua);
    $lg_numero =  preg_replace("/[^0-9]/", "", $rua);;
    $lg_cidade = str_replace(' ', '+', $cidade);
    $lg_pais = 'BR';

    $url = 'http://maps.google.com.br/maps/api/geocode/json?address=';
    $url .= "$lg_numero+$lg_rua,+$lg_cidade,+$lg_pais&sensor=false";

    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $url);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    $conteudo = curl_exec($c);
    curl_close($c);

    $json = json_decode($conteudo, false);

    print_r($conteudo);

    $latitude = $json->results[0]->geometry->location->lat;
    $longitude = $json->results[0]->geometry->location->lng;

    $sql = "INSERT INTO ordens (os_status, os_cliente , os_tipo, os_cep, os_rua, os_bairro, os_cidade, os_uf, os_comp, os_latitude, os_longitude, os_info, os_cadastro, os_update) values ('$status', '$cliente', '$tipo', '$cep', '$rua', '$bairro', '$cidade', '$uf', '$complemento', '$latitude', '$longitude', '$info', now(), now())";
    $inserir = mysqli_query($conexao, $sql);
    $retorno = "Ordem cadastrada com sucesso!";
    header("Location: /eletronova/?pagina=ordens-add-ok&&retorno=" . $retorno);

} else if ($endereco == '2') {
    $lg_rua = str_replace(' ',  '+', $c_rua);
    $lg_numero =  preg_replace("/[^0-9]/", "", $c_rua);;
    $lg_cidade = str_replace(' ', '+', $c_cidade);
    $lg_pais = 'BR';

    $url = 'http://maps.google.com.br/maps/api/geocode/json?address=';
    $url .= "$lg_numero+$lg_rua,+$lg_cidade,+$lg_pais&sensor=false";

    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $url);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    $conteudo = curl_exec($c);
    curl_close($c);

    $json = json_decode($conteudo, false);

    print_r($conteudo);

    $latitude = $json->results[0]->geometry->location->lat;
    $longitude = $json->results[0]->geometry->location->lng;

    $sql = "INSERT INTO ordens (os_status, os_cliente , os_tipo, os_cep, os_rua, os_bairro, os_cidade, os_uf, os_comp, os_latitude, os_longitude, os_info, os_cadastro, os_update) values ('$status', '$cliente', '$tipo', '$c_cep', '$c_rua', '$c_bairro', '$c_cidade', '$c_uf', '$complemento', '', '', '$info', now(), now())";
    $inserir = mysqli_query($conexao, $sql);
    $retorno = "Ordem cadastrada com sucesso!";
    header("Location: ../?pagina=ordens-add-ok&&retorno=" . $retorno);
}
