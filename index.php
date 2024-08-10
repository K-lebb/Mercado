<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log.css">
    <title>Log In</title>
</head>
<body>
<header>
    <h1>Supermercado Online</h1>
</header>
<div class="wrapper">
    <div class="card-switch">
        <label class="switch">
            <input type="checkbox" class="toggle">
            <span class="slider"></span>
            <span class="card-side"></span>
          
            <div class="flip-card__inner">
                <div class="flip-card__front">
                    <div class="title">Log in</div>
                    <form class="flip-card__form" action="index.php" method="post">
                        <input class="flip-card__input" name="nome" placeholder="Nome" type="text">
                        <input class="flip-card__input" name="email" placeholder="Email" type="email">
                        <input class="flip-card__input" name="senha" placeholder="Password" type="password">
                        <button class="flip-card__btn">Vamos lá!</button>
                    </form>
                    <?php

                     include 'verificar/verificarClientes.php';

                     ?>

                </div>

                <div class="flip-card__back">
                    <div class="title">Cadastro</div>
                    <form class="flip-card__form" action="verificar/verificarCad.php" method="post">
                        <input class="flip-card__input" name="nome" placeholder="Nome" type="text">
                        <input class="flip-card__input" name="email" placeholder="Email" type="email">
                        <input class="flip-card__input" name="senha" placeholder="Senha" type="password">
                        <button class="flip-card__btn">Confirmar!</button>
                    </form>
                    
                </div>
            </div>
        </label>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<footer>
    <p>&copy; Feito por Valter, Brena e VJ. Todos os direitos reservados.</p>
</footer>
</body>
</html>
