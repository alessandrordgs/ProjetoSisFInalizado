<?php
if(isset($_POST['buttonServicos'])){

    $dados = [
        "almoco" => $_POST['almocoGratis'],
        "cafe" => $_POST['cafeGratis'],
        "passeios" => $_POST['passeios'],
        "wifi" => $_POST['wifiGratis'],
        ];
  };
function Inserir($dados){
    $pdo = Database::conexao();
    $novo = $pdo->prepare("INSERT INTO servicos 
        VALUES (NULL, :almocoGratis, :cafeGratis, :passeios,:wifiGratis)");
    $novo->bindParam(":almocoGratis",$dados['almocoGratis'] ,PDO::PARAM_STR);
    $novo->bindParam(":cafeGratis",$dados['cafeGratis'] ,PDO::PARAM_STR);
    $novo->bindParam(":passeios",$dados['passeios'] ,PDO::PARAM_STR);
    $novo->bindParam(":wifiGratis",$dados['wifiGratis'] ,PDO::PARAM_STR);
    $novo->execute();
    $valor = $novo ->rowcount();

    return $valor;
};

?>