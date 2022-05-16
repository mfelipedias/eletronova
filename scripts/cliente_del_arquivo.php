<?php
include 'conexao.php';
$id_cliente = $_GET['id_cliente'];
$id_anexo = $_GET['id_anexo'];
$arquivo = $_GET['arquivo'];
    $deletar = unlink('.' . $arquivo);
    var_dump( $arquivo );

    $deletar = "DELETE FROM anexocliente where id_anexo = $id_anexo";
$fila = mysqli_query($conexao, $deletar);
$retorno = "Anexo deletado com sucesso.";
header("Location: ../?pagina=clientes-up-ok&&id=" . $id_cliente. "&&retorno=" . $retorno);

?>