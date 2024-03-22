<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="produto.php" method="post">
    <input class="flip-card__input" name="titulo" placeholder="Nome" type="name"> <br>
    <input class="flip-card__input" name="preco" placeholder="Preço" type=""> <br>
    <input class="flip-card__input" name="familia" placeholder="Família" type="name"> <br>
    <input class="flip-card__input" name="custo" placeholder="Custo" type=""> <br>
    
    <button>Vamos lá!</button>
</form>
</body>
</html>

<?php

$titulo=$_POST['titulo'];
$preco=$_POST['preco'];
$familia=$_POST['familia'];
$custo=$_POST['custo'];

include 'verificar/conexao.php';

$adi= "INSERT INTO `produtos`(`titulo`, `id_duplicatas`, `preco`, `familia`, `custo`) VALUES ('$titulo','5','$preco','$familia','$custo')"; 

if ($conn->query($adi) === TRUE) {
    echo "Registro inserido com sucesso!";
    echo $titulo, $preco, $familia, $custo;
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

?>