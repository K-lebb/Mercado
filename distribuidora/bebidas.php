<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #26a500;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .container {
            display: flex;
        }
        nav {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: left;
            width: 350px;
            height: 149vh;
        }
        nav a {
            text-decoration: none;
            color: #333;
            display: block;
            padding: 5px 10px;
        }
        nav a:hover {
            background-color: #26a500;
            color: #fff;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f8f9fa;
            min-width: 160px;
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 5px 9px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #26a500;
            color: #fff;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        section {
            padding: 10px;
            display: table;
            width: 200%;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .product-card {
            display: table-cell;
            border: 1px solid #ddd;
            border-radius: 1px;
            height: 300px; /* diminui a linha */
            width: 290x;
            margin: 1px;
            padding: 10px;
            text-align: center;
        }
        .product-card img {
            width: ;
            width: 100%;
            border-radius: 1px;
        }

        .product-table {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            border-spacing: 2px; /* Espaçamento entre as células */
        }
        
                 /* Estilo para cada linha da tabela */
        .product-row {
            display: table-row;
        }
        .row {
            padding-bottom: 10px; /* Adiciona espaço entre as linhas */
            margin-bottom: 10px; /* Adiciona espaço entre as linhas */
        }


        footer {
            background-color: #26a500;
            color: #fff;
            padding: 10px;
            text-align: center;
            width: 100%;
            position: fixed;
            bottom: 0;
        }
        @media only screen and (max-width: 600px) {
            .container {
                flex-direction: column;
            }
            nav {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Supermercado Online</h1>
    </header>
    <div class="container">
        <nav>
            <a href="http://localhost/distribuidora/home.php">Home</a>
            <div class="dropdown">
                <a href="#">Produtos</a>
                <div class="dropdown-content">
                    <a href="http://localhost/distribuidora/bebidas.php">Bebidas</a>
                    <a href="http://localhost/distribuidora/açougue.php">Açougue</a>
                    <a href="http://localhost/distribuidora/cereais.php">Cereais</a>
                    <a href="http://localhost/distribuidora/enlatados.php">Enlatados</a>
                    <a href="http://localhost/distribuidora/higiene.php">Higiene</a>
                    <a href="http://localhost/distribuidora/hortifruti.php">Hortifrúti</a>
                    <a href="http://localhost/distribuidora/laticinios.php">Laticíneos</a>
                </div>
            </div>
                <a href="#">Ofertas</a>
                <a href="#">Contato</a>
        </nav>
        <section>
            <div class="product-table">
                <div class="product-row">
                    <div class="row"><div class="product-card">
                <img src="https://dcdn.mitiendanube.com/stores/001/258/076/products/e0cbc478a082be51826440f3dd493836awsaccesskeyidakiatclmsgfx4j7tu445expires1681697264signaturezbpqaxhw1fux7gl550wwjfdlgh03d-68203856d44a427f3716791052729105-640-0." alt="Produto 1" height="300" width="300px" >
                <h3>Vinho</h3>
                <p>Vinho San Martin 750ml</p>
                <p>R$ 87,00</p>
            </div>
            <div class="product-card">
                <img src="https://superprix.vteximg.com.br/arquivos/ids/177082-600-600/Bebida-Mista-Smirnoff-Ice-275ml.png?v=636559378268330000" alt="Produto 1" height="300" width="300px">
                <h3>Smirnoff</h3>
                <p>Smirnoff Ice 750ml</p>
                <p>R$ 12,00</p>
            </div>
            <div class="product-card">
                <img src="https://mercantilatacado.vtexassets.com/arquivos/ids/168398-800-auto?v=638337771562830000&width=800&height=auto&aspect=true" alt="Produto 1" height="300" width="300px">
                <h3>Vodka</h3>
                <p>Vodka Bolvana 1L</p>
                <p>R$ 25,00</p>
            </div>
            <div class="product-card">
                <img src="https://dcdn.mitiendanube.com/stores/001/043/122/products/cerveja-skol-300-ml1-f1321ec8d2f3b8a05615676911719089-640-0.jpg" alt="Produto 1" height="300" width="300px">
                <h3>Skol Cerveja</h3>
                <p>Cerveja Skol 350ml</p>
                <p>R$ 8,00</p>
            </div>
            <div class="product-card">
                <img src="https://static.paodeacucar.com/img/uploads/1/691/24572691.jpg" alt="Produto 1" height="300" width="300px">
                <h3>Cachaça</h3>
                <p>Cachaça Ypióca 1L</p>
                <p>R$ 15,00</p>
            </div>
            <div class="product-card">
                <img src="https://images.tcdn.com.br/img/img_prod/1115696/whisky_johnnie_walker_red_label_escoces_1l_283_1_a060462289c22109d7d2c25d1b6d5514.jpg" alt="Produto 1" height="300" width="300px">
                <h3>Whisky Black Label</h3>
                <p>Whisky Balck Label 1L</p>
                <p>R$ 10,00</p>
            </div></div>
            <div class="row"><div class="product-card">
                <img src="https://via.placeholder.com/300" alt="Produto 2">
                <h3>Produto 2</h3>
                <p>Descrição do Produto 2.</p>
                <p>R$ 15,00</p>
            </div>
             <div class="product-card">
                <img src="https://via.placeholder.com/300" alt="Produto 3">
                <h3>Produto 3</h3>
                <p>Descrição do Produto 3.</p>
                <p>R$ 20,00</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/300" alt="Produto 3">
                <h3>Produto 3</h3>
                <p>Descrição do Produto 3.</p>
                <p>R$ 20,00</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/300" alt="Produto 3">
                <h3>Produto 3</h3>
                <p>Descrição do Produto 3.</p>
                <p>R$ 20,00</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/300" alt="Produto 3">
                <h3>Produto 3</h3>
                <p>Descrição do Produto 3.</p>
                <p>R$ 20,00</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/300" alt="Produto 3">
                <h3>Produto 3</h3>
                <p>Descrição do Produto 3.</p>
                <p>R$ 20,00</p>
            </div></div>
            <div class="row"><div class="product-card">
                <img src="https://via.placeholder.com/300" alt="Produto 2">
                <h3>Produto 2</h3>
                <p>Descrição do Produto 2.</p>
                <p>R$ 15,00</p>
            </div>
             <div class="product-card">
                <img src="https://via.placeholder.com/300" alt="Produto 3">
                <h3>Produto 3</h3>
                <p>Descrição do Produto 3.</p>
                <p>R$ 20,00</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/300" alt="Produto 3">
                <h3>Produto 3</h3>
                <p>Descrição do Produto 3.</p>
                <p>R$ 20,00</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/300" alt="Produto 3">
                <h3>Produto 3</h3>
                <p>Descrição do Produto 3.</p>
                <p>R$ 20,00</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/300" alt="Produto 3">
                <h3>Produto 3</h3>
                <p>Descrição do Produto 3.</p>
                <p>R$ 20,00</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/300" alt="Produto 3">
                <h3>Produto 3</h3>
                <p>Descrição do Produto 3.</p>
                <p>R$ 20,00</p>
            </div></div>
            

            
            </div>
            </div>
            <!-- Adicione mais produtos conforme necessário -->
        </section>
    </div>
    <footer>
        <p>&copy; Feito por Valter e Brena. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
