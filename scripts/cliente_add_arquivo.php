<?php
include 'conexao.php';

$a_cliente = $_POST['id'];
$a_nome = $_POST['a_nome'];


// verifica se foi enviado um arquivo 
if (isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0) {

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
    if (strstr('.pdf;.jpg;.jpeg;.gif;.png', $extensao)) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        $novoNome = md5(microtime()) . '.' . $extensao;

        // Concatena a pasta com o nome
        $destino = '../anexos/' . $novoNome;

        // tenta mover o arquivo para o destino
        if (@move_uploaded_file($arquivo_tmp, $destino)) {
            $a_arquivo = './anexos/' . $novoNome;
            $sql = "INSERT INTO anexocliente (a_cliente, a_arquivo, a_nome, a_data) values ('$a_cliente', '$a_arquivo', '$a_nome', now())";

            $inserir = mysqli_query($conexao, $sql);

            $retorno = "Arquivo anexado com sucesso!";
            header("Location: ../?pagina=clientes-up-ok&&id=" . $a_cliente. "&&retorno=" . $retorno);
        } else {
            $retorno = "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.";
            header("Location: ../?pagina=clientes-up-erro&&id=" . $a_cliente. "&&retorno=" . $retorno);
        }
    } else {
        $retorno = "Você poderá enviar apenas arquivos *.pdf;*.jpg;*.jpeg;*.gif;*.png";
        header("Location: ../?pagina=clientes-up-erro&&id=" . $a_cliente. "&&retorno=" . $retorno);
    }
} else {
    $retorno = "Você não enviou nenhum arquivo!";
    header("Location: ../?pagina=clientes-up-erro&&id=" . $a_cliente. "&&retorno=" . $retorno);
}
?>

?>