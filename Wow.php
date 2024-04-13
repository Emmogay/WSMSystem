<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recebedados</title>
</head>
<body>
<?php
$conexao = mysqli_connect("localhost", "root", "", "wsmsystem");

if (!$conexao) {
    echo"Nao conectou";
}
echo"viado conectou mt";

$cpf = $_POST['cpf'];
$cpf = mysqli_real_escape_string($conexao, $cpf);
$sql = "SELECT cpf from diretor' where cpf = '$cpf'";
$retorno = mysqli_query($conexao, $sql);

if(mysqli_num_rows($retorno) > 0) {
    echo"ja cadastrado<br>";
}
else {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data = $_POST['data'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO diretor(cpf, nome, data_nasc, email, senha) VALUES ('$cpf', '$nome', '$data', '$email', '$senha')";
    $result = mysqli_query($conexao, $sql);
    echo"usuario cadastrado";
}



?>   
</body>
</html>