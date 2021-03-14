<?php 

$servicos_oferecidos = array();
$servicos_oferecidos[] = array("cafe_manha_gratis" => true, "almoco_gratis" => true, "passeios" => false, "jantar" => false, "wifi_gratuito" => true);
$servicos_oferecidos[] = array("cafe_manha_gratis" => false, "almoco_gratis" => false, "piscina" => true, "jantar" => false, "wifi_gratuito" => true);
$servicos_oferecidos[] = array("servico_limpeza" => true, "servico_quarto" => true, "jardim" => true, "cafe_manha_gratis" => false, "wifi_gratuito" => true);
$servicos_oferecidos[] = array("cafe_manha_gratis" => true, "almoco_gratis" => true, "passeios" => false, "jantar" => true, "wifi_gratuito" => false);
$servicos_oferecidos[] = array("cafe_manha_gratis" => true, "servico_quarto" => true, "passeios" => true, "jantar" => true, "wifi_gratuito" => true);

echo "<h1> Serviços oferecidos </h1>";
foreach($servicos_oferecidos as $servico) {
    echo ($servico["cafe_manha_gratis"]) ? " Café da manhã grátis: Sim" : "Café da manhã grátis: Não";
    echo "<br>";
    echo ($servico["almoco_gratis"]) ? " Almoço grátis: Sim" : "Café da manhã grátis: Não";
    echo "<br>";
    echo ($servico["passeios"]) ? " Passeios: Sim" : "Passeios: Não";
    echo "<br>";
    echo ($servico["jantar"]) ? " Jantar: Sim" : "jantar: Não";
    echo "<br>";
    echo ($servico["wifi_gratuito"]) ? " Wifi gratuito: Sim" : "Wifi gratuito: Não";
    echo "<br><br>";
}

?>
