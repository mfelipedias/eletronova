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


class Maps
{

    //chave publica de acesso
    private static $googleKey = 'AIzaSyAEfuEc51rYqxv3Z8tNmWOanZqE5Lq4unc';

    static function loadUrl($url)
    {
        $cURL = curl_init($url);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURL, CURLOPT_FOLLOWLOCATION, true);
        $result = curl_exec($cURL);
        curl_close($cURL);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    static function getLocal($address)
    {
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&key=' . self::$googleKey;
        $result = self::loadUrl($url);

        $json = json_decode($result);
        $lat = json_decode($result);
        $lng = json_decode($result);
        if ($json->{'status'} == 'OK') {

            return $json->{'results'}[0]->{'geometry'}->{'location'};
            return $lat->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
            return $lng->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
        } else {
            return false;
        }
    }
    static function getLat($address)
    {
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&key=' . self::$googleKey;
        $result = self::loadUrl($url);
        $lat = json_decode($result);
        if ($lat->{'status'} == 'OK') {
            return $lat->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
        } else {
            return false;
        }
    }
    static function getLng($address)
    {
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&key=' . self::$googleKey;
        $result = self::loadUrl($url);
        $lng = json_decode($result);
        if ($lng->{'status'} == 'OK') {
            return $lng->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
        } else {
            return false;
        }
    }
}

if ($endereco == '1') {
    $latitude = Maps::getLat("$rua . $bairro . $uf");
    $longitude = Maps::getLng("$rua . $bairro . $uf");

    $sql = "INSERT INTO ordens (os_status, os_cliente , os_tipo, os_cep, os_rua, os_bairro, os_cidade, os_uf, os_comp, os_latitude, os_longitude, os_info, os_cadastro, os_update) values ('$status', '$cliente', '$tipo', '$cep', '$rua', '$bairro', '$cidade', '$uf', '$complemento', '$latitude', '$longitude', '$info', now(), now())";
    $inserir = mysqli_query($conexao, $sql);
    $retorno = "Ordem cadastrada com sucesso!";
    header("Location: /eletronova/?pagina=ordens-add-ok&&retorno=" . $retorno);
} else if ($endereco == '2') {

    $latitude = Maps::getLat("$c_rua . $c_bairro . $c_cidade . $c_uf");
    $longitude = Maps::getLng("$c_rua . $c_bairro . $c_cidade . $c_uf");

    $sql = "INSERT INTO ordens (os_status, os_cliente , os_tipo, os_cep, os_rua, os_bairro, os_cidade, os_uf, os_comp, os_latitude, os_longitude, os_info, os_cadastro, os_update) values ('$status', '$cliente', '$tipo', '$c_cep', '$c_rua', '$c_bairro', '$c_cidade', '$c_uf', '$complemento', '$latitude', '$longitude', '$info', now(), now())";
    $inserir = mysqli_query($conexao, $sql);
    $retorno = "Ordem cadastrada com sucesso!";
    header("Location: ../?pagina=ordens-add-ok&&retorno=" . $retorno);
}
