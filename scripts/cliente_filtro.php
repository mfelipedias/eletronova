<?php
$pesquisa = $_POST['pesquisa'];
$tipopesquisa = $_POST['tipopesquisa'];
$fpesquisa = $_POST['fpesquisa'];
$ftipopesquisa = $_POST['ftipopesquisa'];

if ($pesquisa == '' and $tipopesquisa == '') {
    $filtro = "SELECT * FROM `clientes` INNER JOIN `ramos` ON c_ramo=id_ramo ORDER BY c_nome DESC";
} else  {
    $filtro = "SELECT * FROM `clientes` INNER JOIN `ramos` ON c_ramo=id_ramo WHERE c_nome like '%$pesquisa%' ORDER BY c_nome DESC";
}

header("Location: /eletronova/?pagina=clientes&&filtro=" . $filtro . "&&pesquisa=" . $pesquisa . "&&tipo=" . $tipopesquisa);
