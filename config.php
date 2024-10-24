<?php
$host = 'localhost'; // ou o IP do seu servidor MySQL
$db = 'nome_do_banco'; // substitua pelo nome do seu banco de dados
$user = 'usuario'; // substitua pelo seu usuário
$pass = 'senha'; // substitua pela sua senha

// Cria a conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
