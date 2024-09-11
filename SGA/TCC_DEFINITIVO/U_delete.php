<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">-->
    <link rel="stylesheet" href="dashboard.css">
    <title>Delete</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            <i class='bx bx-code-alt'></i>
            <div class="logo-name"><span>S.G.A</span></div>
        </a>
        <ul class="side-menu">
            <li><a href="pagina_protegida.php"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li><a href="analcy.html"><i class='bx bx-analyse'></i>Análises</a></li>
            <li><a href="U_create.php"><i class='bx bx-group'></i>Create</a></li>
            <li><a href="U_read.php"><i class='bx bx-spreadsheet'></i>Read</a></li>
            <li><a href="U_update.php"><i class='bx bxs-user-detail'></i>Update</a></li>
            <li class="active"><a href="U_delete.php"><i class='bx bx-x-circle'></i>Delete</a></li>
            <li><a href="U_list.php"><i class='bx bx-receipt'></i>List</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="logout.php" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <a href="#" class="notif">
                <i class='bx bx-bell'></i>
                <span class="count">12</span>
            </a>
            <a href="#" class="profile">
                <img src="images/logo.png">
            </a>
        </nav>

        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    <h1>Delete</h1>
                </div>
            </div>


            <!-- End of Insights -->

            <div class="bottom-data">


                <div class="orders">
                    <table>

                        <tbody>

                            <center>
                                <div class="chartt">
                                    <div class="box">
                                        <center>
                                            <fieldset>
                                                <h2>Deletar</h2>
                                                <?php
                                                require_once("conexao.php");
                                                if (!isset($_POST["txtCPF"])) {
                                                    ?>
                                                    <form name="frmExcluir" method="POST" action="U_delete.php">
                                                        <br>
                                                        <br>
                                                        <label>CPF do Usuário:</label>
                                                        <br>
                                                        <br>
                                                        <input type="text" name="txtCPF" size="20">
                                                        <br>
                                                        <br>
                                                        <div class="btnfor">
                                                            <!---->
                                                            <input type="submit" value="Excluir" name="excluir"></p>
                                                        </div>
                                                    </form>

                                                    <?php
                                                } elseif (!isset($_POST["enviar"])) // "excluir" duvida busca dados do produto
                                                {
                                                    $CPF = $_POST["txtCPF"];
                                                    $sql1 = "SELECT * FROM usuario WHERE USU_CPF=$CPF";
                                                    $res = mysqli_query($conexao, $sql1);
                                                    if (mysqli_num_rows($res) == 0) {
                                                        echo "<br>";
                                                        echo "<p align='center' style='color:black;'>Usuário não encontrado!</p>";
                                                        echo "<br>";
                                                    } else {
                                                        echo "<br>";
                                                        echo "<p align='center' style='color:black;'>Usuario encontrado!</p>";
                                                        $registro = mysqli_fetch_row($res);
                                                        $CPF = $registro[0];
                                                        $EMAIL = $registro[1];
                                                        $USERNAME = $registro[2];
                                                        $NOME = $registro[3];
                                                        $SENHA = $registro[4];

                                                        ?>
                                                        <form method="POST" action="U_delete.php">
                                                            <br>

                                                            <p align='center' style='color:black;'>CPF:<b><?php echo "<p align='center' 
		 style='color:black;'>$CPF</p>"; ?> </p></b><br><br>

                                                            <div class="agrup">
                                                                <label>Nome:</label>
                                                                <span><?php echo "<p style='color:black;'>$NOME</p>"; ?></span>
                                                            </div>

                                                            <div class="agrup">
                                                                <label>Username:</label>
                                                                <span><?php echo "<p style='color:black;'>$USERNAME</p>"; ?></span>
                                                            </div>

                                                            <div class="agrup">
                                                                <label>Email:</label>
                                                                <span><?php echo "<p style='color:black;'>$EMAIL</p>"; ?></span>
                                                            </div>

                                                            <div class="agrup">
                                                                <label>Senha:</label>
                                                                <span><?php echo "<p style='color:black;'>$SENHA</p>"; ?></span>
                                                            </div>
                                                            <br>

                                                            <div class="btnfor">
                                                                <center>
                                                                    <input type="hidden" name="enviar" value="S">
                                                                    <input type="submit" value="Confirmar exclusão do Usuário"
                                                                        name="excluir">
                                                                </center>
                                                            </div>
                                                            <br>
                                                        </form>
                                                        <?php
                                                        mysqli_close($conexao);
                                                    }
                                                } else // excluir produto
                                                {
                                                    $CPF = $_POST["txtCPF"];
                                                    $NOME = $_POST["txtNome"];
                                                    $USERNAME = $_POST["txtUsername"];
                                                    $EMAIL = $_POST["txtEmail"];
                                                    $SENHA = $_POST["txtSenha"];
                                                    $sql = "DELETE * FROM usuario WHERE USU_CPF=$CPF";
                                                    $res2 = mysqli_query($conexao, $sql);
                                                    if (mysqli_affected_rows($conexao) == 1) {
                                                        echo "<p align='center' style='color:black;'>Usuário excluido com sucesso!</p>";
                                                    } else {
                                                        $erro = mysqli_error($conexao);
                                                        echo "<p align='center' style='color: black;'>Erro:$erro</p>";
                                                    }
                                                    mysqli_close($conexao);
                                                }
                                                ?>
                                            </fieldset>
                                        </center>
                                    </div>











                                </div>

                            </center>
                        </tbody>
                    </table>
                </div>

                <!-- End of Reminders-->

            </div>

        </main>

    </div>

    <script src="index.js"></script>
</body>

</html>