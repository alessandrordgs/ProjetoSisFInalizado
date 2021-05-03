<?php include('config/DB.php');?>

<?php
if(isset($_POST["buttonServicos"]) && $_POST["buttonServicos"] == "Salvar" ){ 
    $cafe_manha_gratis = $_POST['cafe_manha_gratis'];
    $almoco_gratis = $_POST["almoco_gratis"];
    $passeios = $_POST['passeios'];
    $wifi_gratuito = $_POST['jantar'];
    $wifi_gratuito = $_POST['wifi_gratuito'];

    $sql = "UPDATE produto SET 
            descricao   = :descricao,
            cidade   = :cidade,
            jantar = :jantar
            wifi_gratuito = :wifi_gratuito
            
        WHERE   cafe_manha_gratis  = :cafe_manha_gratis";

    $stmt = Database::conexao()->prepare($sql);
    $stmt->bindParam(':descricao', $cafe_manha_gratis);
    $stmt->bindParam(':cidade', $cidade);
    $stmt->bindParam(':oferece_servicos', $oferece_servicos);

    $stmt->execute();    
    }


?>

<?php
    if(isset($_GET['cafe_manha_gratis']) && is_numeric($_GET['cafe_manha_gratis'])){
        $cafe_manha_gratis = $_GET['cafe_manha_gratis'];

        $sql = "SELECT * FROM hotel WHERE cafe_manha_gratis = :cafe_manha_gratis";

        $stmt = Database::Conexao()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $produto = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
?>

<form method='post' action=''>
cafe manha gratis:      
<input type="text" name='cafe_manha_gratis' value='<?php echo $hotel[0]['cafe_manha_gratis']?>'></br>

almoco gratis:          
<input type="text" name='almoco_gratis' value='<?php echo $hotel[0]['almoco_gratis']?>'></br>
passeios:     
jantar:     
<input type="text" name='wifi_gratuito'></br>
wifi gratuito:     
<input type="text" name='wifi_gratuito'></br>



</form>
<?php       

    }
    else{
        echo "ID INVÁLIDO"; 
    }
?>
