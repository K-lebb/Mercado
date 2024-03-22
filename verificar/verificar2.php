<?php

include 'conexao.php';

// Receber dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consulta SQL para verificar se já existe um registro com o mesmo nome, email e senha
$sql = "SELECT * FROM clientes WHERE email = '$email'";
$result = $conn->query($sql);

// Verificar se há algum resultado
if ($result->num_rows > 0) {
    echo "Já existe, você não pode criar ";

} else {

echo $nome, $senha, $email;

//criar banco de dados
$servername = "localhost";
$username = "root";
$password = "mint";
$dbname = "dis";

// Query SQL para inserção de dados
$sql = "INSERT INTO clientes (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

// Fecha a conexão
$conn->close();

}


// Fechar a conexão com o banco de dados
$conn->close();

?>
