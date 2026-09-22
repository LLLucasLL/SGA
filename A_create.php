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
    $nome = $_POST['nome'];
    $sexo = $_POST['genero'];
    $descricao = $_POST['descricao'];
    $animal = $_POST['animal'];
    $ong = $_POST['ong'];
    $foto = $_FILES['foto'];

    // Verificar se o campo nome foi preenchido
    if (empty($nome)) {
        echo "<script>alert('Falta preencher o nome'); window.history.back();</script>";
        exit();
    }

    // Verificar se o arquivo foi enviado e é válido
    $extensoesPermitidas = ['jpg', 'jpeg', 'png'];
    $extensaoArquivo = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));

    if (!empty($foto['name']) && !in_array($extensaoArquivo, $extensoesPermitidas)) {
        echo "<script>alert('A imagem não é jpg, jpeg ou png'); window.history.back();</script>";
        exit();
    }

    // Processar o upload da foto
    if (!empty($foto['name'])) {
        $nomeArquivo = uniqid() . "." . $extensaoArquivo;
        $caminhoArquivo = 'uploads/' . $nomeArquivo;

        // Verificar se a pasta 'uploads' existe e se não, criar a pasta
        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }

        move_uploaded_file($foto['tmp_name'], $caminhoArquivo);
    } else {
        $nomeArquivo = null;
    }

    // Inserir os dados no banco
    $stmt = $conn->prepare("INSERT INTO animais (nome, sexo, descricao, tipo_animal, foto, ong) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssss', $nome, $sexo, $descricao, $animal, $nomeArquivo, $ong);

    if ($stmt->execute()) {
        echo "<script>alert('Cadastro concluído'); window.location.href = 'A_create.html';</script>";
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>