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
    <a href="home.php">Home</a>
    <a href="../index.php">Cadastro</a>
    <a href="sobre.php">Sobre</a>
    <a href="acesso.php">Acesso</a>
</nav>
        <section>

            <div class="row">
            <div class="product-card">
    <img src="https://th.bing.com/th/id/OIP.Qff2miUsmlz61_Qb5XXNFwHaHa?rs=1&pid=ImgDetMain" alt="Produto 1" height="300" width="300px" class="product-image">
    <strong class="product-title">Vinho</strong>
    <p>Vinho San Martin</p>
    <div class="product-price-container">
        <span class="product-price">R$ 87,00</span>
        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Vinho', 87.00)">
            <img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon">
        </button>
        <p>Quantidade</p>
        <?php
        include_once ("../verificar/conexao.php");
        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["id"] == "14") {
                    echo "<span class='quantidadeProduto'>" . $row["quantidade"] . "</span>";
                }
            }
        }

        ?>
    </div>
</div>

<div class="product-card">
    <img src="https://superprix.vteximg.com.br/arquivos/ids/177082-600-600/Bebida-Mista-Smirnoff-Ice-275ml.png?v=636559378268330000" alt="Produto 1" height="300" width="300px" class="product-image">
    <strong class="product-title">Smirnoff</strong>
    <p>Smirnoff Ice original</p>
    <div class="product-price-container">
        <span class="product-price">R$ 12,00</span>
        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Smirnoff', 12.00)">
            <img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon">
        </button>
        <p>Quantidade</p>
        <?php
        include_once ("../verificar/conexao.php");
        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["id"] == "15") {
                    echo "<span class='quantidadeProduto'>" . $row["quantidade"] . "</span>";
                }
            }
        }

        ?>
    </div>
</div>

<div class="product-card">
    <img src="https://mercantilatacado.vtexassets.com/arquivos/ids/168398-800-auto?v=638337771562830000&width=800&height=auto&aspect=true" alt="Produto 2" height="300" width="300px" class="product-image">
    <strong class="product-title">Vodka</strong>
    <p>Vodka Bolvana</p>
    <div class="product-price-container">
        <span class="product-price">R$ 25,00</span>
        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Vodka', 25.00)">
            <img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon">
        </button>
        <p>Quantidade</p>
        <?php
        include_once ("../verificar/conexao.php");
        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["id"] == "16") {
                    echo "<span class='quantidadeProduto'>" . $row["quantidade"] . "</span>";
                }
            }
        }

        ?>
    </div>
</div>

<div class="product-card">
    <img src="https://static.paodeacucar.com/img/uploads/1/691/24572691.jpg" alt="Produto 3" height="300" width="300px" class="product-image">
    <strong class="product-title">Cerveja</strong>
    <p>Cerveja Ypioca</p>
    <div class="product-price-container">
        <span class="product-price">R$ 8,00</span>
        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Cerveja', 8.00)">
            <img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon">
        </button>
        <p>Quantidade</p>
        <?php
        include_once ("../verificar/conexao.php");
        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["id"] == "17") {
                    echo "<span class='quantidadeProduto'>" . $row["quantidade"] . "</span>";
                }
            }
        }

        ?>
    </div>
</div>

<div class="product-card">
    <img src="https://images.tcdn.com.br/img/img_prod/1115696/whisky_johnnie_walker_red_label_escoces_1l_283_1_a060462289c22109d7d2c25d1b6d5514.jpg" alt="Produto 3" height="300" width="300px" class="product-image">
    <strong class="product-title">Cachaça</strong>
    <p>Cachaça Black Label</p>
    <div class="product-price-container">
        <span class="product-price">R$ 15,00</span>
        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Cachaça', 15.00)">
            <img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon">
        </button>
        <p>Quantidade</p>
        <?php
        include_once ("../verificar/conexao.php");
        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["id"] == "18") {
                    echo "<span class='quantidadeProduto'>" . $row["quantidade"] . "</span>";
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