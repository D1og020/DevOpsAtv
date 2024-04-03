<?php
// Configurações de conexão ao banco de dados
$servername = "127.0.0.1";
$username = "user_%";
$password = "vagrant";
$dbname = "formulario";
$tablename = "cadastro";

// Recebe os dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname, 3308);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Prepara a consulta SQL para inserir os dados
$sql = "INSERT INTO $tablename (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

// Executa a consulta
if ($conn->query($sql) === TRUE) {
    header("Location: listagem.php"); // Redireciona para a página de listagem após o cadastro
    exit();
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
