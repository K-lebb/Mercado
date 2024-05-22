<?php
include_once("../verificar/conexao.php");

// Verifica se o ID do registro foi passado na URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta o registro no banco de dados
    $stmt = $conn->prepare("SELECT * FROM clientes WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Registro não encontrado.";
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Prepara a declaração SQL de atualização
    $stmt = $conn->prepare("UPDATE clientes SET nome = ?, email = ?, senha = ? WHERE id = ?");
    $stmt->bind_param("sssi", $nome, $email, $senha, $id);

    if ($stmt->execute()) {
        echo "Registro atualizado com sucesso.";
        header('Location: clientes.php');
        exit();
    } else {
        echo "Erro ao atualizar registro: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Usuário</title>
    <link rel="stylesheet" href="../css/site.css">
</head>
<body>
    <header>
        <div class="main-title">
            <h1>Supermercado Online</h1>
        </div>
    </header>
    <div class="container">
        <nav>
            <a href="home.php">Home</a>
            <a href="../index.php">Cadastro</a>
        </nav>
        <section>
            <form action="alterarClientes.php" method="post">
                <input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : ''; ?>">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php echo isset($row['nome']) ? $row['nome'] : ''; ?>" required><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>" required><br><br>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required><br><br>
                <input type="submit" value="Atualizar">
            </form>
        </section>
    </div>
    <footer>
        <p>&copy; Feito por Valter, Brena e VJ. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
