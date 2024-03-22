<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log.css">
    <title>Log In</title>
</head>
<body>
<div class="wrapper">

   <form action="index.php" method="post">

        <div class="card-switch">
            <label class="switch">
               <input type="checkbox" class="toggle">
               <span class="slider"></span>
               <span class="card-side"></span>
               <div class="flip-card__inner">
                  <div class="flip-card__front">
                     <div class="title">Log in</div>
                     <form class="flip-card__form" action="">
                        
                        <input class="flip-card__input" name="nome" placeholder="Nome" type="name">
                        <input class="flip-card__input" name="email" placeholder="Email" type="email">
                        <input class="flip-card__input" name="senha" placeholder="Password" type="password">
                        <button class="flip-card__btn">Vamos lá!</button>
                        </form>

                        <?php

                        include 'verificar/verificar.php';

                        ?>

                     </form>
                     <form action="verificar/verificar2.php" method="post">
                  </div>
                  
                  <div class="flip-card__back">
                     <div class="title">Cadastro</div>
                     <br>
                     <form class="flip-card__form" action="">
                        <input class="flip-card__input" placeholder="Nome" type="name" name="nome">
                        <input class="flip-card__input" name="email" placeholder="Email" type="email">
                        <input class="flip-card__input" name="senha" placeholder="Senha" type="password">
                        <br>
                        <button class="flip-card__btn">Confirmar!</button>
                        <br>
                     
                        
                  </div>
               </div>
               </form>
            </label>
        </div>   
        </form>
   </div>
</body>
</html>