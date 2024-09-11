<?php
// Conectar ao banco de dados (substitua os valores pelos seus)
$conexao = new mysqli("localhost", "root", "", "sga");

// Verificar a conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter dados do formulário
    $usuario = $_POST["email"];
    $senha = $_POST["senha"];

    // Consultar o banco de dados para verificar o login
    $query = "SELECT ADM_EMAIL, ADM_SENHA, ADM_NIVEL FROM adm WHERE ADM_EMAIL = ?";
    $stmt = $conexao->prepare($query);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->bind_result( $usuario_db, $senha_db, $nivel_acesso);
    $stmt->fetch();
    $stmt->close();

    // Verificar se o usuário existe e a senha está correta
    if ($usuario_db && $senha === $senha_db) {
        // Login bem-sucedido
        session_start();
        $_SESSION["ADM_EMAIL"] = $usuario_db;
        $_SESSION["ADM_NIVEL"] = $nivel_acesso;
        header("Location: pagina_protegida.php");
        exit();
    } else {
        // Login falhou
        echo "Email ou senha incorretos.";
    }
}

// Fechar a conexão
$conexao->close();
?>