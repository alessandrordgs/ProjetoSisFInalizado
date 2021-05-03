<?php include('config/DB.php');?>

<?php
if(isset($_POST["buttonHotel"]) && $_POST["buttonHotel"] == "Salvar" ){ 
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $preco = $_POST['cidade'];
  

    $sql = "UPDATE produto SET 
            descricao   = :descricao,
            cidade   = :cidade;
            
        WHERE   nome  = :nome;

    $stmt = Database::conexao()->prepare($sql);
    $stmt->bindParam(':descricao', $nome);
    $stmt->bindParam(':cidade', $cidade);
    $stmt->bindParam(':oferece_servicos', $oferece_servicos);

    $stmt->execute();    
    }


?>

<?php
    if(isset($_GET['nome']) && is_numeric($_GET['nome'])){
        $nome = $_GET['nome'];

        $sql = "SELECT * FROM hotel WHERE nome = :nome";

        $stmt = Database::Conexao()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $produto = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
?>

<form method='post' action=''>
Nome:      
<input type="text" name='Nome' value='<?php echo $hotel[0]['nome']?>'></br>

Endereço:          
<input type="text" name='endereco' value='<?php echo $hotel[0]['endereco']?>'></br>

Cidade:     
<input type="text" name='quantidade'></br>

 Oferece Serviços:
            Sim <input type="radio" name="servicos" value="Sim" />
            Não <input type="radio" name="servicos" value="Não" />
<input type='submit' name='botao' value='Salvar'>

</form>
<?php       

    }
    else{
        echo "ID INVÁLIDO"; 
    }
?>
