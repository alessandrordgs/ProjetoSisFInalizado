<?php 
include('config/DB.php');
  $sql = "SELECT * FROM hoteis";
  $stmt = Database::conexao()->prepare($sql);
  $stmt ->execute();
  $hotel = $stmt ->fetchAll(PDO::FETCH_ASSOC)
?>



<table>
<tr>
    <th>Nome</th>
    <th>Endereço</th>
    <th>Cidade</th>
    <th>Oferece serviços</th>
</tr>

<?php 
foreach($hoteis as $hotel) {
 ?>
<tr>
    <td><?php echo $hotel ['nome'];?></td>
    <td><?php echo $hotel ['endereco'];?></td>
    <td><?php echo $hotel ['cidade'];?></td>
    <td><?php echo $hotel ['oferece_servicos'];?></td>
    <td><a href="?modulo=produto&acao=editar&id=<?php echo $produto['nome'];?>"> EDITAR </a></td>
    <td><a href="?modulo=produto&acao=excluir&id=<?php echo $produto['nome'];?>"> EXCLUIR </a></td>
</tr>
 <?php
   }
?> 
</table>
