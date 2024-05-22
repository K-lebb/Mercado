<html><style>
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
    </html>
    
<?php
include '../verificar/conexao.php';

// Função para exibir os produtos mais vendidos
function produtosMaisVendidos($conn) {
    $sql = "SELECT titulo, SUM(vendas) AS vendas FROM produtos GROUP BY titulo ORDER BY vendas DESC LIMIT 1000";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Produtos Mais Vendidos</h2>";
        echo "<table border='1'><tr><th>Produto</th><th>Quantidade Vendida</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row["titulo"]) . "</td><td>" . htmlspecialchars($row["vendas"]) . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }
}
function produtosMaisLucro($conn) {
    $sql = "SELECT titulo, SUM(preco - custo) AS lucro FROM produtos GROUP BY titulo ORDER BY lucro DESC LIMIT 1000";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Produtos com Mais Lucro</h2>";
        echo "<table border='1'><tr><th>Produto</th><th>Lucro</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row["titulo"]) . "</td><td>" . htmlspecialchars($row["lucro"]) . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }
}


// Função para exibir o cliente que mais compra
function clienteMaisCompras($conn) {
    $sql = "SELECT nome, SUM(faturas) AS faturas FROM clientes GROUP BY nome ORDER BY faturas DESC LIMIT 1000";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Produtos Mais Vendidos</h2>";
        echo "<table border='1'><tr><th>Produto</th><th>Quantidade Vendida</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row["nome"]) . "</td><td>" . htmlspecialchars($row["faturas"]) . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }
}

function IdadeMaisCompras($conn) {
    // Corrigir a consulta SQL para selecionar idade, nome e faturas corretamente
    $sql = "SELECT nome, idade, faturas FROM clientes ORDER BY idade DESC LIMIT 1000";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Idades dos Usuários com Mais Compras</h2>";
        echo "<table border='1'><tr><th>Nome</th><th>Idade</th><th>Faturas</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row["nome"]) . "</td><td>" . htmlspecialchars($row["idade"]) . "</td><td>" . htmlspecialchars($row["faturas"]) . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }
}


// Processar o formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $report_type = $_POST['report_type'];

    // Executar a consulta correspondente ao tipo de relatório solicitado
    if ($report_type == 'produtos_mais_vendidos') {
        produtosMaisVendidos($conn);
    } elseif ($report_type == 'produto_mais_lucro') {
        produtosMaisLucro($conn);
     }  elseif ($report_type == 'idade_mais_compras') {
        IdadeMaisCompras($conn);
    } elseif ($report_type == 'cliente_mais_compras') {
        clienteMaisCompras($conn);
     } else {
        echo "Tipo de relatório inválido.";
    }
}

// Fechar a conexão
$conn->close();
?>
