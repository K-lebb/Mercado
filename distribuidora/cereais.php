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
            <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQOu5YiR5sq21CbDJv48ZECxg390X-GHICnf5dMIhhdUziFlNpp4yb4Fp0pss92ibgkU2i6vImi-5GqDvtU79NHBJSYB6dUcHIgXj3zFjIVmwG_3WDqXKdQ&usqp=CAE" alt="Produto 1" height="300" width="300px" class="product-image">
            <strong class="product-title">Arroz</strong>
            <p>Arroz Camil</p>
            <div class="product-price-container">
                <span class="product-price">R$ 5,00</span>
                <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Arroz', 5.00)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
            </div>
        </div>

        <div class="product-card">
            <img src="https://m.media-amazon.com/images/I/918HAtDR8vL._AC_UF1000,1000_QL80_DpWeblab_.jpg"  alt="Produto 1" height="300" width="300px" class="product-image">
            <strong class="product-title">Aveia</strong>
            <p>Aveia NESTLE</p>
            <div class="product-price-container">
                <span class="product-price">R$ 8,00</span>
                <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Aveia', 8.00)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
            </div>
        </div>

        <div class="product-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlaycbm_Ws0rsd1MGvyEyVLdwy37G0Q6f-Fw&s" alt="Produto 2" height="250px" width="250px" class="product-image">
            <strong class="product-title">Floco de Milho</strong>
            <p>Flocos de Milho Dona Clara</p>
            <div class="product-price-container">
                <span class="product-price">R$ 5,00</span>
                <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Flocos de Milho', 5.00)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
            </div>
        </div>

        <div class="product-card">
            <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ1VIMO32EcNP5MyQ0xhTKF3rYRGCyM_OSO_XpGRTcePP73JUao8E-NrM6ukvDK5l1vubXQvzCIMXja-yuV3hXoNUPCkLF816FksitvrK-L1jRjmzFokkbyxw&usqp=CAE" alt="Produto 3" height="300" width="300px" class="product-image">
            <strong class="product-title">Soja</strong>
            <p>Soja Vitao</p>
            <div class="product-price-container">
                <span class="product-price">R$ 12,00</span>
                <button type="button" class="button-hover-background" onclick="adicionarAoCarrinho('Cerveja', 12.00)"><img src="https://cdn-icons-png.flaticon.com/128/34/34627.png" alt="cart-icon"></button>
            </div>
        </div>

        

        </div>
    </div>
</section>

                            </div>
                        </div>
                        <!-- Adicione mais produtos aqui -->
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
