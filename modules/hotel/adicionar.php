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