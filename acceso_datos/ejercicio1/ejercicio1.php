<?php 
// Datos de conexión
$host = "localhost";
$user = "root";     
$pass = "";          
$dbname = "lista_compra"; 

//Conectar a la base de datos 
function connect($host, $dbname, $user, $pass){
    try{
        # MySQL
        $dbh= new PDO ("mysql:host=$host;dbname=$dbname", $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

try{
    $dbh = connect($host, $dbname, $user, $pass);

    //Añadir prdocuto
    if(isset($_POST['agregar']) && !empty($_POST['nuevo'])){
        $sqlInsert = "INSERT INTO productos (nombre) 
                        VALUES (:nombre)";
        $stmt = $dbh->prepare($sqlInsert);
        $stmt-> execute([':nombre' => $_POST['nuevo']]); 
    }

    //Eliminar prdocto 
    if(isset($_GET['eliminar'])){
        $sqlDelete = "DELETE FROM productos where id = :id";
        $stmt = $dbh->prepare($sqlDelete);
        $stmt ->execute([':id' => $_GET['eliminar']]);
    }

    //Vaciar lista 
    if(isset($_GET['vaciar'])){
        $dbh->exec("TRUNCATE TABLE productos");
    }

    //Seleccionar todos los productos
    $stmt = $dbh ->query("SELECT * FROM productos order by id ASC");
    $productos = $stmt -> fetchAll((PDO::FETCH_ASSOC));


    include "ejercicio1.view.php";

}catch (PDOException $e){
    echo "Error en la conexion o consulta: " . $e->getMessage();
}

?>