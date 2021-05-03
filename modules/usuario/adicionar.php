<?php




if(isset($_POST['buttonServicos'])){

    $dados = [
        "nomeUsuario" => $_POST['nomeUsuario'],
        "cpf" => $_POST['cpf'],
        "email" => $_POST['email'],
        "celular" => $_POST['celular'],
        "dataNascimento" => date('d-m-Y', strtotime($_POST["dataNascimento"])),
        ];
  };
function Inserir($dados){
    $pdo = Database::conexao();
    $novo = $pdo->prepare("INSERT INTO suporte 
        VALUES (NULL, :nomeUsuario, :cpf, :email,:celular,:dataNascimento)");
    $novo->bindParam(":nomeUsuario",$dados['nomeUsuario'] ,PDO::PARAM_STR);
    $novo->bindParam(":cpf",$dados['cpf'] ,PDO::PARAM_STR);
    $novo->bindParam(":email",$dados['email'] ,PDO::PARAM_STR);
    $novo->bindParam(":celular",$dados['celular'] ,PDO::PARAM_STR);
    $novo->bindParam(":dataNascimento",$dados['dataNascimento'] ,PDO::PARAM_STR);
    $novo->execute();
    $valor = $novo ->rowcount();

    return $valor;
};


?>