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
    $NOME = $_POST['nome'];
    $EMAIL = $_POST['email'];
    $ASSUNTO = $_POST['assunto'];
    $DESCRICAO = $_POST['descricao'];

    // Verificar se o campo nome foi preenchido
    //if (empty($EMAIL)) {
        //echo "<script>alert('Falta preencher o email'); window.history.back();</script>";
        //exit();
    //}

    // Inserir os dados no banco
    $stmt = $conn->prepare("INSERT INTO feedback (FED_NOME, FED_EMAIL, FED_ASSUNTO, FED_DESCRICAO) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssss', $NOME, $EMAIL, $ASSUNTO, $DESCRICAO);

    if ($stmt->execute()) {
        echo "<script>alert('Mensagem enviada com sucesso'); window.location.href = 'feedback.html';</script>";
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>