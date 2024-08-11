<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/34/34627.png" type="image/png">
    <title>Supermercado Online</title>
   <link rel="stylesheet" href="../css/log.css">
   <link rel="stylesheet" href="../css/site2.css">
</head>
<body>
    <header>
        <div class="main-title"><h1>Supermercado Online</h1></div>
            </div>
        </div>
    </header>
    
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

        </div>
        <div class="container">
        <div class="wrapper">
            <div class="card-switch">
          
            <div class="flip-card__inner">
                <div class="flip-card__front">
                    <div class="title">Log in</div>
                    <form class="flip-card__form" action="acesso.php" method="post">
                        <input class="flip-card__input" name="nome" placeholder="Nome" type="text">
                        <input class="flip-card__input" name="email" placeholder="Email" type="email">
                        <input class="flip-card__input" name="senha" placeholder="Password" type="password">
                        <button class="flip-card__btn">Vamos lá!</button>
                    </form>
                    <?php

                     include '../verificar/verificarGerente.php';

                     ?>

                </div>
                </div>
                </label>
                </div>
                </div>

        </section>
    </div>
    <footer>
        <p>&copy; Feito por Valter, Brena e VJ. Todos os direitos reservados.</p>
    </footer>
</body>
</html>