<?php

// Función asort ordena el array alfabeticamente y se mantiene el indice asociado con cada elemento;
$cantantes = ['2pac', 'Drake', 'Jennifer Lopez', 'Antonio Orozco'];
$numeros = [2, 4, 87, 1, 34];
asort($cantantes);

var_dump($cantantes);

echo "<br/>";

// La función sort, hace lo mismo que asort, pero tambien ordena numericamente;
sort($numeros);
var_dump($numeros);
echo "<br/>";

// Función arsort me lo ordena en el orden inverso al abecedario; 

arsort($cantantes);

var_dump($cantantes);

echo "<hr/>";
// Añadir elementos array; (Importante¡¡¡)

$cantantes[] = 'Natos';
array_push($cantantes, "Waor");

array_pop($cantantes);     // Quitar el ultimo indice del array;

unset($cantantes[2]);      // Quita del array el indice que yo le indique que quiero eliminar, en este caso seria el indice número dos;


$indice = array_rand($cantantes);  // Saca el array aleatoriamente;
echo $cantantes[$indice];


echo "<hr/>";

// Reverse (Dar la vuelta);
var_dump(array_reverse($numeros));

echo "<hr/>";
// Array search (Buscar dentro de un array);

$resultado = array_search('Drake', $cantantes);

var_dump($resultado);


echo "<br/>";
// Count (contar número de elementos de un array);

echo count($cantantes);
echo "<br/>";
// sizeof 

echo sizeof($numeros);


// Var_dump sirve para ver elementos tenemos dentro;
var_dump($resultado);
