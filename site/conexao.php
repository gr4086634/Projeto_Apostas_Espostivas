<?php
$host = "localhost";
$usuario = "root"; 
$senha = "";      
$banco = "apostas_db";

$conn = mysqli_connect($host, $usuario, $senha, $banco);

// Verificar conexão
if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}
?>
