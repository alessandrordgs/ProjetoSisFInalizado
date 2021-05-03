<?php 
 if(isset($_POST['buttonServicos'])){

    $dados = [
        "name" => $_POST['nome'],
        "plano" =>$_POST['plano'],
        "horarioDeSuporte" =>$_POST['horarioDeSuporte'],
         "atendenteExclusivo" =>$_POST['atendenteExclusivo'],
         "siteExclusivo" => $_POST['siteExclusivo'],
        ];
  };
function Inserir($dados){
    $pdo = Database::conexao();
    $novo = $pdo->prepare("INSERT INTO suporte 
        VALUES (NULL, :nome, :plano, :horarioDeSuporte,:atendenteExclusivo,:siteExclusivo)");
    $novo->bindParam(":nome",$dados['nome'] ,PDO::PARAM_STR);
    $novo->bindParam(":plano",$dados['plano'] ,PDO::PARAM_STR);
    $novo->bindParam(":horarioDeSuporte",$dados['horarioDeSuporte'] ,PDO::PARAM_STR);
    $novo->bindParam(":atendenteExclusivo",$dados['atendenteExclusivo'] ,PDO::PARAM_STR);
    $novo->bindParam(":siteExclusivo",$dados['siteExclusivo'] ,PDO::PARAM_STR);
    $novo->execute();
    $valor = $novo ->rowcount();

    return $valor;
};

 
 
 
?>