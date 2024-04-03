<?php
// Configurações de conexão ao banco de dados
$servername = "127.0.0.1"; // endereço do servidor
$username = "user_$"; // nome do usuário do MySQL
$password = "vagrant"; // senha do usuário do MySQL
$dbname = "formulario"; // nome do banco de dados
$port = "3308"; // número da porta do MySQL

try {
    // Cria uma nova conexão PDO
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    // Seta o modo de erro do PDO para Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão bem-sucedida!";
} catch(PDOException $e) {
    // Em caso de erro, exibe a mensagem de erro
    echo "Falha na conexão: " . $e->getMessage();
}
?>
