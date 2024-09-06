<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION["usuario"])) {
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
            <a href="index.html">
                <img src="images/logo-removebg-preview.png">
            </a>
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
   require_once ("conexao.php");
   if(!isset($_POST["txtCPF"]))
    {
?>
            <form name="frmAlterar" method="POST" action="pagina_protegida.php">
    <p><label>Confirme seu CPF, para ver seus dados:</label>
    <br>
    <input class="form-input" type="text" name="txtCPF" size="20">
    <div class="btnfor">
    <input class="btn"type="submit" value="Verificar" name="verificar"></p>
    </div>
  </form>
<?php
    }
   elseif(!isset($_POST["enviar"])) 
          {
                      $CPF=$_POST["txtCPF"];

                      $sql1="SELECT U.USU_CPF, U.USU_USERNAME, U.USU_SENHA, U.USU_NOME, U.USU_EMAIL, P.PON_PONTOS 
                      FROM USUARIO U INNER JOIN PONTOS P
                      ON U.USU_CPF = P.USU_CPF
                      WHERE U.USU_CPF=$CPF";
                      $res=mysqli_query($conexao, $sql1);
                      if(mysqli_num_rows($res)==0)
                         echo "<p align='center' style='color:white;'>USUÁRIO não encontrado</p>";
                      else
                        { 
                                                 echo "<p align='center' style='color:white;'>USUÁRIO encontrado</p>";
                         $registro=mysqli_fetch_row($res);
                         $CPF=$registro[0];
                         $USERNAME=$registro[1];
                         $SENHA=$registro[2];
                         $NOME=$registro[3];
                         $EMAIL=$registro[4];
                         $PONTOS=$registro[5];
           
                        }
                      }
 ?>
 <fieldset>
<form method="POST" action="pagina_protegida.php">
    <br>
    <label>CPF...............:</label><input class="form-input" type="text" name="txtCPF" value="<?php echo isset($CPF) ? $CPF : ''; ?>">
    <input type="hidden" name="txtCPF_hidden" value="<?php echo isset($CPF) ? $CPF : ''; ?>"><br>

    <label>Username:</label><input class="form-input" type="text" name="txtUSERNAME" value="<?php echo isset($USERNAME) ? $USERNAME : ''; ?>">
    <input type="hidden" name="txtCPF_hidden" value="<?php echo isset($CPF) ? $CPF : ''; ?>"><br>

    <label>Senha..........:</label><input class="form-input" type="text" name="txtSENHA" value="<?php echo isset($SENHA) ? $SENHA : ''; ?>">
    <input type="hidden" name="txtCPF_hidden" value="<?php echo isset($CPF) ? $CPF : ''; ?>"><br>

    <label>Nome...........:</label><input class="form-input" type="text" name="txtNOME" value="<?php echo isset($NOME) ? $NOME : ''; ?>">
    <input type="hidden" name="txtCPF_hidden" value="<?php echo isset($CPF) ? $CPF : ''; ?>"><br>

    <label>Email............:</label><input class="form-input" type="text" name="txtEMAIL" value="<?php echo isset($EMAIL) ? $EMAIL : ''; ?>">
    <input type="hidden" name="txtCPF_hidden" value="<?php echo isset($CPF) ? $CPF : ''; ?>"><br>

    <label>Pontos.........:</label><input class="form-input" type="text" name="txtPONTOS" value="<?php echo isset($PONTOS) ? $PONTOS : ''; ?>">
    <input type="hidden" name="txtCPF_hidden" value="<?php echo isset($CPF) ? $CPF : ''; ?>"><br>
    <br>

</form>
  </fieldset>          
        </div>
        </div>
    </header>

    <section class="container">
        <section class="ranking">
        <h2 class="header">*SUA QUALIFICAÇÃO NO TOP RANKING DA ACADEMIA*</h2>
        <br>

        <div class="box">
            <fieldset>
            <br>
            <div align='center'>
                        <center>
                            <table border="10" cellpadding="0" cellspacing="0" width="90%">
                                <tr>
                                    <td width="25%" rgba(0, 0, 0, 0.8) align="center" >
                                        <p align="center"><b>
                                            <a> Colocação</a></b></td>
                                    <td width="25%" rgba(0, 0, 0, 0.8) align="center"><b>
            
                                        <a href="index.php?ordem=ACA_NOME">Nome</a></b></td>
                                    <td width="25%" rgba(0, 0, 0, 0.8) align="center"></b>
            
                                    <a href="index.php?ordem=ACA_PONTOS"> Pontos</a></b></td>
            </td>
            </tr>
            <?php
            
                require_once "conexao.php";
            
                    $ordem = 'PON_PONTOS';
                    $sql1 = "SELECT U.USU_NOME, P.PON_PONTOS 
                             FROM USUARIO U INNER JOIN PONTOS P
                             ON U.USU_CPF = P.USU_CPF
                             ORDER BY $ordem DESC";
                    $res = mysqli_query($conexao, "$sql1");
                    $contador = 1;
                    while($registro=mysqli_fetch_row($res))
                    {
                        if ($contador <= 5) {
                        $nome =$registro[0];
                        $pontos =$registro[1];
                        echo "<tr>";
                        echo "<td width='10%' style='padding-left: 5px; padding-right: 5px'>";
                        echo "<div style='text-align: center;'><p style='color: white;'>$contador</p></div>";
                        echo "</td>";
                        echo "<td align='center' width='25%' ><p style='color:white;'>$nome</p></td>";
                        echo "<td align='center' width='25%' ><p style='color:white;'>$pontos</p></td>";
                        echo "</tr>";
                        $contador++;
                        }
                        else {
                        break;
                        }
                        
                    }
                        mysqli_close($conexao)
                        ?>
            
            <?php
// Suponha que o ranking do usuário atual seja 7
$rankingUsuarioAtual = 0;

// Determinar a faixa de classificação dos usuários a serem selecionados
$rankAcima = $rankingUsuarioAtual - 2;
$rankAbaixo = $rankingUsuarioAtual + 2;

// Consulta SQL para selecionar os usuários dentro da faixa de classificação desejada
$sql = "SELECT U.USU_NOME, P.PON_PONTOS 
        FROM USUARIO U INNER JOIN PONTOS P
        ON U.USU_CPF = P.USU_CPF
        WHERE PON_PONTOS >= (
            SELECT PON_PONTOS FROM PONTOS WHERE USU_CPF = $rankingUsuarioAtual
        ) AND PON_PONTOS <= (
            SELECT PON_PONTOS FROM PONTOS WHERE USU_CPF = $rankAbaixo
        )
        ORDER BY PON_PONTOS DESC";

// Execute a consulta
$res = mysqli_query($conexao, $sql);

// Exibir os resultados na tabela HTML
while($registro = mysqli_fetch_assoc($res)) {
    $nome = $registro['USU_NOME'];
    $pontos = $registro['PON_PONTOS'];
    echo "<tr>";
    echo "<td align='center' width='25%' ><p style='color:white;'>$nome</p></td>";
    echo "<td align='center' width='25%' ><p style='color:white;'>$pontos</p></td>";
    echo "</tr>";
}

// Feche a conexão com o banco de dados
mysqli_close($conexao);
?>




                    </table>
                    </center>
                    </div>
                    <br>
            </fieldset>
            </div>
             </section>
</body>
</html>