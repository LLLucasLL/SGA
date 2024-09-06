<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">-->
    <link rel="stylesheet" href="dashboard.css">
    <title>Create </title>
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
            <li class="active"><a href="U_create.php"><i class='bx bx-group'></i>Create</a></li>
            <li><a href="U_read.php"><i class='bx bx-spreadsheet'></i>Read</a></li>
            <li><a href="U_update.php"><i class='bx bxs-user-detail'></i>Update</a></li>
            <li><a href="U_delete.php"><i class='bx bx-x-circle'></i>Delete</a></li>
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
                    <h1>Create</h1>
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
                                                <h2>Incluir</h2>
                                                <form method="post" action="cad_usuario.php">

                                                    <br>

                                                    <label for="inc_CPF">CPF:</label>
                                                    <br>
                                                    <input style="padding-left: 5px;" type="number" id="cpf"
                                                        name="cpf" /><br />
                                                    <br>

                                                    <label for="inc_email">Email:</label>
                                                    <br>
                                                    <input style="padding-left: 5px;" type="email" id="email"
                                                        name="email" /><br />
                                                    <br>

                                                    <label for="inc_user">Username:</label>
                                                    <br>
                                                    <input style="padding-left: 5px;" type="text" id="username"
                                                        name="username" /><br />
                                                    <br>

                                                    <label for="inc_nom">Nome:</label>
                                                    <br>
                                                    <input style="padding-left: 5px;" type="text" id="nom"
                                                        name="nome" /><br />

                                                    <br>
                                                    <label for="inc_senha">Senha:</label>
                                                    <br>
                                                    <input style="padding-left: 5px;" type="password" id="senha"
                                                        name="senha" /> <br />
                                                    <br>
                                                    <br>


                                                    <div class="btnfor">
                                                        <input type="submit" value="Enviar" name="submit" />
                                                    </div>
                                                </form>
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