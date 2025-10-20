<?php

$mysqli = new mysqli('mariadb', 'root', '1234', 'evolus', 3306);

if ($mysqli->connect_error) {
    die('Erro de conexão: ' . $mysqli->connect_error);
}

echo 'Conectado com sucesso ao banco de dados!';
$mysqli->close();