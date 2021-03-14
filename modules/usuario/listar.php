<?php 
 $usuarioDados = array(
     array("nome"=>"Alessandro Rodrigues", "cpf"=> "32668247098", "email"=>"ale.silva1120@gmail.com","numero"=>"(20) 93385-4200", "dataDeNascimento"=>"05/03/2002"),
     array("nome"=>"Kuxodo", "cpf"=> "14917520096", "email"=>"hoxanid155@edultry.com","numero"=>"(50) 93866-5789", "dataDeNascimento"=>"27/03/1978"),
     array("nome"=>"Urblusar", "cpf"=> "03834073032", "email"=>"tirex58834@geeky83.com","numero"=>"(55) 97794-8218", "dataDeNascimento"=>"04/05/1988"),
     array("nome"=>"Tuci", "cpf"=> "68098074030", "email"=>"gecis19705@dxecig.com","numero"=>"(24) 95786-3578", "dataDeNascimento"=>"02/06/1995"),
     array("nome"=>"Pain", "cpf"=> "93768764079", "email"=>"vatawed947@bulkbye.com","numero"=>"(54) 90807-1372", "dataDeNascimento"=>"16/04/1999"),
     
 );
echo "<h1> Usuários </h1>";

foreach($usuarioDados as $usuario) {
    echo "<strong> Nome completo: </strong> " .$usuario["nome"];
    echo "<br>";
    echo "<strong> CPF: </strong> " .$usuario["cpf"];
    echo "<br>";
    echo "<strong> Endereço de e-mail: </strong> " .$usuario["email"];
    echo "<br>";
    echo "<strong> Número de celular: </strong> " .$usuario["numero"];
    echo "<br>";
    echo "<strong> Data de nascimento: </strong> " .$usuario["dataDeNascimento"];
    echo "<br><br>";
}


?>