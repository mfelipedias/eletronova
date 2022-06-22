<?php
include 'conexao.php';

$p_ordem = $_POST['p_ordem'];
$id_ponto = $_POST['entrada'];
$p_latitude = $_POST['lat1'];
$p_longitude = $_POST['lng1'];

$sql = "UPDATE pontos SET p_saida = now(), p_latitude_s = '$p_latitude',p_longitude_s='$p_longitude' WHERE id_ponto = '$id_ponto'";
$atualizar = mysqli_query($conexao, $sql);

$retorno = "Saída marcada com sucesso!";
header("Location: ../?pagina=ponto-add-ok&&retorno=" . $retorno . "&&id=". $p_ordem);
?>