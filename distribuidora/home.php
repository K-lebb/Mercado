<!DOCTYPE html>

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
            <center><br>  <a href="http://localhost/distribuidora/doces.php"><img src="https://i.pinimg.com/564x/08/6a/ed/086aedfd8106536fd066f391436cda4d.jpg" height="350" width="1100px" class="media-object  img-responsive img-thumbnail"></a>

    </center>
        </section>
    </div>
    <footer>
        <p>&copy; Feito por Valter e Brena. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
