<?php
$servername = "eletronova.mysql.uhserver.com";
$database = "eletronova";
$username = "eletronova";
$password = "Eletro.102030";

$conexao= mysqli_connect($servername, $username, $password, $database);

if (!mysqli_set_charset($conexao, 'utf8')) {
    printf('Error ao usar utf8: %s', mysqli_error($conexao));
    exit;
}
?>