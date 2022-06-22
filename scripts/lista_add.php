<?php
include 'conexao.php';

$l_usuario = $_POST['l_usuario'];
$l_ordem = $_POST['l_ordem'];
$l_lista = $_POST['l_lista'];


$sql = "INSERT INTO listas (l_ordem, l_usuario, l_lista, l_cadastro, l_update) values 
('$l_ordem','$l_usuario', '$l_lista',now(),now())";
echo $sql;
$inserir = mysqli_query($conexao, $sql);
$retorno = "Lista adicionada com sucesso!";
header("Location: ../?pagina=lista-add-ok&&retorno=" . $retorno . "&&id=" . $l_ordem);
