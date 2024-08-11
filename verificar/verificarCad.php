<?php
include_once 'conexao.php';

// Receber dados do formulário
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

try {
    // Consulta SQL para verificar se já existe um registro com o mesmo email
    $sql = "SELECT * FROM clientes WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Já existe um registro com este email.";
        
        ?>
        <html>
            <form action="../index.php" method="post">
                <input type="submit" value="voltar">
            </form>
        </html>

        <?php
        
    } else {
        // Inserir o registro na tabela
        $sql = "INSERT INTO clientes (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        if ($conn->query($sql) === TRUE) {
            echo "Registro inserido com sucesso!";

            ?>
            <html>
            <form action="../index.php" method="post">
                <input type="submit" value="voltar">
            </form>
        </html>

        <?php
        } else {
            echo "Erro ao inserir registro: " . $conn->error;
        }
    }
} catch (Exception $e) {
    echo "Erro inesperado: " . $e->getMessage();
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
