<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION["USU_CPF"])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Página Protegida</title>
</head>

<body>

    <nav>
        <div class="nav-logo">
            <img src="images/logo.png">
        </div>
        <a class="btn" href="logout.php">Sair</a>
    </nav>

    <header class="container">
        <h1 class="titulo_u">Olá, seja bem vindo a <span>área do usuário!</span>.</h1>
        <div class="box">
            <div class="content">
                <span class="blur"></span>
                <span class="blur"></span>
                <span class="blur"></span>
                <span class="blur"></span>
                <span class="blur"></span>
                <span class="blur"></span>
                <span class="blur"></span>
                <h1>Seus Dados</h1>

                <?php
                require_once("conexao.php");
                if (!isset($_POST["txtCPF"])) {
                    ?>
                    <form name="frmAlterar" method="POST" action="pagina_protegida1.php">
                        <p><label>Confirme seu CPF, para ver seus dados:</label>
                            <br>
                            <input class="form-input" type="text" name="txtCPF" size="20">
                        <div class="btnfor">
                            <input class="btn" type="submit" value="Verificar" name="verificar"></p>
                        </div>
                    </form>
                    <?php
                } elseif (!isset($_POST["enviar"])) {
                    $CPF = $_POST["txtCPF"];

                    $sql1 = "SELECT USU_CPF, USU_EMAIL, USU_USERNAME, USU_NOME, USU_SENHA
                      FROM usuario 
                      WHERE USU_CPF = $CPF";
                    $res = mysqli_query($conexao, $sql1);
                    if (mysqli_num_rows($res) == 0)
                        echo "<p align='center' style='color:white;'>USUÁRIO não encontrado</p>";
                    else {
                        echo "<p align='center' style='color:white;'>USUÁRIO encontrado</p>";
                        $registro = mysqli_fetch_row($res);
                        $CPF = $registro[0];
                        $EMAIL = $registro[1];
                        $USERNAME = $registro[2];
                        $NOME = $registro[3];
                        $SENHA = $registro[4];

                    }
                }
                ?>
                <fieldset>
                    <form method="POST" action="pagina_protegida1.php">
                        <br>
                        <div class="agrup">
                            <label>CPF...............:</label><input class="form-input" type="text" name="txtCPF"
                                value="<?php echo isset($CPF) ? $CPF : ''; ?>">
                            <input type="hidden" name="txtCPF_hidden"
                                value="<?php echo isset($CPF) ? $CPF : ''; ?>"><br>
                        </div>

                        <div class="agrup">
                            <label>Email............:</label><input class="form-input" type="text" name="txtEMAIL"
                                value="<?php echo isset($EMAIL) ? $EMAIL : ''; ?>">
                            <input type="hidden" name="txtCPF_hidden"
                                value="<?php echo isset($CPF) ? $CPF : ''; ?>"><br>
                        </div>

                        <div class="agrup">
                            <label>Username:</label><input class="form-input" type="text" name="txtUSERNAME"
                                value="<?php echo isset($USERNAME) ? $USERNAME : ''; ?>">
                            <input type="hidden" name="txtCPF_hidden"
                                value="<?php echo isset($CPF) ? $CPF : ''; ?>"><br>
                        </div>

                        <div class="agrup">
                            <label>Nome...........:</label><input class="form-input" type="text" name="txtNOME"
                                value="<?php echo isset($NOME) ? $NOME : ''; ?>">
                            <input type="hidden" name="txtCPF_hidden"
                                value="<?php echo isset($CPF) ? $CPF : ''; ?>"><br>
                        </div>

                        <div class="agrup">
                            <label>Senha..........:</label><input class="form-input" type="text" name="txtSENHA"
                                value="<?php echo isset($SENHA) ? $SENHA : ''; ?>">
                            <input type="hidden" name="txtCPF_hidden"
                                value="<?php echo isset($CPF) ? $CPF : ''; ?>"><br>
                        </div>
                        <br>

                    </form>
                </fieldset>
            </div>
        </div>
    </header>

</body>

</html>