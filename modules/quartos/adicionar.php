<?php 
   $name = $_POST['nome'];
   $quantidade_pessoas= $_POST['quantidade_pessoas'];
   $custo= $_POST['custo'];
   $cama= $_POST['cama'];
   $tamanho =$_POST['tamanho'];
   

   echo "O nome enviado foi: ". $name;
  
   echo "<br />";
   echo "<br />";
  
   echo "A quantidade de Pessoas selecionada: " .$quantidade_pessoas;
     
   echo "<br />";
   echo "<br />";
   
   echo "O preço do quarto é: ".$custo;
   
   echo "<br />";
   echo "<br />";

   echo 'Quantidade de cama por quarto: '.$cama;
    
   echo "<br />";
   echo "<br />";

   echo "O tamanho do quarto: " .$tamanho."m²";

?>