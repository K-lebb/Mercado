<?php

include 'conexao.php';

// Receber dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consulta SQL para verificar se já existe um registro com o mesmo email
$sql = "SELECT * FROM funcionarios WHERE nome = '$nome' AND email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

// Verificar se há algum resultado
if ($result->num_rows > 0) {
    echo "Já existe";

// Redirecionamento para a outra página
sleep(3);
    header("Location: ../gerente/quadro.php");
    exit();

}

// Fechar a conexão com o banco de dados
$conn->close();

?>
