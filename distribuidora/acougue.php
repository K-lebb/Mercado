<?php
include_once ("verificar/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado Online</title>
   <link rel="stylesheet" href="../css/site.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/34/34627.png" type="image/png">
    <script async src="carrinho.js"></script>
</head>

<body>
    <header>
        <h1>Supermercado Online</h1>
        <div class="dropdown" id="cart">
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></a>
            <div class="dropdown-content" id="cart-content">
                <h2 class="selection-title">Carrinho</h2>
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th class="table-head-item first-col">item</th>
                            <th class="table-head-item second-col">preço</th>
                        </tr>
                    </thead>
                    <tbody id="cart-items">
                        <!-- Itens do carrinho serão adicionados aqui -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" class="cart-total-container">
                                <strong>Total</strong>
                                <span id="total"></span>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <button type="button" class="purchase-button" onclick="limparCarrinho()">Limpar Carrinho</button>
            </div>
        </div>
    </header>
    <div class="container">
    <nav>

<div class="dropdown">
    <a href="#">Produtos</a>
    <div class="dropdown-content">
        <a href="bebidas.php">Bebidas</a>
        <a href="acougue.php">Açougue</a>
        <a href="cereais.php">Cereais</a>
        <a href="enlatados.php">Enlatados</a>
        <a href="higiene.php">Higiene</a>
        <a href="hortifruti.php">Hortifrúti</a>
        <a href="laticinios.php">Laticíneos</a>
        <a href="doces.php">Doces</a>
    </div>
</div>
    <a href="../index.php">Cadastro</a>
    <a href="sobre.php">Sobre</a>
    <a href="acesso.php">Acesso</a>
</nav>
        <section>

            <div class="row">
                <div class="product-card">
                    <img src="https://apoioentrega.vteximg.com.br/arquivos/ids/498626/CARNE-MOIDA-TUDBOM-500G-PC-CONG.png?v=637807800359500000"
                        alt="Produto 1" height="300" width="300px" class="product-image">
                    <strong class="product-title">Carne Moida</strong>
                    <p>O quilo</p>
                    <div class="product-price-container">
                        <span class="product-price">R$ 27,00</span>
                        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Carne moida', 27.00)"><img
                                src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button> <br>
                        <?php
                        include_once ("verificar/conexao.php");
                        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 1";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                if ($row["id"] == "1") {
                                    echo "<span class='quantidadePrduto'>" . $row["quantidade"] . "</span>";
                                }
                            }
                        }

                        // Fecha a conexão com o banco de dados
                        $conn->close();

                        ?>
                    </div>
                </div>

                <div class="product-card">
                    <img src="data:image/jpeg;base64,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"
                        alt="Produto 1" height="300" width="300px" class="product-image">
                    <strong class="product-title">Cupim</strong>
                    <p>O quilo</p>
                    <div class="product-price-container">
                        <span class="product-price">R$ 36,00</span>
                        <button type="button" class="button-hover-background"
                            onclick="adicionarAoCarrinho('Cupim', 36.00)"><img
                                src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
                        <?php
                            

                        ?>
                    </div>

                </div>

                <div class="product-card">
                    <img src="https://static.paodeacucar.com/img/uploads/1/112/24853112.jpg" alt="Produto 2"
                        height="300" width="300px" class="product-image">
                    <strong class="product-title">Costela Suína</strong>
                    <p>O quilo</p>
                    <div class="product-price-container">
                        <span class="product-price">R$ 30,00</span>
                        <button type="button" class="button-hover-background"
                            onclick="adicionarAoCarrinho('Costela suína', 30.00)"><img
                                src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://swiftbr.vteximg.com.br/arquivos/ids/179702-768-768/medalhao-swift-mais-kg-618874-3.jpg?v=637739862117830000"
                        alt="Produto 3" height="300" width="300px" class="product-image">
                    <strong class="product-title">Picanha</strong>
                    <p>O quilo</p>
                    <div class="product-price-container">
                        <span class="product-price">R$ 48,00</span>
                        <button type="button" class="button-hover-background"
                            onclick="adicionarAoCarrinho('Picanha', 48.00)"><img
                                src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <p>&copy; Feito por Valter, Brena e VJ. Todos os direitos reservados.</p>
        </footer>
</body>

</html>