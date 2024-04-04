<?php

$servername = "0"; // colocar o ip da maquina mysql
$username = "user_%";
$password = "vagrant";
$dbname = "formulario";
$tablename = "cadastro";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Prepara a consulta SQL para listar os registros
$sql = "SELECT nome, email FROM $tablename";

// Executa a consulta
$result = $conn->query($sql);

// Exibe os resultados
if ($result->num_rows > 0) {
    echo "<h1>Lista de Cadastros</h1>";
    while ($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["nome"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Nenhum registro encontrado";
}

// Fecha a conexão
$conn->close();
?>
