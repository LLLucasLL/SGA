<?php
include('conexao.php');

$CPF = $_POST['cpf'];
$EMAIL = $_POST['email'];
$SENHA = $_POST['senha'];
$NIVEL = $_POST['nivel'];

mysqli_query($conexao, " INSERT INTO ADM(ADM_CPF, ADM_EMAIL, ADM_SENHA, ADM_NIVEL)

 

VALUES ('$CPF', '$EMAIL', '$SENHA', '$NIVEL') ");
mysqli_close($conexao);

?>
<p align="center"><a href="index.php">Voltar</a></p>
</body>

</html>