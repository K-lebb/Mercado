<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/34/34627.png" type="image/png">

    <title>Supermercado Online</title>
   <link rel="stylesheet" href="../css/site.css">
</head>
<body>
    <header>
        <div class="main-title"><h1>Supermercado Online</h1></div>
            </div>
        </div>
    </header>
    <div class="container">
        <nav>

            <div class="dropdown">
                <a href="#">Partimentos</a>
                <div class="dropdown-content">
                    <a href="funcionarios.php">Funcionarios</a>
                    <a href="clientes.php">Clientes</a>
                    <a href="produto.php">Produtos</a>
                    
                </div>
            </div>
                <a href="../distribuidora/home.php">Home</a>
                <a href="../index.php">Cadastro</a>
                <a href="../distribuidora/sobre.php">Sobre</a>
                <a href="../distribuidora/acesso.php">Acesso</a>
                
        </nav>
        <section>
            <center><br>  <a href="../distribuidora/doces.php"><img src="https://i.pinimg.com/564x/08/6a/ed/086aedfd8106536fd066f391436cda4d.jpg" height="350" width="1100px" class="media-object  img-responsive img-thumbnail"></a>

    </center>

             <h1>Relatórios de Vendas</h1>
             <form action="teste.php" method="post">
                 <h2>Consultar Relatórios</h2>
                 <label for="report-type">Escolha o relatório:</label>
                 <select id="report-type" name="report_type">
                     <option value="produtos_mais_vendidos">Produtos Mais Vendidos</option>
                     <option value="cliente_mais_compras">Cliente que Mais Compra</option>
                     <option value="idade_mais_compras">Idade de quem Mais Compra</option>
                     <option value="produto_mais_lucro">Produto de quem Mais Lucra</option>
                 </select>
                 <button type="submit">Consultar</button>
             </form>
        </section>
    </div>
    <footer>
        <p>&copy; Feito por Valter, Brena e VJ. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
