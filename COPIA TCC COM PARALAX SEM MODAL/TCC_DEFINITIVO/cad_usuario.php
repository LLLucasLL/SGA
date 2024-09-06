<?php
include('conexao.php');

    $CPF = $_POST['cpf'];
    $EMAIL = $_POST['email'];
    $USERNAME = $_POST['username'];
    $NOME = $_POST['nome'];
    $SENHA = $_POST['senha'];

    mysqli_query($conexao, " INSERT INTO USUARIO(USU_CPF, USU_EMAIL, USU_USERNAME,  USU_NOME, USU_SENHA)

 

VALUES ('$CPF', '$EMAIL', '$USERNAME', '$NOME', '$SENHA') ");
mysqli_close($conexao);

    ?>
      <p align="center"><a href="login.html">Voltar</a></p>
</body>
</html>