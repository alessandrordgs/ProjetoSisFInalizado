<?php
    if(isset($_GET['nome']) AND is_numeric($_GET['nome'])){
        $nome = $_GET['nome'];

        $sql = "DELETE * FROM produto WHERE nome_produto = :nome";
        $stmt = Database::Conexao()->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();

    }else{
        echo "Nome INVÁLIDO";
    }
?>