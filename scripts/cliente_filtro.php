<?php
$pesquisa = $_POST['pesquisa1'];
$cpfcnpj = $_POST['pesquisa2'];
$status = $_POST['pesquisa3'];
$ramo = $_POST['pesquisa4'];
$tipopesquisa = $_POST['tipopesquisa'];
$fpesquisa = $_POST['fpesquisa'];

if ($fpesquisa != '') {
    $filtro = "SELECT * FROM `clientes` INNER JOIN `ramos` ON c_ramo=id_ramo ORDER BY c_nome DESC";
} else {
    if ($pesquisa == '' and $tipopesquisa == '') {
        $filtro = "SELECT * FROM `clientes` INNER JOIN `ramos` ON c_ramo=id_ramo ORDER BY c_nome DESC";
    } else {
        switch ($tipopesquisa) {
            case $tipopesquisa == 'CPF/CNPJ':
                $filtro = "SELECT * FROM `clientes` INNER JOIN `ramos` ON c_ramo=id_ramo WHERE c_doc = '$cpfcnpj' ORDER BY c_nome DESC";
                $pesquisa = $cpfcnpj;
                break;
            case $tipopesquisa == 'Nome':
                $filtro = "SELECT * FROM `clientes` INNER JOIN `ramos` ON c_ramo=id_ramo WHERE c_nome like '%$pesquisa%' ORDER BY c_nome DESC";
                break;
            case $tipopesquisa == 'Cidade':
                $filtro = "SELECT * FROM `clientes` INNER JOIN `ramos` ON c_ramo=id_ramo WHERE c_cidade like '%$pesquisa%' ORDER BY c_nome DESC";
                break;
            case $tipopesquisa == 'UF':
                $filtro = "SELECT * FROM `clientes` INNER JOIN `ramos` ON c_ramo=id_ramo WHERE c_uf like '%$pesquisa%' ORDER BY c_nome DESC";
                break;
            case $tipopesquisa == 'Ramo':
                $filtro = "SELECT * FROM `clientes` INNER JOIN `ramos` ON c_ramo=id_ramo WHERE c_ramo like '%$ramo%' ORDER BY c_nome DESC";
                $pesquisa = $ramo;
                break;
            case $tipopesquisa == 'Status':
                $filtro = "SELECT * FROM `clientes` INNER JOIN `ramos` ON c_ramo=id_ramo WHERE c_status = '$status' ORDER BY c_nome DESC";
                if ($status == '1') {
                    $pesquisa = 'Ativo';
                } else {
                    $pesquisa = 'Inativo';
                }
                break;
            default:
                $filtro = "SELECT * FROM `clientes` INNER JOIN `ramos` ON c_ramo=id_ramo ORDER BY c_nome DESC";
        }
    }
}


header("Location: ../?pagina=clientes&&filtro=" . $filtro . "&&pesquisa=" . $pesquisa . "&&tipo=" . $tipopesquisa);
