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
        <section>
    <div class="row">
        <div class="product-card">
            <img src="https://images-americanas.b2w.io/produtos/1611356495/imagens/sardinhas-c-molho-de-tomate-125g-gdc/1611356495_1_xlarge.jpg" alt="Produto 1" height="300" width="300px" class="product-image">
            <strong class="product-title">Sardinha</strong>
            <p>Sardinha Gomes da Costa</p>
            <div class="product-price-container">
                <span class="product-price">R$ 5,00</span>
                <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Sardinha', 5.00)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
            </div>
        </div>

        <div class="product-card">
            <img src="https://images-americanas.b2w.io/produtos/1611357375/imagens/atum-solido-em-oleo-170g-gdc/1611357375_1_xlarge.jpg"  alt="Produto 1" height="300" width="300px" class="product-image">
            <strong class="product-title">Atum</strong>
            <p>Atum Gomes da Costa</p>
            <div class="product-price-container">
                <span class="product-price">R$ 10,00</span>
                <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Atum', 10.00)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
            </div>
        </div>

        <div class="product-card">
            <img src="https://images-americanas.b2w.io/produtos/7460468695/imagens/carne-bovina-fiambre-bordon-lata-320g/7460468695_1_xlarge.jpg" alt="Produto 2" height="250" width="200px" class="product-image">
            <strong class="product-title">Carne de Lata</strong>
            <p>Carne de Lata Bordon</p>
            <div class="product-price-container">
                <span class="product-price">R$ 8,00</span>
                <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Carne de Lata', 8.00)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
            </div>
        </div>

        <div class="product-card">
            <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSKv2MEccmVLQQx3jUUxfxWZsHa8YzcDXrW0S8OoLtvOdKpFCBi2xmVTcSbRMvHxjJvLYF7W3vQcHvb22lMKNZ5soaUuDZF0EpBEOPF9Owa&usqp=CAE" alt="Produto 3" height="250" width="250px" class="product-image">
            <strong class="product-title">Feijoada na Lata</strong>
            <p>Feijoada na Lata Bprdon</p>
            <div class="product-price-container">
                <span class="product-price">R$ 9,00</span>
                <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Feijoada na Lata', 9.00)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
            </div>
        </div>

        <div class="product-card">
            <img src="https://http2.mlstatic.com/D_NQ_NP_912156-MLB71753957350_092023-O.webp" alt="Produto 3" height="250" width="250px" class="product-image">
            <strong class="product-title">Almondegas</strong>
            <p>Almondegas Oderich</p>
            <div class="product-price-container">
                <span class="product-price">R$ 10,00</span>
                <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Almondegas', 10.00)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
            </div>
        </div>
    </div>
</section>
    </div>
    <footer>
        <p>&copy; Feito por Valter, Brena e VJ. Todos os direitos reservados.</p>
    </footer>
</body>
</html>