<?php
include 'conexao.php';
include 'password.php';

$u_status = $_POST['status'];
$u_cpf = $_POST['cpf'];
$u_rg = $_POST['rg'];
$u_nome = $_POST['nome'];
$u_cep = $_POST['cep'];
$u_rua = $_POST['rua'];
$u_bairro = $_POST['bairro'];
$u_cidade = $_POST['cidade'];
$u_uf = $_POST['uf'];
$u_comp = $_POST['complemento'];
$u_cargo = $_POST['cargo'];
$u_tel = $_POST['telefone'];
$u_mail = $_POST['email'];
$u_user = $_POST['usuario'];
$u_psw = $_POST['senha'];
$u_info = $_POST['info'];

$sqlbuscarcpf = "SELECT u_cpf FROM usuarios WHERE u_cpf = '$u_cpf'";
$buscarcpf = mysqli_query($conexao, $sqlbuscarcpf);
$totalcpf = mysqli_num_rows($buscarcpf);

$sqlbuscaruser = "SELECT u_user FROM usuarios WHERE u_user = '$u_user'";
$buscaruser = mysqli_query($conexao, $sqlbuscaruser);
$totaluser = mysqli_num_rows($buscaruser);

if ($totalcpf > 0) {
    $retorno = "CPF: " . $u_cpf . " já existe cadastrado.";
    header("Location: /eletronova/?pagina=usuarios-add-erro&&retorno=" . $retorno);
} else if($totaluser > 0) {
    $retorno = "Usuário: " . $u_user . " já existe cadastrado.";
    header("Location: /eletronova/?pagina=usuarios-add-erro&&retorno=" . $retorno);
} 
else {
    $sql = "INSERT INTO usuarios (u_status, u_cpf, u_rg, u_nome, u_cep, u_rua, u_bairro, u_cidade, u_uf, u_comp, u_cargo, u_tel, u_mail, u_user, u_psw, u_info, u_cadastro, u_update) values ('$u_status', '$u_cpf', '$u_rg', '$u_nome', '$u_cep', '$u_rua', '$u_bairro', '$u_cidade', '$u_uf', '$u_comp', '$u_cargo', '$u_tel', '$u_mail', '$u_user', sha1('$u_psw'), '$u_info', now(), now())";
    $inserir = mysqli_query($conexao, $sql);
    $retorno = "Usuário: " . $u_nome . " cadastrado com sucesso!";
    header("Location: ../?pagina=usuarios-add-ok&&retorno=" . $retorno);
}


?>