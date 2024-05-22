<?php
include_once("../verificar/conexao.php");

// Lógica de exclusão de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
    $id_to_delete = $_POST['delete_id'];
    
    // Preparar declaração para evitar SQL injection
    $stmt = $conn->prepare("DELETE FROM clientes WHERE id = ?");
    $stmt->bind_param("i", $id_to_delete);

    if ($stmt->execute()) {
        echo "Registro excluído com sucesso!";
        $stmt->close();
        $conn->close();
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Erro ao excluir o registro: " . $conn->error;
    }
}

// Exibir tabela
$sql = "SELECT id, nome, email FROM clientes";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição de Usuários</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Lista de Usuários</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Excluir</th>
        <th>Alterar</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nome']}</td>
                    <td>{$row['email']}</td>
                    <td>
                        <form method='POST' style='display:inline-block;'>
                            <input type='hidden' name='delete_id' value='{$row['id']}'>
                            <button type='submit'>Excluir</button>
                        </form>
                    </td>
                    <td><button type='submit'> <a href='alterarClientes.php?id={$row['id']}'>Alterar</a> </button> </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Nenhum resultado encontrado.</td></tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html>
