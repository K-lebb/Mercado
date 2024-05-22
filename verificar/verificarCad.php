<?php
include_once 'conexao.php';

// Receber dados do formulário
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

// Consulta SQL para verificar se já existe um registro com o mesmo email
$sql = "SELECT * FROM clientes WHERE email = '$email'";
$result = $conn->query($sql);

// Verificar se há algum resultado
if ($result->num_rows > 0) {
    echo "Já existe um registro com este email.";
    header("refresh:3; url=../distribuidora/home.php");
} else {
    $sql = "INSERT INTO clientes (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if ($conn->query($sql) === TRUE) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . $conn->error;
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
