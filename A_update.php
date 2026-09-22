<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">-->
    <link rel="stylesheet" href="dashboard.css">
    <title>Update</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            <i class='bx bx-code-alt'></i>
            <div class="logo-name"><span>S.G.A</span></div>
        </a>
        <ul class="side-menu">
        <li><a href="A_create.html"><i class='bx bxs-dog'></i>Create</a></li>
            <li class="active"><a href="A_update.php"><i class='bx bxs-user-detail'></i>Update</a></li>
            <li><a href="A_delete.php"><i class='bx bx-x-circle'></i>Delete</a></li>
            <li><a href="A_list.php"><i class='bx bx-receipt'></i>List</a></li>
            <br>
            <br>
            <li><a href="A_ado_apdr.php"><i class='bx bxs-file-find'></i>Adoc./Apad.</a></li>
            <br>
            <li><a href="pagina_protegida.html"><i class='bx bx-group'></i>Usuários</a></li>
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
                    <h1>Update</h1>
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
                                                <h2>Atualizar</h2>
                                                <?php
                                                require_once("conexao.php");
                                                if (!isset($_POST["txtID"])) {
                                                    ?>
                                                    <form name="frmAlterar" method="POST" action="A_update.php">
                                                        <br>
                                                        <br>
                                                        <p><label>ID do animal:</label>
                                                            <br>
                                                            <br>
                                                            <input type="text" name="txtID" size="20">
                                                            <br>
                                                            <br>
                                                        <div class="btnfor">
                                                            <input type="submit" value="Alterar animal" name="alterar"></p>
                                                        </div>
                                                    </form>
                                                    <?php
                                                } elseif (!isset($_POST["enviar"])) //busca dados do usuário
                                                {
                                                    $ID = $_POST["txtID"];
                                                    $sql1 = "SELECT * FROM animais where id=$ID";
                                                    $res = mysqli_query($conexao, $sql1);
                                                    if (mysqli_num_rows($res) == 0) {
                                                        echo "<br>";
                                                        echo "<p align='center' style='color:black;'>Animal não encontrado!</p>";
                                                        echo "<br>";
                                                    } else {
                                                        echo "<br>";
                                                        echo "<p align='center' style='color:black;'>Animal encontrado!</p>";
                                                        $registro = mysqli_fetch_row($res);
                                                        $ID = trim($registro[0]);
                                                        $NOME = trim($registro[1]);
                                                        $SEXO = trim($registro[2]);
                                                        $DESCRICAO = trim($registro[3]);
                                                        $FOTO = trim($registro[4]);
                                                        $TIPO = trim($registro[5]);
                                                        $DATA = trim($registro[6]);
                                                        $ONG = trim($registro[7]);

                                                        ?>
                                                        <form method="POST" action="A_update.php">
                                                            <br>

                                                            <p align='center' style='color:black;'>ID:<b><?php echo "<p align='center' 
		 style='color:black;'>$ID</p>"; ?> </p></b><br><br>

                                                            <div class="agrup">
                                                                <label>Nome:</label><input type="text" name="txtNOME" value="
  <?php echo $NOME; ?>">
                                                                <input type="hidden" name="txtID"
                                                                    value="<?php echo $ID; ?>"><br>
                                                            </div>

                                                            <div class="agrup">
                                                                <label>Sexo:</label><input type="text" name="txtSEXO"
                                                                    value="
  <?php echo $SEXO; ?>">
                                                                <input type="hidden" name="txtID"
                                                                    value="<?php echo $ID; ?>"><br>
                                                            </div>

                                                            <div class="agrup">
                                                                <label>Descrição:</label><input type="text" name="txtDESCRICAO" value="
  <?php echo $DESCRICAO; ?>">
                                                                <input type="hidden" name="txtID"
                                                                    value="<?php echo $ID; ?>"><br>
                                                            </div>

                                                            <!--<div class="agrup">
                                                                <label>Foto:</label><input type="file" name="txtFOTO" value="
  <?php //echo $FOTO; ?>">
                                                                <input type="hidden" name="txtID"
                                                                    value="<?php //echo $ID; ?>"><br>
                                                            </div>-->

                                                            <div class="agrup">
                                                                <label>Tipo:</label><input type="text" name="txtTIPO" value="
  <?php echo $TIPO; ?>">
                                                                <input type="hidden" name="txtID"
                                                                    value="<?php echo $ID; ?>"><br>
                                                            </div>

                                                            <div class="agrup">
                                                                <label>ONG:</label><input type="text" name="txtONG" value="
  <?php echo $ONG; ?>">
                                                                <input type="hidden" name="txtID"
                                                                    value="<?php echo $ONG; ?>"><br>
                                                            </div>

                                                            <div class="agrup">
                                                                <label>Data:</label><input type="text" name="txtDATA" value="
  <?php echo $DATA; ?>">
                                                                <input type="hidden" name="txtID"
                                                                    value="<?php echo $ID; ?>"><br>
                                                            </div>
                                                            <br>


                                                            <div class="btnfor">
                                                                <center>
                                                                    <input type="hidden" name="enviar" value="S">
                                                                    <input type="submit" value="Alterar Dados" name="Alterar">
                                                                    </p>
                                                                </center>
                                                            </div>

                                                        </form>
                                                        <?php
                                                        mysqli_close($conexao);
                                                    }
                                                } else //alterar dados do usuário
                                                {
                                                    $ID = trim($_POST["txtID"]);
                                                    $NOME = trim($_POST["txtNOME"]);
                                                    $SEXO = trim($_POST["txtSEXO"]);
                                                    $DESCRICAO = trim($_POST["txtDESCRICAO"]);
                                                    //$FOTO = $_POST["txtFOTO"];
                                                    $TIPO = trim($_POST["txtTIPO"]);
                                                    $DATA = trim($_POST["txtDATA"]);
                                                    $ONG = trim($_POST["txtONG"]);
                                                    $sql = "UPDATE animais SET nome='$NOME', sexo='$SEXO', descricao='$DESCRICAO', tipo_animal='$TIPO', data_cadastro='$DATA', ong='$ONG' WHERE id = $ID";
                                                    //$sql = "UPDATE animais SET nome='$NOME', sexo='$SEXO', descricao='$DESCRICAO', tipo_animal='$TIPO', data_cadastro='$DATA' WHERE id = $ID";
                                                    $res2 = mysqli_query($conexao, "$sql");
                                                    if (mysqli_affected_rows($conexao) == 1) {
                                                        echo "<p align='center' style='color: black;'> Animal alterado com sucesso!</p>";
                                                    } else {
                                                        $erro = mysqli_error($conexao);
                                                        echo "<p align='center' style='color: black;'> Erro:$erro</p>";
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