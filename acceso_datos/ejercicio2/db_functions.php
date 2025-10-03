<?php

require_once "database.php";

function getAll(){
    $db = getDbConnection();
    $stmt = $db ->prepare("SELECT * FROM empleados");
    $stmt ->setFetchMode(PDO::FETCH_OBJ);
    $stmt -> execute();

    return $stmt->fetchAll();
}

function getById($id){
    $db = getDbConnection();
    $stmt = $db -> prepare("SELECT id FROM empleados WHERE id = :id");
    $stmt ->setFetchMode(PDO::FETCH_OBJ);
    $data = array(
        "id" => $id
    );
    $stmt ->execute($data);
    
    return $stmt ->fetchObject();
}

function insert ($empleado){
    $db = getDbConnection();
    $stmt = $db ->prepare("INSERT INTO empleado (nombre, apellidos, email, dni, sexo, edad, fecha_nacimiento, curriculum)
                            VALUES (:nombre, :apellidos, :email, :dni, :sexo, :edad, :fecha_nacimiento, :curriculum)");
    $stmt->execute($empleado);

}