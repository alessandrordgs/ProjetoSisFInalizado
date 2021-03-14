<!DOCTYPE html>
<html lang="en">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../styles/global.css">


<head>
    <title>Cadastro | Hotel</title>

</head>

<body>
    <div class='container-form'>
        <h1>Cadastro de Hotéis</h1>
    <form id="formHotel" name="formCadastro" action="adicionar.php" method="POST">
        <label for="nameHotel">
            <span>Nome</span>
            <input type="text"  class='input'  name="nomeHotel" placeholder="Digite o nome do hotel" />
        </label>
        <label for="enderecoHotel">
            <span>Endereço</span>
            <input type="text" class='input' name="enderecoHotel" placeholder="Digite o endereço do hotel" />
        </label>
        <label for="servicos" class="radio">
            <span> Oferece Serviços:</span>
            Sim <input type="radio" name="servicos" value="Sim" />
            Não <input type="radio" name="servicos" value="Não" />
        </label>
        <br>
        <label for="descricao">
            <span>Descrição:</span>
            <textarea style="resize: none" class='textarea' name="descricao"></textarea>

        </label>
        <br>
        <input class='button' type="submit" name="button" value="Enviar">
    </form>
    </div>
</body>

</html>

<?php


// $nomeHotel = $_POST['nomeHotel'];
// $enderecoHotel = $_POST['enderecoHotel'];
// $servico = $_POST['servicos'];
// $descricao = $_POST['descricao'];

// echo "Nome: " . $nomeHotel;
// echo "</br>";
// echo "Endereço: " . $enderecoHotel;
// echo "</br>";
// echo "Oferece serviços: " . $servico;
// echo "</br>";
// echo "Descrição: " . $descricao;


?>