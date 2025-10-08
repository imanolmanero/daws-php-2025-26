<?php 

require_once "publicacion.php";

$p1 = new publicacion("Juan" , 2002, "santillana", "El gato con botas", "gatos");
$p2 = new publicacion("Ana" , 2010, "santillana", "El perro con botas", "perros");

echo $p1->leer();
echo "<br>";
echo $p1->escribir("y ratones");
echo "<br>";
echo $p1-> verTitulo();

echo "<hr>";

echo $p2->leer();
echo "<br>";
echo $p2->escribir("y gatos");
