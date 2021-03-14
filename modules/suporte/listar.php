<?php 
 $suporte = array(
 $suporte[]= array("cliente"=>"Hotel Correia", "plano"=>"gratuito", "horarioDeSuporte"=>"horario comercial", "atendenteExclusivo"=> false,
     "siteExclusivo"=>false ),
 $suporte[]= array("cliente"=>"Hotel Rocha", "plano"=>"pago", "horarioDeSuporte"=>"24h", "atendenteExclusivo"=> true,
     "siteExclusivo"=>true ),
 $suporte[]= array("cliente"=>"Hotel Azevedo", "plano"=>"pago", "horarioDeSuporte"=>"24h", "atendenteExclusivo"=> true,
     "siteExclusivo"=>false ),
 $suporte[]= array("cliente"=>"Hotel Macapá", "plano"=>"gratuito", "horarioDeSuporte"=>"horario comercial", "atendenteExclusivo"=> false,
     "siteExclusivo"=>false ),
 $suporte[]= array("cliente"=>"Hotel Santana", "plano"=>"gratuito", "horarioDeSuporte"=>"horario comercial", "atendenteExclusivo"=> false,
     "siteExclusivo"=>true ),
 );

 foreach($suporte as $sup){
    echo '<br/>';
    echo '<br/>';
    echo 'Cliente ' .$sup['nome']  ;
    echo '<br/>';
    echo 'Tipo de plano: ' .$sup['plano'] ;
    echo '<br/>';
    echo 'Horario de suporte ' .$sup['horarioDeSuporte'] ;
    echo '<br/>';
    echo ($sup["atendenteExclusivo"]) ? " Sim" : "Não";
    echo '<br/>';
    echo 'Cafe da manhã gratuito'. ($sup["siteExclusivo"]) ? " Sim" : "Não";
 }

 


?>