<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/34/34627.png" type="image/png">

    <title>Supermercado Online</title>
    <link rel="stylesheet" href="../css/site.css">
    <link rel="stylesheet" href="../css/log.css">
</head>

<body>
    <header>
        <div class="main-title"><h1>Supermercado Online</h1></div>
            </div>
        </div>
    </header>
    <div class="container">
        <nav>

                <a href="home.php">Home</a>
                <a href="../index.php">Cadastro</a>
                
        </nav>
        <section>
        <div class="wrapper">

<form action="acesso.php" method="post">

<form action="acesso.php" method="post">

<div class="card-switch">
    <label class="switch">
       <input type="checkbox" class="toggle">
       <span class="slider"></span>
       <span class="card-side"></span>
      
          <div class="flip-card__front">
             <div class="title">Log in</div>
             <form class="flip-card__form" action="">
                
                <input class="flip-card__input" name="nome" placeholder="Nome" type="name">
                <input class="flip-card__input" name="email" placeholder="Email" type="email">
                <input class="flip-card__input" name="senha" placeholder="Password" type="password">
                <button class="flip-card__btn">Vamos lá!</button>
                </form>

                <?php

                include_once '../verificar/verificarGerente.php';

                ?>

             </form>
        </section>
    </div>
    <footer>
        <p>&copy; Feito por Valter, Brena e VJ. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
