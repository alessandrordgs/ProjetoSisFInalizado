<!DOCTYPE html>
<html lang="en">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../styles/global.css">
<style>
    #formServicos {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        max-width: 400px;
    }
</style>

<head>
    <title>Serviços oferecidos</title>
</head>

<body>
    <h1>Serviços</h1>
    <form id="formServicos" name="formCadastro" action="adicionar.php" method="POST">
        <label for="almocoGratis">
            Almoço gratuito
            <input type="checkbox" id="" name="almocoGratis" id="" value="Almoço gratuito">
        </label>

        <label for="cafeGratis">
            Café da manhã gratuito
            <input type="checkbox" id="" name="cafeGratis" id="" value="Café da manhã gratuito">
        </label>

        <label for="passeios">
            Passeios
            <input type="checkbox" id="" name="passeios" id="" value="Passeios">
        </label>

        <label for="wifiGratis">
            Wifi gratuito
            <input type="checkbox" id="" name="wifiGratis" id="" value="Wifi gratuito">
        </label>

        <br>
        <input type="submit" name="button" value="Enviar">
    </form>
</body>

</html>

<?php


$almoco = $_POST['almocoGratis'];
$cafe = $_POST['cafeGratis'];
$passeios = $_POST['passeios'];
$wifi = $_POST['wifiGratis'];

echo "Serviços cadastrados:";
echo "</br>";
echo "" . $almoco;
echo "</br>";
echo "" . $cafe;
echo "</br>";
echo "" . $passeios;
echo "</br>";
echo "" . $wifi;
echo "</br></br>";

?>