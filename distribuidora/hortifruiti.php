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
    <a href="hortifruiti.php">Hortifrúti</a>
    <a href="laticinios.php">Laticíneos</a>
    <a href="doces.php">Doces</a>
    </div>
</div>
    <a href="home.php">Home</a>
    <a href="../index.php">Cadastro</a>
    <a href="sobre.php">Sobre</a>
    <a href="acesso.php">Acesso</a>
</nav>
        <>
            
        <div class="product-table">
    <div class="product-row">
        <div class="row">
        <div class="product-card">
    <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQDUL2vs9QG3mZtWttJZXtbkcTrWTHwSYzs02cE6qxx27PquZxor-EuIOT55_XdRZyIxiBOIzun1V1MMBJ8ptek-_e2Zj_YFdZixuZO0OvFCvN5m35927Dp&usqp=CAE" alt="Mandioca" height="300" width="300px" class="product-image">
    <strong class="product-title">Mandioca</strong>
    <p>Mandioca Orgânica</p>
    <div class="product-price-container">
        <span class="product-price">R$ 6,00</span>/KG
        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Mandioca', 6.00)">
            <img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon">
        </button>
        <p>Quantidade</p>
        <?php
        include_once ("../verificar/conexao.php");
        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 5";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["id"] == "33") {
                    echo "<span class='quantidadeProduto'>" . $row["quantidade"] . "</span>";
                }
            }
        }

        ?>
    </div>
</div>

<div class="product-card">
    <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQeqziiW_65hfYjGc6v_Nc8RLcO5gOhDSl5OwyqQ9rk_053LFMAzee_1Y8IqBiSrE6jjw-DUpxct8E8SBxd1UtP3P7Z-Y4lclZY8ovHuFAk1V7gMzRoVtmY&usqp=CAE" alt="Tomate" height="300" width="300px" class="product-image">
    <strong class="product-title">Tomate</strong>
    <p>Tomates Vermelhos Grandes</p>
    <div class="product-price-container">
        <span class="product-price">R$ 9,00</span>/KG
        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Tomate', 9.00)">
            <img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon">
        </button>
        <p>Quantidade</p>
        <?php
        include_once ("../verificar/conexao.php");
        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 5";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["id"] == "32") {
                    echo "<span class='quantidadeProduto'>" . $row["quantidade"] . "</span>";
                }
            }
        }

        ?>
    </div>
</div>

<div class="product-card">
    <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQ4fX-wOZ0rSmnri_--UGuokt282OSc2TzUrMcdbZN44-pMOge5cdPXKAE9B5nsyxwPlYklRVBjmJZmOZrD7tngjjf2DDiCN5UWj5L3H0hMvl6Rrq1x4uEl&usqp=CAE" alt="Cebola Branca" height="300" width="300px" class="product-image">
    <strong class="product-title">Cebola Branca</strong>
    <p>Cebola Branca Grande</p>
    <div class="product-price-container">
        <span class="product-price">R$ 10,00</span>/kg
        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Cebola Branca', 10.00)">
            <img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon">
        </button>
        <p>Quantidade</p>
        <?php
        include_once ("../verificar/conexao.php");
        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 5";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["id"] == "34") {
                    echo "<span class='quantidadeProduto'>" . $row["quantidade"] . "</span>";
                }
            }
        }

        ?>
    </div>
</div>

<div class="product-card">
    <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcShfhtcdKIcaINgsGMkSLqRjCgWeH2mXmQNEq7Wrm6h6hx8MF0K7rY6pCqZ_Qjt8A3dgfaVua-Bfw0u_tLzw9rtqBpw1PojN_J-koiUP36Fe73M-GNiiRlPbA&usqp=CAE" alt="Alho" height="300" width="300px" class="product-image">
    <strong class="product-title">Alho</strong>
    <p>Alhos Grandes</p>
    <div class="product-price-container">
        <span class="product-price">R$ 10,00</span>/KG
        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Alho', 10.00)">
            <img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon">
        </button>
        <p>Quantidade</p>
        <?php
        include_once ("../verificar/conexao.php");
        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 5";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["id"] == "35") {
                    echo "<span class='quantidadeProduto'>" . $row["quantidade"] . "</span>";
                }
            }
        }

        ?>
    </div>
</div>

<div class="product-card">
    <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTdVPypuCpeV1CfORxDJUhmdetvkECv1fxMfk_oPoeubOVRmYmm_ghyWyGCP6s1CAGSfXfLlqqhIqBxV_xI_ILQpTBuGaATL6HzqGZRjBvD7Sy4Zc2Xc-eU&usqp=CAE" alt="Alface" height="300" width="300px" class="product-image">
    <strong class="product-title">Alface</strong>
    <p>Alface Verde</p>
    <div class="product-price-container">
        <span class="product-price">R$ 4,00</span>/KG
        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Alface', 4.00)">
            <img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon">
        </button>
        <p>Quantidade</p>
        <?php
        include_once ("../verificar/conexao.php");
        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 5";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["id"] == "37") {
                    echo "<span class='quantidadeProduto'>" . $row["quantidade"] . "</span>";
                }
            }
        }

        ?>
    </div>
</div>
</div>
</div>
</div>

</section>
        <footer>
            <p>&copy; Feito por Valter, Brena e VJ. Todos os direitos reservados.</p>
        </footer>
</body>

</html>



