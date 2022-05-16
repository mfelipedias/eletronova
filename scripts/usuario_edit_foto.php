<?php
include 'conexao.php';
include 'password.php';

$id = $_POST['id_usuario'];
$u_nome = $_POST['nome'];
$foto_atual = $_POST['foto_atual'];

if (isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0) {
    $deletar = unlink('.' . $foto_atual);
    var_dump( $deletar );

    echo "Você enviou o arquivo: <strong>" . $_FILES['arquivo']['name'] . "</strong><br />";
    echo "Este arquivo é do tipo: <strong>" . $_FILES['arquivo']['type'] . "</strong><br />";
    echo "Temporáriamente foi salvo em: <strong>" . $_FILES['arquivo']['tmp_name'] . "</strong><br />";
    echo "Seu tamanho é: <strong>" . $_FILES['arquivo']['size'] . "</strong> Bytes<br /><br />";

    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
    $nome = $_FILES['arquivo']['name'];


    // Pega a extensao
    $extensao = strrchr($nome, '.');

    // Converte a extensao para mimusculo
    $extensao = strtolower($extensao);

    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfilero as extesões permitidas e separo por ';'
    // Isso server apenas para eu poder pesquisar dentro desta String
    if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        $novoNome = md5(microtime()) . '.' . $extensao;

        // Concatena a pasta com o nome
        $destino = '../img/perfil/' . $novoNome;

        // tenta mover o arquivo para o destino
        if (@move_uploaded_file($arquivo_tmp, $destino)) {
            $u_foto = './img/perfil/' . $novoNome;
            $sql = "UPDATE usuarios SET u_foto = '$u_foto', u_update = now() WHERE id_usuario = '$id'";
            $atualizar = mysqli_query($conexao, $sql);
            $retorno = "Foto alterada com sucesso!";
            header("Location: ../?pagina=usuarios-up-ok&&id=" . $id . "&&retorno=" . $retorno);
        } else {
            $retorno = "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.";
            header("Location: ../?pagina=usuarios-up-erro&&id=" . $id . "&&retorno=" . $retorno);
        }
    } else {
        $retorno = "Você poderá enviar apenas arquivos *.jpg;*.jpeg;*.gif;*.png";
        header("Location: ../?pagina=usuarios-up-erro&&id=" . $id . "&&retorno=" . $retorno);
    }
} else {
    $retorno = "Você não enviou nenhum arquivo!";
    header("Location: ../?pagina=usuarios-up-erro&&id=" . $id . "&&retorno=" . $retorno);
}
