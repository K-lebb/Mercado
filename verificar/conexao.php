<?php
    // Configurações de conexão com o banco de dados
    $servername = "localhost"; // Nome do servidor MySQL (normalmente 'localhost')
    $username = "root"; // Nome de usuário do MySQL
    $password = "mint"; // Senha do MySQL
    $dbname = "dis"; // Nome do banco de dados

    // Conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica se houve algum erro na conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    // include_once "apagar.php";
    ?>