<?php 
// Datos de conexión
$host = "localhost";
$user = "root";     
$pass = "";          
$dbname = "lista_compra"; 

//Conectar a la base de datos 
try{
    $dbh= new PDO ("mysql:host=$host;dbname=$dbname", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;

}catch(PDOException $e){
    echo $e->getMessage();
}

?>