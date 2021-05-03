<?php 
include('config/DB.php');
  $sql = "SELECT * FROM quartos";
  $stmt = Database::conexao()->prepare($sql);
  $stmt ->execute();
  $quartos = $stmt ->fetchAll(PDO::FETCH_ASSOC)
?>



<table>
<tr>
    <th>Nome</th>
    <th>Quantidade pessoas</th>
    <th>custo</th>
    <th>cama</th>
    <th>tamanho</th>
</tr>

<?php 
foreach($quartos as $quarto) {
 ?>
<tr>
    <td><?php echo $quarto ['nome'];?></td>
    <td><?php echo $quarto ['quantidade_pessoas'];?></td>
    <td><?php echo $quarto ['custo'];?></td>
    <td><?php echo $quarto ['cama'];?></td>
    <td><?php echo $quarto ['tamanho'];?></td>
</tr>
 <?php
   }
?> 
</table>
