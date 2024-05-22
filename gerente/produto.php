<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="produto.php" method="post">
        <input class="flip-card__input" name="titulo" placeholder="Nome" type="text"> <br>
        <input class="flip-card__input" name="preco" placeholder="Preço" type="text"> <br>
        <input class="flip-card__input" name="familia" placeholder="Família" type="text"> <br>
        <input class="flip-card__input" name="custo" placeholder="Custo" type="text"> <br>
        <input class="flip-card__input" name="quantidade" placeholder="Quantidade" type="number"> <br>
        <input class="flip-card__input" name="vendas" placeholder="Vendas" type="number"> <br>
        <button type="submit">Vamos lá!</button>
    </form>
</body>
</html>

<?php
include '../verificar/conexao.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect POST data and sanitize it
    $titulo = htmlspecialchars($_POST['titulo']);
    $preco = htmlspecialchars($_POST['preco']);
    $familia = htmlspecialchars($_POST['familia']);
    $custo = htmlspecialchars($_POST['custo']);
    $quantidade = htmlspecialchars($_POST['quantidade']);
    $vendas = htmlspecialchars($_POST['vendas']);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO `produtos` (`titulo`, `id_duplicatas`, `preco`, `familia`, `custo`, `quantidade`, `vendas`) VALUES (?, '5', ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssii", $titulo, $preco, $familia, $custo, $quantidade, $vendas);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registro inserido com sucesso!";
        echo $titulo, $preco, $familia, $custo;
    } else {
        echo "Erro ao inserir registro: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
