<?php
include 'conexao.php';
include 'password.php';
session_start();
$user = $_POST['u_user'];
$senha = $_POST['u_psw'];
$erro1 = "<b>Erro:</b> Usuário não encontrado.";
$erro2 = "<b>Erro:</b> Senha incorreta.";

$sql = "SELECT * FROM usuarios WHERE u_user = '$user'";

$buscar = mysqli_query($conexao, $sql);
$total = mysqli_num_rows($buscar);

if ($total == 0) {
    // echo "ERRO login";
    header("Location: ../login.php?retorno=" . $erro1);
}
while ($array = mysqli_fetch_array($buscar)) {
    $id_usuario = $array['id_usuario'];
    $u_nome = $array['u_nome'];
    $u_psw = $array['u_psw'];
    $u_cargo = $array['u_cargo'];
    $u_status = $array['u_status'];
    $senhacod = sha1($senha);

    if ($total > 0) {
        if ($senhacod == $u_psw) {
            if ($u_status == 1) {
                $_SESSION['id_usuario'] = $id_usuario;
                $_SESSION['u_nome'] = $u_nome;
                $_SESSION['u_cargo'] = $u_cargo;
                $_SESSION['user'] = $user;
                $_SESSION['senha'] = $senha;
                echo "Login OK";
                header("Location: ../index.php");
            } else {
                header("Location: ../login.php?retorno=" . $erro1);
            }
        } else { //header("Location: ../login.php?retorno=erro");
            header("Location: ../login.php?retorno=" . $erro2);
        }
    } else {
        //header("Location: ../login.php?retorno=erro");
        header("Location: ../login.php?retorno=" . $erro1);
    }
}
