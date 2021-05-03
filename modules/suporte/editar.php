<?php include('config/DB.php');?>

<?php
if(isset($_POST["buttonAdicionar"]) && $_POST["buttonAdicionar"] == "Salvar" ){ 
    $cliente = $_POST['cliente'];
    $plano = $_POST['plano'];
    $horarioDeSuporte = $_POST['horarioDeSuporte'];
    $atendenteExclusivo = $_POST['atendenteExclusivo'];
    $siteExclusivo = $_POST['siteExclusivo'];

    $sql = "UPDATE produto SET 
            descricao   = :descricao,
            horarioDeSuporte   = :horarioDeSuporte,
            atendenteExclusivo = :atendenteExclusivo
            siteExclusivo = :siteExclusivo
            
        WHERE   cliente  = :cliente";

    $stmt = Database::conexao()->prepare($sql);
    $stmt->bindParam(':descricao', $cliente);
    $stmt->bindParam(':horarioDeSuporte', $horarioDeSuporte);
    $stmt->bindParam(':oferece_servicos', $oferece_servicos);

    $stmt->execute();    
    }


?>

<?php
    if(isset($_GET['cliente']) && is_numeric($_GET['cliente'])){
        $cliente = $_GET['cliente'];

        $sql = "SELECT * FROM hotel WHERE cliente = :cliente";

        $stmt = Database::Conexao()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $produto = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
?>

<form method='post' action=''>
cliente:      
<input type="text" name='cliente' value='<?php echo $hotel[0]['cliente']?>'></br>

plano:          
<input type="text" name='plano' value='<?php echo $hotel[0]['plano']?>'></br>
horario De Suporte:     
<input type="text" name='siteExclusivo'></br>

atendente Exclusivo:     
<input type="text" name='siteExclusivo'></br>

site Exclusivo:     
<input type="text" name='siteExclusivo'></br>


<input type='submit' name='botao' value='Salvar'>

</form>
<?php       

    }
    else{
        echo "ID INVÁLIDO"; 
    }
?>
