<?php
$pesquisa = $_POST['pesquisa1'];
$cargo = $_POST['pesquisa4'];
$cpf = $_POST['pesquisa2'];
$status = $_POST['pesquisa3'];
$tipopesquisa = $_POST['tipopesquisa'];
$fpesquisa = $_POST['fpesquisa'];

if ($fpesquisa != '') {
    $filtro = "SELECT * FROM `usuarios` INNER JOIN `cargonivel` ON u_cargo=id_cargo ORDER BY u_nome DESC";
} else {
    if ($pesquisa == '' and $tipopesquisa == '') {
        $filtro = "SELECT * FROM `usuarios` INNER JOIN `cargonivel` ON u_cargo=id_cargo ORDER BY u_nome DESC";
    } else {
        switch ($tipopesquisa) {
            case $tipopesquisa == 'CPF/CNPJ':
                $filtro = "SELECT * FROM `usuarios` INNER JOIN `cargonivel` ON u_cargo=id_cargo WHERE u_cpf = '$cpf' ORDER BY u_nome DESC";
                $pesquisa = $cpf;
                break;
            case $tipopesquisa == 'Nome':
                $filtro = "SELECT * FROM `usuarios` INNER JOIN `cargonivel` ON u_cargo=id_cargo WHERE  u_nome like '%$pesquisa%' ORDER BY u_nome DESC";
                break;
            case $tipopesquisa == 'Cargo':
                $filtro = "SELECT * FROM `usuarios` INNER JOIN `cargonivel` ON u_cargo=id_cargo WHERE u_cargo = '$cargo' ORDER BY u_nome DESC";
                break;
            case $tipopesquisa == 'Status':
                $filtro = "SELECT * FROM `usuarios` INNER JOIN `cargonivel` ON u_cargo=id_cargo WHERE u_status = '$status' ORDER BY u_nome DESC";
                if ($status == '1') {
                    $pesquisa = 'Ativo';
                } else {
                    $pesquisa = 'Inativo';
                }
                break;
            default:
                $filtro = "SELECT * FROM `usuarios` INNER JOIN `cargonivel` ON u_cargo=id_cargo ORDER BY u_nome DESC";
        }
    }
}


header("Location: /eletronova/?pagina=usuarios&&filtro=" . $filtro . "&&pesquisa=" . $pesquisa . "&&tipo=" . $tipopesquisa);
