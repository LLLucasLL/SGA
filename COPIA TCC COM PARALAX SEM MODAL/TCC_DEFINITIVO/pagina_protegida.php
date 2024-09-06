﻿<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION["ADM_EMAIL"])) {
    header("Location: pagina_protegida.php");
    exit();
}


//Verificar o nível de acesso (1 neste exemplo)
$nivel_acesso = $_SESSION["ADM_NIVEL"];
if ($nivel_acesso == 0 or $nivel_acesso == 2) {
    // Redirecionar para uma página de acesso negado ou fazer algo apropriado
    echo "Acesso negado!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">-->
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard </title>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            <i class='bx bx-code-alt'></i>
            <div class="logo-name"><span>S.G.A</span></div>
        </a>
        <ul class="side-menu">
            <li class="active"><a href="pagina_protegida.php"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li><a href="analcy.html"><i class='bx bx-analyse'></i>Análises</a></li>
            <li><a href="U_create.php"><i class='bx bx-group'></i>Create</a></li>
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
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Dashboard
                            </a></li>
                        /
                        <li><a href="#" class="active">Adm</a></li>
                    </ul>
                </div>
                <a href="#" class="report">
                    <i class='bx bx-cloud-download'></i>
                    <span>Download CSV</span>
                </a>
            </div>

            <!-- Insights -->
            <ul class="insights">
                <li>
                    <i class='bx bx-calendar-check'></i>
                    <span class="info">
                        <h3>
                            588
                        </h3>
                        <p>Animais Adotados</p>
                    </span>
                </li>

                <li>
                    <i class='bx bx-calendar-check'></i>
                    <span class="info">
                        <h3>
                            1.074
                        </h3>
                        <p>Animais com Apadrinhamento</p>
                    </span>
                </li>

                <li><i class='bx bx-show-alt'></i>
                    <span class="info">
                        <h3>
                            3.944
                        </h3>
                        <p>Total de Visitas</p>
                    </span>
                </li>
                <li><i class='bx bx-line-chart'></i>
                    <span class="info">
                        <h3>
                            8.757
                        </h3>
                        <p>Pesquisas
                        </p>
                    </span>
                </li>
                <li><i class='bx bx-dollar-circle'></i>
                    <span class="info">
                        <h3>
                            R$6.742
                        </h3>
                        <p>Total Acumulado</p>
                    </span>
                </li>
            </ul>
            <!-- End of Insights -->

            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Animais</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Animal</th>
                                <th>Data</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="images/1.png">
                                    <p>Afrodite</p>
                                </td>
                                <td>13-06-2024</td>
                                <td><span class="status completed">Adotado</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="images/gatinho.jpg">
                                    <p>Kiki</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status pending">Apadrinhado</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="images/spike.jpg">
                                    <p>Spike</p>
                                </td>
                                <td>30-01-2022</td>
                                <td><span class="status process">Pendente</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Reminders -->
                <div class="reminders">
                    <div class="header">
                        <i class='bx bx-note'></i>
                        <h3>Lembretes</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-plus'></i>
                    </div>
                    <ul class="task-list">
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Parceria Itaú</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Parceria Cobasi</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="not-completed">
                            <div class="task-title">
                                <i class='bx bx-x-circle'></i>
                                <p>Parceria CAIXA</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                    </ul>
                </div>

                <!-- End of Reminders-->

            </div>

        </main>

    </div>

    <script src="index.js"></script>
</body>

</html>