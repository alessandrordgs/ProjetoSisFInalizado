<?php 
include('config/DB.php');
  $sql = "SELECT * FROM servicos";
  $stmt = Database::conexao()->prepare($sql);
  $stmt ->execute();
  $servicos = $stmt ->fetchAll(PDO::FETCH_ASSOC)
?>



<table>
<tr>
    <th>cafe manha gratis</th>
    <th>almoco gratis</th>
    <th>passeios</th>
    <th>jantar</th>
    <th>wifi gratuito</th>
</tr>

<?php 
foreach($servicos as $servico) {
 ?>
<tr>
    <td><?php echo $servico ['cafe_manha_gratis'];?></td>
    <td><?php echo $servico ['almoco_gratis'];?></td>
    <td><?php echo $servico ['passeios'];?></td>
    <td><?php echo $servico ['jantar'];?></td>
    <td><?php echo $servico ['wifi_gratuito'];?></td>
</tr>
 <?php
   }
?> 
</table>

