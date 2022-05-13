<?php
include 'conexao.php';
include 'password.php';
session_start();
$user = $_POST['u_user'];
$senha = $_POST['u_psw'];
$erro1 = "<b>Erro:</b> Usuário não encontrado.";
$erro2 = "<b>Erro:</b> Senha incorreta.";

$sql = "SELECT * FROM usuarios INNER JOIN `cargonivel` ON u_cargo=id_cargo WHERE u_user = '$user'";

$buscar = mysqli_query($conexao, $sql);
$total = mysqli_num_rows($buscar);

if ($total == 0) {
    header("Location: ../login.php?retorno=" . $erro1);
}
while ($array = mysqli_fetch_array($buscar)) {
    $id_usuario = $array['id_usuario'];
    $u_nome = $array['u_nome'];
    $u_psw = $array['u_psw'];
    $u_cargo = $array['u_cargo'];
    $nivel = $array['nivel'];
    $u_status = $array['u_status'];
    $u_foto = $array['u_foto'];
    $senhacod = sha1($senha);

    if ($total > 0) {
        if ($senhacod == $u_psw) {
            if ($u_status == 1) {
                $_SESSION['id_usuario'] = $id_usuario;
                $_SESSION['u_nome'] = $u_nome;
                $_SESSION['nivel'] = $nivel;
                $_SESSION['user'] = $user;
                $_SESSION['senha'] = $senha;
                $_SESSION['u_foto'] = $u_foto;

                header("Location: ../index.php?pagina=inicio");
            } else {
                header("Location: ../login.php?retorno=" . $erro1);
            }
        } else { ;
            header("Location: ../login.php?retorno=" . $erro2);
        }
    } else {
        
        header("Location: ../login.php?retorno=" . $erro1);
    }
}
