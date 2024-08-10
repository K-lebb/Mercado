<?php
include_once ("../verificar/conexao.php");
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
                    <img src="https://comercial-favero.s3.amazonaws.com/media/uploads/produto/carne_moida_premium_1f0d4739-30eb-4575-9173-7e9169313d20.jpg"
                        alt="Produto 1" height="200" width="200px" class="product-image">
                    <strong class="product-title">Carne Moida</strong>
                    <p>O quilo</p>
                    <div class="product-price-container">
                        <span class="product-price">R$ 27,00</span>
                        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Carne moida', 27.00)"><img
                                src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button> <br>

                                <p>Quantidade</p>
                        <?php
                        include_once ("../verificar/conexao.php");
                        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 2";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                if ($row["id"] == "13") {
                                    echo "<span class='quantidadePrduto'>" . $row["quantidade"] . "</span>";
                                }
                            }
                        }
                        ?>

                    </div>
                </div>

                <div class="product-card">
                    <img src="https://th.bing.com/th/id/OIP.gytjNuZmNuZrLC2l-FEH7AHaHa?w=176&h=180&c=7&r=0&o=5&pid=1.7"
                        alt="Produto 1" height="300" width="300px" class="product-image">
                    <strong class="product-title">Cupim</strong>
                    <p>O quilo</p>
                    <div class="product-price-container">
                        <span class="product-price">R$ 36,00</span>
                        <button type="button" class="button-hover-background"
                            onclick="adicionarAoCarrinho('Cupim', 36.00)"><img
                                src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>

                         <p>Quantidade</p>

                        <?php
                        include_once ("../verificar/conexao.php");
                        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 2";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                if ($row["id"] == "16") {
                                    echo "<span class='quantidadePrduto'>" . $row["quantidade"] . "</span>";
                                }
                            }
                        }
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

                                <p>Quantidade</p>

                        <?php
                        include_once ("../verificar/conexao.php");
                        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 2";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                if ($row["id"] == "14") {
                                    echo "<span class='quantidadePrduto'>" . $row["quantidade"] . "</span>";
                                }
                            }
                        }
                        ?>
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

                                <p>Quantidade</p>

                        <?php
                        include_once ("../verificar/conexao.php");
                        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 2";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                if ($row["id"] == "15") {
                                    echo "<span class='quantidadePrduto'>" . $row["quantidade"] . "</span>";
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <p>&copy; Feito por Valter, Brena e VJ. Todos os direitos reservados.</p>
        </footer>
</body>

</html>