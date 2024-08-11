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
        <sectio>
            
        <div class="row">
        <div class="product-card">
    <img src="https://images-americanas.b2w.io/produtos/4372567585/imagens/leite-uht-integral-piracanjuba-com-tampa-1l-kit-com-3-unidades/4372567585_1_xlarge.jpg" alt="Leite" height="300" width="300px" class="product-image">
    <strong class="product-title">Leite</strong>
    <p>Leite Piracanjuba 1L</p>
    <div class="product-price-container">
        <span class="product-price">R$ 5,00</span>
        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Leite', 5.00)">
            <img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon">
        </button>
        <p>Quantidade</p>
        <?php
        include_once ("../verificar/conexao.php");
        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["id"] == "1") {
                    echo "<span class='quantidadeProduto'>" . $row["quantidade"] . "</span>";
                }
            }
        }

        ?>
    </div>
</div>

<div class="product-card">
    <img src="https://img.sitemercado.com.br/produtos/094a5595ae58ec75e3364b751c947e3d7b50569c6aff537a03b007df9078ccfd_full.jpg" alt="BatGut" height="300" width="300px" class="product-image">
    <strong class="product-title">BatGut</strong>
    <p>Iogut Betânia 170g</p>
    <div class="product-price-container">
        <span class="product-price">R$ 5,00</span>
        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('BatGut', 5.00)">
            <img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon">
        </button>
        <p>Quantidade</p>
        <?php
        include_once ("../verificar/conexao.php");
        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["id"] == "2") {
                    echo "<span class='quantidadeProduto'>" . $row["quantidade"] . "</span>";
                }
            }
        }

        ?>
    </div>
</div>

<div class="product-card">
    <img src="https://www.pia.com.br/Uploads/produtos/produtos_29112019-170428_NATATRAD_300g_JUNTO.PNG" alt="Nata" height="300" width="300px" class="product-image">
    <strong class="product-title">Nata</strong>
    <p>Nata Pia 300g</p>
    <div class="product-price-container">
        <span class="product-price">R$ 5,00</span>
        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Nata', 5.00)">
            <img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon">
        </button>
        <p>Quantidade</p>
        <?php
        include_once ("../verificar/conexao.php");
        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["id"] == "3") {
                    echo "<span class='quantidadeProduto'>" . $row["quantidade"] . "</span>";
                }
            }
        }

        ?>
    </div>
</div>

<div class="product-card">
    <img src="https://img.sitemercado.com.br/produtos/d7434838209b98a3175c8d16b26495042ea3c16f90debae05b305ba4e2207a10_full.jpg" alt="Margarina" height="300" width="300px" class="product-image">
    <strong class="product-title">Margarina</strong>
    <p>Margarina Sabor Manteiga Delícia 500g</p>
    <div class="product-price-container">
        <span class="product-price">R$ 8,00</span>
        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Margarina', 8.00)">
            <img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon">
        </button>
        <p>Quantidade</p>
        <?php
        include_once ("../verificar/conexao.php");
        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["id"] == "4") {
                    echo "<span class='quantidadeProduto'>" . $row["quantidade"] . "</span>";
                }
            }
        }

        ?>
    </div>
</div>

<div class="product-card">
    <img src="https://mercantilnovaera.vtexassets.com/arquivos/ids/205228/Requeijao-Cremoso-NESTLE-Tradicional-Pote-200g.jpg?v=638145066563670000" alt="Requeijão" height="300" width="300px" class="product-image">
    <strong class="product-title">Requeijão</strong>
    <p>Requeijão Nestle 200g</p>
    <div class="product-price-container">
        <span class="product-price">R$ 5,00</span>
        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Requeijão', 5.00)">
            <img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon">
        </button>
        <p>Quantidade</p>
        <?php
        include_once ("../verificar/conexao.php");
        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["id"] == "5") {
                    echo "<span class='quantidadeProduto'>" . $row["quantidade"] . "</span>";
                }
            }
        }

        ?>
    </div>
</div>

<div class="product-card">
    <img src="https://img.sitemercado.com.br/produtos/094a5595ae58ec75e3364b751c947e3d7b50569c6aff537a03b007df9078ccfd_full.jpg" alt="BatGut" height="300" width="300px" class="product-image">
    <strong class="product-title">BatGut</strong>
    <p>Iogut Betânia 170g</p>
    <div class="product-price-container">
        <span class="product-price">R$ 5,00</span>
        <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('BatGut', 5.00)">
            <img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon">
        </button>
        <p>Quantidade</p>
        <?php
        include_once ("../verificar/conexao.php");
        $sql = "SELECT quantidade, id_duplicatas, id FROM produtos WHERE id_duplicatas = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["id"] == "6") {
                    echo "<span class='quantidadeProduto'>" . $row["quantidade"] . "</span>";
                }
            }
        }

        ?>
    </div>
</div>

</div>
</sectio>
</div>
        <footer>
            <p>&copy; Feito por Valter, Brena e VJ. Todos os direitos reservados.</p>
        </footer>
</body>

</html>
