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
        <a href="hortifruiti.php">Higiene</a>
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
                <div class="row"><div class="product-card">
                <img src="https://mercado.carrefour.com.br/_next/image?url=https%3A%2F%2Fcarrefourbrfood.vtexassets.com%2Farquivos%2Fids%2F137794491%2Fovo-de-pascoa-lacta-barbie-166g-1.jpg%3Fv%3D638436930632070000&w=384&q=75" alt="Produto 1" height="300" width="300px" class="product-image">
                <strong class="product-title">Ovo de Páscoa Lacta Barbie</strong>
                <p>166g</p>
                <div class="product-price-container">
                    <span class=product-price>R$ 69,49</span>
                    <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Ovo de Pascoa Barbie', 69.49)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
                </div>
            </div>
            <div class="product-card">
                <img src="https://mercado.carrefour.com.br/_next/image?url=https%3A%2F%2Fcarrefourbrfood.vtexassets.com%2Farquivos%2Fids%2F137794507%2Fovo-de-pascoa-lacta-hotwheels-166g-1.jpg%3Fv%3D638436931353230000&w=384&q=75" alt="Produto 1" height="300" width="300px" class="product-image">
                <strong class="product-title">Ovo de Páscoa Lacta Hotwheels</strong>
                <p>166g</p>
                <div class="product-price-container">
                    <span class=product-price>R$ 69,90</span>
                    <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Ovo de Páscoa Hotwheels', 69.90)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
                </div>
            </div>
            <div class="product-card">
                <img src="https://mercado.carrefour.com.br/_next/image?url=https%3A%2F%2Fcarrefourbrfood.vtexassets.com%2Farquivos%2Fids%2F137794495%2Fovo-de-pascoa-lacta-favoritos-560g-1.jpg%3Fv%3D638436930821830000&w=384&q=75" alt="Produto 1" height="300" width="300px" class="product-image">
                <strong class="product-title">Ovo de Páscoa Lacta Favoritos</strong>
                <p>560g</p>
                <div class="product-price-container">
                    <span class=product-price>R$ 87,90</span>
                    <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Ovo de Páscoa Favoritos', 87.90)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
                </div>
            </div>
            <div class="product-card">
                <img src="https://mercado.carrefour.com.br/_next/image?url=https%3A%2F%2Fcarrefourbrfood.vtexassets.com%2Farquivos%2Fids%2F137796506%2Fovo-de-pascoa-lacta-batman-166g-1.jpg%3Fv%3D638436941884170000&w=384&q=75" alt="Produto 1" height="300" width="300px" class="product-image">
                <strong class="product-title">Ovo de Páscoa Lacta Batman</strong>
                <p>166g</p>
                <div class="product-price-container">
                    <span class=product-price>R$ 69,90</span>
                    <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Ovo de Páscoa Batman', 69.90)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
                </div>
            </div>
            <div class="product-card">
                <img src="https://mercado.carrefour.com.br/_next/image?url=https%3A%2F%2Fcarrefourbrfood.vtexassets.com%2Farquivos%2Fids%2F137796550%2Fovo-de-pascoa-bis-ao-leite-318g-1.jpg%3Fv%3D638436942751630000&w=384&q=75" alt="Produto 1" height="300" width="300px" class="product-image">
                <strong class="product-title">Ovo de Páscoa Bis ao Leite</strong>
                <p>318g</p>
                <div class="product-price-container">
                    <span class=product-price>R$ 56,99</span>
                    <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Ovo de Páscoa Bis ao Leite', 56.99)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
                </div>
            </div>
            <div class="product-card">
                <img src="https://mercado.carrefour.com.br/_next/image?url=https%3A%2F%2Fcarrefourbrfood.vtexassets.com%2Farquivos%2Fids%2F137796495%2Fovo-de-pascoa-diamante-negro-laka-500g-1.jpg%3Fv%3D638436941791170000&w=384&q=75" alt="Produto 1" height="300" width="300px" class="product-image">
                <strong class="product-title">Ovo de Páscoa Diamante Negro Laka</strong>
                <p>500g</p>
                <div class="product-price-container">
                    <span class=product-price>R$ 99,90</span>
                    <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Ovo de Páscoa Diamante Negro', 99.90)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
                </div>
            </div></div>
            </section>
    </div>
    <footer>
        <p>&copy; Feito por Valter, Brena e VJ. Todos os direitos reservados.</p>
    </footer>
</body>
</html>


