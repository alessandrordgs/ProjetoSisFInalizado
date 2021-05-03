<?php include('config/DB.php');?>

<?php
if(isset($_POST["buttonQuartos"]) && $_POST["buttonQuartos"] == "Salvar" ){ 
    $nome = $_POST['nome'];
    $quantidade_pessoas = $_POST['quantidade_pessoas'];
    $custo = $_POST['custo'];
    $cama = $_POST['cama'];
    $tamanho = $_POST['tamanho'];

    $sql = "UPDATE produto SET 
            nome   = :nome,
            quantidade_pessoas   = :quantidade_pessoas,
            custo = :custo
            cama = :cama
            tamanho = :tamanho
            
        WHERE   nome  = :nome";

    $stmt = Database::conexao()->prepare($sql);
    $stmt->bindParam(': nome', $nome);
    $stmt->bindParam(':quantidade_pessoas', $quantidade_pessoas);
    $stmt->bindParam(':custo', $custo);
    $stmt->bindParam(':cama', $cama);
    $stmt->bindParam(':tamanho', $tamanho);

    $stmt->execute();    
    }


?>

<?php
    if(isset($_GET['nome']) && is_numeric($_GET['nome'])){
        $nome = $_GET['nome'];

        $sql = "SELECT * FROM quartos WHERE nome = :nome";

        $stmt = Database::Conexao()->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();
        $produto = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
?>

<form method='post' action=''>
nome:   
<input type="text" name='Nome' value='<?php echo $hotel[0]['nome']?>'></br>

quantidade pessoas:          
<input type="text" name='quantidade_pessoas' value='<?php echo $hotel[0]['endereco']?>'></br>

custo:     
<input type="text" name='custo'></br>

Oferece Serviços:
<input type="text" name='cama'></br>
tamanho:
<input type="text" name='cama'></br>
            
<input type='submit' name='botao' value='Salvar'>

</form>
<?php       

    }
    else{
        echo "ID INVÁLIDO"; 
    }
?>
