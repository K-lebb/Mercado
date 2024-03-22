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
                <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQDUL2vs9QG3mZtWttJZXtbkcTrWTHwSYzs02cE6qxx27PquZxor-EuIOT55_XdRZyIxiBOIzun1V1MMBJ8ptek-_e2Zj_YFdZixuZO0OvFCvN5m35927Dp&usqp=CAE" alt="Produto 1" height="300" width="300px" >
                <h3>Mandioca</h3>
                <p>Mandioca Orgânica<p>
                <p>R$ 6,00/KG</p>
            </div>
            <div class="product-card">
                <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQeqziiW_65hfYjGc6v_Nc8RLcO5gOhDSl5OwyqQ9rk_053LFMAzee_1Y8IqBiSrE6jjw-DUpxct8E8SBxd1UtP3P7Z-Y4lclZY8ovHuFAk1V7gMzRoVtmY&usqp=CAE" alt="Produto 1" height="300" width="300px">
                <h3>Tomate</h3>
                <p>Tomates Vermelhos Grandes</p>
                <p>R$ 9,00/KG</p>
            </div>
            <div class="product-card">
                <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQ4fX-wOZ0rSmnri_--UGuokt282OSc2TzUrMcdbZN44-pMOge5cdPXKAE9B5nsyxwPlYklRVBjmJZmOZrD7tngjjf2DDiCN5UWj5L3H0hMvl6Rrq1x4uEl&usqp=CAE" alt="Produto 1" height="300" width="300px">
                <h3>Cebola Branca</h3>
                <p>Cebola Branca Grande</p>
                <p>R$ 6,00/KG</p>
            </div>
            <div class="product-card">
                <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcShfhtcdKIcaINgsGMkSLqRjCgWeH2mXmQNEq7Wrm6h6hx8MF0K7rY6pCqZ_Qjt8A3dgfaVua-Bfw0u_tLzw9rtqBpw1PojN_J-koiUP36Fe73M-GNiiRlPbA&usqp=CAE" alt="Produto 1" height="300" width="300px">
                <h3>Alho</h3>
                <p>Alhos Grandes</p>
                <p>R$ 10,00/KG</p>
            </div>
            <div class="product-card">
                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTfSXmZRjCpBHDT0u0fVZF0eiWAg8H7fK78AHpuRi55ARUeuPDfUbVZWy8llGPqlvQAByg-6l_vsYCmCYeNaU2in3V07CZ0ALkAfTVmfGBMrBaXiVwWULhO&usqp=CAE" alt="Produto 1" height="300" width="300px">
                <h3>Repolho</h3>
                <p>Repolho Verde</p>
                <p>R$ 4,00</p>
            </div>
            <div class="product-card">
                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTdVPypuCpeV1CfORxDJUhmdetvkECv1fxMfk_oPoeubOVRmYmm_ghyWyGCP6s1CAGSfXfLlqqhIqBxV_xI_ILQpTBuGaATL6HzqGZRjBvD7Sy4Zc2Xc-eU&usqp=CAE" alt="Produto 1" height="300" width="300px">
                <h3>Alface</h3>
                <p>Alface Verde</p>
                <p>R$ 4,00</p>
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
