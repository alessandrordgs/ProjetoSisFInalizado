<!DOCTYPE html>
<html lang="en">
<style>
    #formUsuario {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        max-width: 400px;
    }
</style>

<head>
    <title>Cadastro</title>

</head>

<body>
    <form id="formUsuario" name="formCadastroUsuario" action="adicionar.php" method="POST">
        <label for="nomeUsuario">
            <span>Nome</span>
            <input type="text" name="nomeUsuario" placeholder="Digite o seu nome completo" />
        </label>
        <label for="cpf">
            <span>CPF</span>
            <input type="text" name="cpf" placeholder="Digite o seu CPF" />
        </label>
        <label for="email">
            <span> E-mail</span>
            <input type="text" name="email" placeholder="Digite o seu endereço de e-mail" />
        </label>
        <label for="celular">
            <span> Numero de celular </span>
            <input type="text" name="celular" placeholder="Digite o número de celular" />
        </label>
        <label for="dataNascimento">
            <span> Data de nascimento </span>
            <input type="date" name="dataNascimento" />
        </label>
        <input type="submit" name="button" value="Enviar">
    </form>

</body>

</html>

<?php


$nomeUsuario = $_POST['nomeUsuario'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$dataNascimento = date('d-m-Y', strtotime($_POST["dataNascimento"]));
$email = $_POST['email'];

echo "Nome: " . $nomeUsuario;
echo "</br>";
echo "cpf: " . $cpf;
echo "</br>";
echo "email: " . $email;
echo "</br>";
echo "celular: " . $celular;
echo "</br>";
echo "data de Nascimento: " . $dataNascimento;
echo "</br>";


?>