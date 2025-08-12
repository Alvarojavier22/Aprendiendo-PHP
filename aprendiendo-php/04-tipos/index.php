<?php

/*
 * TIPOS DE DATOS:
 * Entero (int/integer) = 99
 * Coma Flotante / decimales (float / double) = 3.45
 * Cadenas (string) = "Hola soy un string"
 * null
 * Array (Colección de datos)
 * Objetos
 */

$numero = 100;
$decimal = 27.9;
$texto = 'Soy un texto \n'. $numero;
$verdadero = true;

echo '<h1>'.gettype($numero).'</h1>';
echo '<h2>'.gettype($decimal).'</h2>';
echo '<h2>'.gettype($texto).'</h2>';
echo $verdadero;
echo "<br>";
echo gettype($texto);

echo $texto;

$mi_nombre [] = "Alvaro";
$mi_nombre [] = "Alvaro";

var_dump($mi_nombre);

?>