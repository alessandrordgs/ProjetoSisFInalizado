<?php 
 $name = $_POST['nome'];
 $plano =$_POST['plano'];
 $horarioDeSuporte =$_POST['horarioDeSuporte'];


 echo "O nome enviado foi: ". $name;
  
 echo "<br />";
 echo "<br />";
   
 echo 'O tipo de plano escolhido foi: ' .$plano;
 
 echo "<br />";
 echo "<br />";
 
 echo 'O horario de suporte selecionado foi: ' .$horarioDeSuporte;

 echo "<br />";
 echo "<br />";
 
 if (($_POST['atendenteExclusivo'])) {
    echo("Escolheu " . $_POST['atendenteExclusivo']);
}
echo "<br />";
echo "<br />";

if (($_POST['siteExclusivo'])) {
    echo("Escolheu " . $_POST['siteExclusivo']);
}

  
 
 
 
?>