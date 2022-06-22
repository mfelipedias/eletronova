<?php
include 'conexao.php';

$p_usuario = $_POST['id_usuario'];
$p_ordem = $_POST['p_ordem'];
$p_latitude = $_POST['lat'];
$p_longitude = $_POST['lng'];
$p_funcionario = $_POST['p_funcionario'];


$sql = "INSERT INTO pontos (p_usuario, p_ordem, p_latitude, p_longitude, p_funcionario, p_chegada) values 
('$p_usuario','$p_ordem', '$p_latitude','$p_longitude', '$p_funcionario', now())";
echo $sql;
$inserir = mysqli_query($conexao, $sql);
$retorno = "Ponto marcado com sucesso!";
header("Location: ../?pagina=ponto-add-ok&&retorno=" . $retorno . "&&id=". $p_ordem);