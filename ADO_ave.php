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

// Ajustar a consulta SQL para filtrar apenas cachorros
$sql = "SELECT * FROM animais WHERE tipo_animal = 'Ave'";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <script src="janela.js" defer></script>

    <title>Animais</title>
</head>

<body>
    <nav class="dp-menu">
        <div class="nav-logo">
            <a href="index.html">
                <img src="images/logo 1.png">
            </a>
        </div>

        <ul class="nav-links">
            <li class="link"><a href="index.html">Home</a></li>
            <li class="link"><a href="resgate.html">Notícias</a></li>
            <li class="link"><a href="ADO_cachorro.php">Animais</a></li>
            <li class="link"><a href="castracao.html">Castração</a></li>
            <li class="link"><a href="doacao.html">Doação</a></li>
            <li class="link"><a href="quem_somos.html">Quem Somos</a>
                <ul>
                    <li><a href="feedback.html" style="color: #ffffff">Feedbacks</a></li>
                </ul>
            </li>
        </ul>
        <a class="btn" href="login.html">Login</a>
    </nav>








    <header class="container">

        <div class="content">
            <span class="blur"></span>
            <span class="blur"></span>
            <span class="blur"></span>
            <span class="blur"></span>
            <span class="blur"></span>
            <span class="blur"></span>
            <span class="blur"></span>
            <!--Mexer no Texto-->
            <h1>Adoção e Apadrinhamento</h1>
            <p>
                Estamos muito felizes de ter você aqui! Seu apoio é essencial para continuarmos resgatando, reabilitando
                e encontrando lares cheios de amor para esses patudinhos! </p>
            <p>
                A adoção e o apadrinhamento são atos de amor que transforma todas as vidas ao redor. Aqui você conhecerá a história de vida
                dos nossos resgatados que receberam tratamentos e cuidados no nosso hospital veterinário e agora
                aguardam pelo seu final feliz, a adoção!
            </p>
        </div>
        <div class="image">
            <!--Criar uma div para o table e colocar uma altura e espaço para a imagem-->
            <table width=500px height=200px alight="left">
                <tr>
                    <td style="padding: none; max-width: 150px; max-height: 70px;"> <img src="images/pp1.jpg"></td>
                    <td style="padding: none; max-width: 150px; max-height: 70px;"> <img src="images/pc1.jpg"></td>
                    <td style="padding: none; max-width: 150px; max-height: 70px;"> <img src="images/pg1.jpeg"></td>
                </tr>
                <tr>
                    <td style="padding: none; max-width: 150px; max-height: 70px;"> <img src="images/pg2.jpeg"></td>
                    <td style="padding: none; max-width: 150px; max-height: 70px;"> <img src="images/pp2.jpg"></td>
                    <td style="padding: none; max-width: 150px; max-height: 70px;"> <img src="images/pc2.jpg"></td>
                </tr>
                <tr>
                    <td style="padding: none; max-width: 150px; max-height: 70px;"> <img src="images/pc11.png"></td>
                    <td style="padding: none; max-width: 150px; max-height: 70px;"> <img src="images/pg3.jpg"></td>
                    <td style="padding: none; max-width: 150px; max-height: 70px;"> <img src="images/pp3.jpg"></td>
                </tr>
            </table>
        </div>
    </header>

    <nav>
        <ul class="nav-links">
            <li class="link" style="padding-left: 30%;"><a href="ADO_cachorro.php">Cachorro</a></li>
            <li class="link"><a href="ADO_gato.php">Gato</a></li>
            <li class="link"><a href="ADO_cavalo.php">Cavalo</a></li>
            <li class="link"><a href="ADO_ave.php">Ave</a></li>
            <li class="link"><a href="ADO_coelho.php">Coelho</a></li>
            <li class="link"><a href="ADO_diversos.php">Animais diversos</a></li>
            <div id="search-container">
                <input type="text" id="search-box" placeholder="Digite aqui...">
                <div id="suggestions"></div>
            </div>

            <script>
                const searchBox = document.getElementById('search-box');
                const suggestionsContainer = document.getElementById('suggestions');

                // Resultados pré-registrados (pode ser obtido de uma API)
                const resultadosPreRegistrados = [{
                        nome: "Cachorro",
                        url: "castracao.html"
                    },
                    {
                        nome: "Gato",
                        url: "2gato.html"
                    },
                    {
                        nome: "Cavalo",
                        url: "2cavalo.html"
                    },
                    {
                        nome: "Ave",
                        url: "2ave.html"
                    },
                    {
                        nome: "Coelho",
                        url: "2.coelho.html"
                    },
                    {
                        nome: "Animais Diversos",
                        url: "2diversos.html"
                    }
                ];

                // Função para exibir sugestões
                function showSuggestions() {
                    const inputValue = searchBox.value.toLowerCase();
                    const suggestions = resultadosPreRegistrados.filter(resultado => resultado.nome.toLowerCase()
                        .startsWith(inputValue));
                    suggestionsContainer.innerHTML = '';
                    suggestions.forEach(suggestion => {
                        const suggestionElement = document.createElement('div');
                        suggestionElement.classList.add('suggestion');
                        suggestionElement.textContent = suggestion.nome;
                        suggestionElement.addEventListener('click', () => {
                            // Redireciona para a página do resultado
                            window.open(suggestion.url, '_blank');
                        });
                        suggestionsContainer.appendChild(suggestionElement);
                    });
                    // Verifica se o campo de pesquisa está vazio
                    if (inputValue === '') {
                        suggestionsContainer.style.display = 'none';
                    } else {
                        suggestionsContainer.style.display = suggestions.length ? 'block' : 'none';
                    }
                }

                // Evento de digitação na caixa de pesquisa
                searchBox.addEventListener('input', showSuggestions);
                // Evento de perda de foco na caixa de pesquisa
                searchBox.addEventListener('blur', () => {
                    suggestionsContainer.style.display = 'none';
                });
            </script>
        </ul>
    </nav>


    <section class="bloco">








    <div class="frame" style="grid-template-columns: repeat(4, 1fr);">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = htmlspecialchars($row['id']);
                $nome = htmlspecialchars($row['nome']);
                $sexo = htmlspecialchars($row['sexo']);
                $descricao = htmlspecialchars($row['descricao']);
                $ong = htmlspecialchars($row['ong']);
                $foto = $row['foto'] ? './uploads/' . $row['foto'] : './uploads/default.png';
                $data_cadastro = date('d/m/Y', strtotime($row['data_cadastro']));

                echo "
                <div class='item-frame'>
                    <div class='img-frame'>
                        <img src='$foto' alt='Imagem do animal'>
                    </div>

                    <div class='body-frame'>
                        <div class='overlay'></div>

                        <div class='event-info'>
                            <p class='title'>$nome</p>
                            <div class='separator'></div>
                            <p class='informacao'>$sexo</p>
                            <p class='desc'>Desde: $data_cadastro no abrigo</p>

                            <div class='additional-info'>
                                <p class='desc'>
                                    <i class='fas fa-map-marker-alt'></i>
                                    Sem raça definida
                                </p>
                                <!--<p class='desc'>
                                    <i class='far fa-calendar-alt'></i>
                                    3 anos de idade
                                </p>-->

                                <p class='info description'>
                                    $descricao
                                </p>

                                <p class='desc'>
                                    ID do animal: $id
                                </p>
                                
                                <p class='desc'>
                                    ONG: $ong
                                </p>
                            </div>
                        </div>
                            <a class='frame_action' id='open-modal' href='formulario.html' >Entre em contato</a>
                    </div>
                </div>";
            }
        } else {
            echo "<p>Nenhum animal encontrado para a seleção.</p>";
        }

        $conn->close();
        ?>
    </div>



                        <!--<div class='button_container'>
                            <button class='frame_action' id='open-modal'>Minha história</button>
                            <button class='frame_action' id='adopt-button'>Adotar</button>
                        </div>-->

    </section>

    <footer class="rodape">
        <div class="column">
            <div class="logo">
                <img src="images/logo 1.png">
            </div>

            <div class="socials">
                <a href="https://www.facebook.com"><i class="ri-facebook-line"></i></a>
                <a href="https://www.instagram.com"><i class="ri-instagram-line"></i></a>
                <a href="https://www.twitter.com"><i class="ri-twitter-line"></i></a>
            </div>
        </div>

        <div class="column">
            <h4>Navegue</h4>
            <a href="index.html">Home</a>
            <a href="resgate.html">Notícias</a>
            <a href="ADO_cachorro.php">Animais</a>
            <a href="castracao.html">Castração</a>
            <a href="doacao.html">Doação</a>
            <a href="quem_somos.html">Quem Somos</a>
            <a href="feedback.html">Feedback</a>

        </div>
        <div class="column">
            <h4>Horário de Funcionamento:</h4>
            <p>Seg. -> Sex. <br>
                7:00 à 20:00</p>

            <p>Sáb. -> Dom <br>
                7:00 à 12:00</p>

        </div>
        <div class="column">
            <h4>Contatos</h4>
            <p>(12)99565 - 0260<br>
                (12)3526 - 8079</p>
            <p>SGA@gmail.com</p>
        </div>
    </footer>

    <div class="copyright">
        Copyright © 2024 Lucas Lima, Mota, João Pedro Jesus. Todos os direitos Reservados.
    </div>


    <script src="script.js"></script>
    <script src="script01.js"></script>

</body>

</html>