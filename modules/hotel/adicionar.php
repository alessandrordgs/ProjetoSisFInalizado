<!DOCTYPE html>
<html lang="en">
<style>
    #formHotel {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        max-width: 400px;
    }
</style>

<head>
    <title>Cadastro | Hotel</title>

</head>

<body>
    <form id="formHotel" name="formCadastro" action="adicionar.php" method="POST">
        <label for="nameHotel">
            <span>Nome</span>
            <input type="text" name="nomeHotel" placeholder="Digite o nome do hotel" />
        </label>
        <label for="enderecoHotel">
            <span>Endereço</span>
            <input type="text" name="enderecoHotel" placeholder="Digite o endereço do hotel" />
        </label>
        <label for="servicos">
            <span> Oferece Serviços:</span>
            Sim <input type="radio" name="servicos" value="Sim" />
            Não <input type="radio" name="servicos" value="Não" />
        </label>
        <br>
        <label for="descricao">
            <span>Descrição:</span>
            <textarea name="descricao"></textarea>

        </label>
        <br>
        <input type="submit" name="button" value="Enviar">
    </form>

</body>

</html>

<?php


$nomeHotel = $_POST['nomeHotel'];
$enderecoHotel = $_POST['enderecoHotel'];
$servico = $_POST['servicos'];
$descricao = $_POST['descricao'];

echo "Nome: " . $nomeHotel;
echo "</br>";
echo "Endereço: " . $enderecoHotel;
echo "</br>";
echo "Oferece serviços: " . $servico;
echo "</br>";
echo "Descrição: " . $descricao;


?>