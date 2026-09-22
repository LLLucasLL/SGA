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

// Buscar todos os animais cadastrados
$sql = "SELECT * FROM animais";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">-->
    <link rel="stylesheet" href="dashboard.css">
    <title>List</title>

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
            <li><a href="A_update.php"><i class='bx bxs-user-detail'></i>Update</a></li>
            <li><a href="A_delete.php"><i class='bx bx-x-circle'></i>Delete</a></li>
            <li class="active"><a href="A_list.php"><i class='bx bx-receipt'></i>List</a></li>
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
                    <h1>List</h1>
                </div>
            </div>


            <!-- End of Insights -->

            <div class="bottom-data">


                <div class="orders">
                <div class="container">
    <h2>Lista de Animais Cadastrados</h2>
    <br>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Descrição</th>
            <th>Tipo de animal</th>
            <th>ONG</th>
            <th>Foto</th>
            <th>Data de Cadastro</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            // Exibir os dados de cada linha
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
                echo "<td>" . htmlspecialchars($row['sexo']) . "</td>";
                echo "<td class='descricao'>" . htmlspecialchars($row['descricao']) . "</td>";
                echo "<td>" . htmlspecialchars($row['tipo_animal']) . "</td>";
                echo "<td>" . htmlspecialchars($row['ong']) . "</td>";
                
                // Exibir a imagem, caso exista
                if ($row['foto']) {
                    echo "<td><img src='uploads/" . $row['foto'] . "' alt='Foto do animal'></td>";
                } else {
                    echo "<td>Sem foto</td>";
                }
                
                echo "<td>" . $row['data_cadastro'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum animal cadastrado</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</div>
                            </center>





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