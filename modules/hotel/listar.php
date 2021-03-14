<?php 

$hoteis = array();
$hoteis[] = array("nome" => "Hotel Correia", "endereco" => "Av.Raimundo Peres", "cidade" => "Macapá", "oferece_servicos" => true, "descricao" => "Acolhedor e de pequenas dimensões, coloca qualquer hóspede à vontade");
$hoteis[] = array("nome" => "Hotel Rocha", "endereco" => "Travessa Terceira da Rodovia do Pacovals", "cidade" => "Macapá", "oferece_servicos" => true, "descricao" => "Hotel com Conforto e Qualidade");
$hoteis[] = array("nome" => "Hotel Azevedo", "endereco" => "Avenida Três de Abril", "cidade" => "Macapá", "oferece_servicos" => false, "descricao" => "Próprio para Férias em Familia. ");
$hoteis[] = array("nome" => "Hotel Macapá", "endereco" => "Alameda Décima Terceira", "cidade" => "Macapá", "oferece_servicos" => true, "descricao" => "Hotel de lazer para toda a família.");
$hoteis[] = array("nome" => "Hotel Santana", "endereco" => "Travessa Primeira da Tupis", "cidade" => "Santana", "oferece_servicos" => false, "descricao" => "Hotel Confortável, Bonito e com Ótimos Preços");

echo "<h1> Hoteis </h1>";

foreach($hoteis as $hotel) {
echo "<strong> Nome do Hotel: </strong> " .$hotel["nome"];
echo "</br>";
echo "Endereço: " .$hotel["endereco"];
echo "</br>";
echo "Cidade: " .$hotel["cidade"];
echo "</br>";
echo ($hotel["oferece_servicos"]) ? "Oferece serviços: sim" : "Oferece serviço: não";
echo "</br>";

echo "Descrição: " .$hotel["descricao"];
echo "</br></br>";
}
?>
