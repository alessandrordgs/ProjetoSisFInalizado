
<?php 
include('config/DB.php');
  $sql = "SELECT * FROM suporte";
  $stmt = Database::conexao()->prepare($sql);
  $stmt ->execute();
  $usuarios = $stmt ->fetchAll(PDO::FETCH_ASSOC)
?>



<table>
<tr>
    <th>nome</th>
    <th>cpf</th>
    <th>email</th>
    <th>numero</th>
    <th>dataDeNascimento</th>
</tr>

<?php 
foreach($usuarios as $usuario) {
 ?>
<tr>
    <td><?php echo $usuario ['nome'];?></td>
    <td><?php echo $usuario ['cpf'];?></td>
    <td><?php echo $usuario ['email'];?></td>
    <td><?php echo $usuario ['numero'];?></td>
    <td><?php echo $usuario ['dataDeNascimento'];?></td>
</tr>
 <?php
   }
?> 
</table>