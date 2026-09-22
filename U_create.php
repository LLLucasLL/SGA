<?php
$host = 'localhost';
$db = 'sga';
$user = 'root';
$pass = '';

// Conectar ao banco de dados
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $CPF = $_POST['cpf'];
    $EMAIL = $_POST['email'];
    $USERNAME = $_POST['username'];
    $NOME = $_POST['nome'];
    $SENHA = $_POST['senha'];

    // Verificar se o campo nome foi preenchido
    if (empty($NOME)) {
        echo "<script>alert('Falta preencher o nome'); window.history.back();</script>";
        exit();
    }

    // Inserir os dados no banco
    $stmt = $conn->prepare("INSERT INTO usuario (USU_CPF, USU_EMAIL, USU_USERNAME, USU_NOME, USU_SENHA) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param('issss', $CPF, $EMAIL, $USERNAME, $NOME, $SENHA);

    if ($stmt->execute()) {
        echo "<script>alert('Cadastro concluído'); window.location.href = 'U_create.html';</script>";
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>