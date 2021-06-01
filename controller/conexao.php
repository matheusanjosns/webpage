<?Php 
try {

    $conn = new PDO("mysql:dbname=mydb;port=3308,host=localhost","root","");
    echo"Banco conectado";
}
catch(PDOException $e){

    echo"Erro conexão com o banco de dados: ".$e->getMessage();
    
}
catch(Exception $e){
 
    echo"Erro generico".$e->getMessage();
    
}
/*$stmt = $conn->prepare("select * from produto");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row) {
        foreach ($row as $key => $value) {
            echo"<strong>".$key .":</strong>".$value."<br/>";
            
        }
        echo"------------------------<br/>";
    }
*/
?>