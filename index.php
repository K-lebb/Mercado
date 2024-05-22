<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log.css">
    <style>

   header {
   background-color: #26a500;
   color: #fff;
   padding: 10px;
   text-align: center;
   }  

   footer {
    background-color: #26a500;
    color: #fff;
    padding: 0px;
    text-align: center;
    width: 100%;
    height: 35px;
    position: fixed;
    bottom: 0;
}
    </style>
    <title>Log In</title>
</head>
<body>
<header>
        <div class="main-title"><h1>Supermercado Online</h1></div>
            </div>
        </div>
   </header>

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

                        include 'verificar/verificarClientes.php';

                        ?>

                     </form>
                     
                     <form action="verificar/verificarCad.php" method="post">
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
   <footer>
        <p>&copy; Feito por Valter, Brena e VJ. Todos os direitos reservados.</p>
    </footer>
</body>
</html>