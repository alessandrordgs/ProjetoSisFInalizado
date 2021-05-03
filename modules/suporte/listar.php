<?php 
include('config/DB.php');
  $sql = "SELECT * FROM suporte";
  $stmt = Database::conexao()->prepare($sql);
  $stmt ->execute();
  $suporte = $stmt ->fetchAll(PDO::FETCH_ASSOC)
?>



<table>
<tr>
    <th>cliente</th>
    <th>plano</th>
    <th>horario De Suporte</th>
    <th>atendente Exclusivo</th>
    <th>site Exclusivo</th>
</tr>

<?php 
foreach($suporte as $sup) {
 ?>
<tr>
    <td><?php echo $sup ['cliente'];?></td>
    <td><?php echo $sup ['plano'];?></td>
    <td><?php echo $sup ['horarioDeSuporte'];?></td>
    <td><?php echo $sup ['atendenteExclusivo'];?></td>
    <td><?php echo $sup ['siteExclusivo'];?></td>
</tr>
 <?php
   }
?> 
</table>
