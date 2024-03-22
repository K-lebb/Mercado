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
                <img src="https://apoioentrega.vteximg.com.br/arquivos/ids/498626/CARNE-MOIDA-TUDBOM-500G-PC-CONG.png?v=637807800359500000" alt="Produto 1" height="300" width="300px" >
                <h3>Produto 1</h3>
                <p>Descrição do Produto 1.</p>
                <p>R$ 10,00</p>
            </div>
            <div class="product-card">
                <img src="https://static.paodeacucar.com/img/uploads/1/112/24853112.jpg" alt="Produto 1" height="300" width="300px">
                <h3>Produto 1</h3>
                <p>Descrição do Produto 1.</p>
                <p>R$ 10,00</p>
            </div>
            <div class="product-card">
                <img src="https://swiftbr.vteximg.com.br/arquivos/ids/179702-768-768/medalhao-swift-mais-kg-618874-3.jpg?v=637739862117830000" alt="Produto 1" height="300" width="300px">
                <h3>Produto 1</h3>
                <p>Descrição do Produto 1.</p>
                <p>R$ 10,00</p>
            </div>
            <div class="product-card">
                <img src="https://prezunic.vtexassets.com/arquivos/ids/181502-800-auto?v=638368814515400000&width=800&height=auto&aspect=true" alt="Produto 1" height="300" width="300px">
                <h3>Produto 1</h3>
                <p>Descrição do Produto 1.</p>
                <p>R$ 10,00</p>
            </div>
            <div class="product-card">
                <img src="https://brf--c.na149.content.force.com/servlet/servlet.ImageServer?id=0154w000024TrIZ&oid=00D410000012TJa&lastMod=1648569823000" alt="Produto 1" height="300" width="300px">
                <h3>Produto 1</h3>
                <p>Descrição do Produto 1.</p>
                <p>R$ 10,00</p>
            </div>
            <div class="product-card">
                <img src="https://meuminerva.com/media/catalog/product/F/I/FILEMIGNONSEMCORDAOMINERVAMINERVAFOODS_2.jpg?optimize=high&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700" alt="Produto 1" height="300" width="300px">
                <h3>Produto 1</h3>
                <p>Descrição do Produto 1.</p>
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
