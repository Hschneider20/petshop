<?php
// Dados de conexão com o banco de dados MySQL
$host = 'localhost';  // Host do MySQL (normalmente é localhost)
$user = 'root';  // Usuário do MySQL
$password = '';  // Senha do MySQL
$database = 'petshop';  // Nome do banco de dados

// Conexão com o banco de dados
$conn = mysqli_connect($host, $user, $password, $database);

// Verifica se houve erro na conexão
if (mysqli_connect_errno()) {
    die('Falha na conexão com o banco de dados: ' . mysqli_connect_error());
}
