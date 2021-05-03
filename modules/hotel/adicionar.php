<?php

if(isset($_POST['buttonHotel'])){

    $dados = [
        'nomeHotel' =>  $_POST['nomeHotel'],
        'enderecoHotel' => $_POST['enderecoHotel'],
        'servicos' => $_POST['servicos'],
        'descricao' => $_POST['descricao'],
        ];
  };
function Inserir($dados){
    $pdo = Database::conexao();
    $novo = $pdo->prepare("INSERT INTO hoteis 
        VALUES (NULL, :nomeHotel, :enderecoHotel, :servicos,:descricao)");
    $novo->bindParam(":nomeHotel",$dados['nomeHotel'] ,PDO::PARAM_STR);
    $novo->bindParam(":enderecoHotel",$dados['enderecoHotel'] ,PDO::PARAM_STR);
    $novo->bindParam(":servicos",$dados['servicos'] ,PDO::PARAM_STR);
    $novo->bindParam(":descricao",$dados['descricao'] ,PDO::PARAM_STR);
    $novo->execute();
    $valor = $novo ->rowcount();

    return $valor;
};



?>