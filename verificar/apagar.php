<?php
// Verifique se a solicitação POST contém o ID do registro
if(isset($_POST['record_id'])) {
    // Inclua o arquivo de conexão com o banco de dados
    include_once("conexao.php");

    // Obtenha o ID do registro a ser excluído
    $record_id = $_POST['record_id'];

    // Consulta SQL para excluir o registro
    $sql1 = "DELETE FROM funcionarios WHERE id = $record_id";

    // Executa a consulta
    if ($conn->query($sql1) === TRUE) {
        echo "Registro excluído com sucesso";
    } else {
        echo "Erro ao excluir registro: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>
