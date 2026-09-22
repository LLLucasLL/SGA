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
    $NOME = $_POST['nome'];
    $TELEFONE = $_POST['telefone'];
    $ANIMAL = $_POST['animal'];
    $ACAO = $_POST['acao'];

    // Verificar se o campo nome foi preenchido
    if (empty($ANIMAL)) {
        echo "<script>alert('Falta preencher o ID do animal'); window.history.back();</script>";
        exit();
    }

    // Inserir os dados no banco
    $stmt = $conn->prepare("INSERT INTO formulario (AA_CPF, AA_EMAIL, AA_NOME, AA_TELEFONE, AA_ID_ANIMAL, AA_ACAO) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('isssss', $CPF, $EMAIL, $NOME, $TELEFONE, $ANIMAL, $ACAO);

    if ($stmt->execute()) {
        echo "<script>alert('Cadastro concluído, fique em alerta logo entraremos em contato.'); window.location.href = 'index.html';</script>";
    } else {
        echo "Erro ao enviar os dados: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>