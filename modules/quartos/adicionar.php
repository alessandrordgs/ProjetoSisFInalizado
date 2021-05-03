<?php 
 if(isset($_POST['buttonQuartos'])){

   $dados = [
      'name' => $_POST['nome'],
      'quantidade_pessoas'=> $_POST['quantidade_pessoas'],
      'custo'=> $_POST['custo'],
      'cama'=> $_POST['cama'],
      'tamanho' =>$_POST['tamanho'],
       ];
 };
function Inserir($dados){
   $pdo = Database::conexao();
   $novo = $pdo->prepare("INSERT INTO quartos 
       VALUES (NULL, :nome, :quantidade_pessoas, :custo,:cama,:tamanho)");
   $novo->bindParam(":nome",$dados['nome'] ,PDO::PARAM_STR);
   $novo->bindParam(":quantidade_pessoas",$dados['quantidade_pessoas'] ,PDO::PARAM_STR);
   $novo->bindParam(":custo",$dados['custo'] ,PDO::PARAM_STR);
   $novo->bindParam(":cama",$dados['cama'] ,PDO::PARAM_STR);
   $novo->bindParam(":tamanho",$dados['tamanho'] ,PDO::PARAM_STR);
   $novo->execute();
   $valor = $novo ->rowcount();

   return $valor;
};
   
?>
