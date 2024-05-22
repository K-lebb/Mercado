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
            <a href="home.php">Home</a>
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
                <a href="../index.php">Cadastro</a>
                <a href="#">Sobre Nós</a>
        </nav>
        <section>
        <div class="product-table">
    <div class="product-row">
        <div class="row">
            <div class="product-card">
                <img src="https://images-americanas.b2w.io/produtos/01/00/img3/402530/9/40253083_1GG.jpg" alt="Produto 1" height="300" width="300px" class="product-image">
                <strong class="product-title">Sabonete</strong>
                <p>Sabonete Lux</p>
                <div class="product-price-container">
                    <span class="product-price">R$ 2,50</span>
                    <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Sabonete', 2.50)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
                </div>
            </div>
            <div class="product-card">
                <img src="https://images-americanas.b2w.io/produtos/01/00/img3/43580885/9/4358088588_1GG.jpg" alt="Produto 1" height="300" width="300px" class="product-image">
                <strong class="product-title">Shampoo</strong>
                <p>Shampoo Dove</p>
                <div class="product-price-container">
                    <span class="product-price">R$ 20,00</span>
                    <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Shampoo', 20.00)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
                </div>
            </div>
            <div class="product-card">
                <img src="https://images-americanas.b2w.io/produtos/01/00/img3/302332/9/30233289_1GG.jpg" alt="Produto 1" height="300" width="300px" class="product-image">
                <strong class="product-title">Condicionador</strong>
                <p>Condicionador Dove</p>
                <div class="product-price-container">
                    <span class="product-price">R$ 14,00</span>
                    <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Condicionador', 14.00)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
                </div>
            </div>
            <div class="product-card">
                <img src="https://images-americanas.b2w.io/produtos/01/00/img/27952/6/27952668_1GG.jpg" alt="Produto 1" height="300" width="300px" class="product-image">
                <strong class="product-title">Escova de Dentes</strong>
                <p>Escova de Dentes Colgate</p>
                <div class="product-price-container">
                    <span class="product-price">R$ 12,00</span>
                    <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Escova de Dentes', 12.00)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button >
                </div>
            </div>
            <div class="product-card">
                <img src="https://images-americanas.b2w.io/produtos/6017599208/imagens/kit-2-papel-higienico-noble-neutro-folha-dupla-12-rolos-de-20m-cada/6017599208_1_large.jpg" alt="Produto 1" height="300" width="300px" class="product-image">
                <strong class="product-title">Papel Higiênico</strong>
                <p>Papel Higiênico Noble</p>
                <div class="product-price-container">
                    <span class="product-price">R$ 8,00</span>
                    <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Papel Higiênico', 8.00)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
                </div>
            </div>
            <div class="product-card">
                <img src="https://images-americanas.b2w.io/produtos/01/00/img3/233187/9/23318775_1GG.jpg" alt="Produto 1" height="300" width="300px" class="product-image">
                <strong class="product-title">Produto 1</strong>
                <p>Descrição do Produto 1.</p>
                <div class="product-price-container">
                    <span class="product-price">R$ 10,00</span>
                    <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Vinho', 87.00)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
                </div>
            </div>
                

    </div>
</div>
    <footer>
        <p>&copy; Feito por Valter, Brena e VJ. Todos os direitos reservados.</p>
    </footer>
</body>
</html>


