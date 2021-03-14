<?php 

$quartos = array();
$quartos[] = array("nome" => "Quarto Single", "quantidade_pessoas" => 1, "custo" => "$140,00", "cama" => 1, "tamanho" => "24m");
$quartos[] = array("nome" => "Quarto Duplo", "quantidade_pessoas" => 2, "custo" => "$240,00", "cama" => 2, "tamanho" => "34m");
$quartos[] = array("nome" => "Quarto Triplo", "quantidade_pessoas" => 3, "custo" => "$340,00", "cama" => 3, "tamanho" => "54m");
$quartos[] = array("nome" => "Quarto Familia", "quantidade_pessoas" => 5, "custo" => "$640,00", "cama" => 5, "tamanho" => "64m");
$quartos[] = array("nome" => "Quarto Compartilhado", "quantidade_pessoas" => 12, "custo" => "$100,00", "cama" => 12, "tamanho" => "70m");

foreach($quartos as $quarto){
    echo '<br/>';
    echo '<br/>';
    echo 'Nome do quarto ' .$quarto['nome']  ;
    echo '<br/>';
    echo 'Quantidades de pessoas' .$quarto['quantidade_pessoas'] ;
    echo '<br/>';
    echo 'Preço' .$quarto['custo'] ;
    echo '<br/>';
    echo 'Quantidade de camas disponiveis :' .$quarto['cama']  ;
    echo '<br/>';
    echo 'tamanho :' .$quarto['tamanho']  ;

}

?>
