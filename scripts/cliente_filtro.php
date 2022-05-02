<?php
$pcpfcnpj = $_POST['pcpfcnpj'];
$pnome = $_POST['pnome'];
$pcidade = $_POST['pcidade'];
$puf = $_POST['puf'];
$pramo = $_POST['pramo'];
$pstatus = $_POST['pstatus'];

if ($pcpfcnpj == '' and $pnome == '' and $pcidade == '' and $puf == '' and $pramo == '' and $pstatus == '') {
    $filtro = "SELECT * FROM `clientes` INNER JOIN `ramos` ON c_ramo=id_ramo ORDER BY c_nome DESC";
} else if ($pcpfcnpj == '' and $pnome != '' and $pcidade == '' and $puf == '' and $pramo == '' and $pstatus == '') {
    $filtro = "SELECT * FROM `clientes` INNER JOIN `ramos` ON c_ramo=id_ramo WHERE c_doc = '$pcpfcnpj'OR c_cidade = '$pcidade' OR c_uf = '$puf' OR c_ramo = '$pramo' OR c_status = '$pstatus' OR c_nome LIKE '%$pnome%' ORDER BY c_nome DESC";
} else if ($pcpfcnpj == '' and $pnome == '' and $pcidade != '' and $puf == '' and $pramo == '' and $pstatus == '') {
    $filtro = "SELECT * FROM `clientes` INNER JOIN `ramos` ON c_ramo=id_ramo WHERE c_doc = '$pcpfcnpj'OR c_cidade = '$pcidade' OR c_uf = '$puf' OR c_ramo = '$pramo' OR c_status = '$pstatus' OR c_nome LIKE '%$pnome%' ORDER BY c_nome DESC";
}else {
    $filtro = "SELECT * FROM `clientes` INNER JOIN `ramos` ON c_ramo=id_ramo WHERE c_doc = '$pcpfcnpj'OR c_cidade = '$pcidade' OR c_uf = '$puf' OR c_ramo = '$pramo' OR c_status = '$pstatus' ORDER BY c_nome DESC";
}

header("Location: /eletronova/?pagina=clientes&&filtro=" . $filtro);
