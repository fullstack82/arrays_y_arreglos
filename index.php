<?php
/* 
    ARRAYS : Un array es un conjunto de variables de una misma clase. Se accede a cada elemento individual del array mediante un número 
* entero denominado indice. 0 es el indice o localizador del primer elemento y es n-1 es el indice del último elemento, siendo N la dimensión,
* tamaño o longitud del array. Así $empleado[123] representaria al empleado con un localizador 23 como veremos a continuación;
* 
* Los arrays son muy utilizados en la programación. Dependiendo de la cantidad de dimensiones que tengan pueden ser:
* - De una dimensión (vectores). Por ejemplo $empleado[23];
* - De dos dimensiones (matrices). Por ejemplo $butaca[3, 14];
* - De tres o más dimensiones (multidimensionales). POr ejemplo: $fecha[2021,02,01];
*
*
* Para acceder a los elementos del array se utilizan los corchetes[], dentro de los cuales existirá un localizador o indice que es un número
* entero. Además, podemos guardar valores de cualquier tipo de variable (string, entero, punto flotante, booleano) dentro de un array. Por 
* ejemplo $empleado[23] podria tomar como valor $empleado[23] = " Maria leonor pinto ". En este caso se trataria de un array de cadenas de texto,
* es decir, un array de string. En otro caso $empleado[23] podria tomar como valor $empleado[23] = 2312. En este caso se trataria de un array de 
* valores númericos.
*/




// Ejercicios array

$peliculas = array('batman', 'up', 'atlantis');
$cantantes = ['maluma', 'prince roice', 'shakira'];


//Recorrer con For;
echo "<h1>Listado de peliculas</h1>";

echo "<ul>";

for ($i = 0; $i < count($peliculas); $i++) {
    echo "<li>" . $peliculas[$i] . "</li>";
}

echo "</ul>";

// Recorrer con Foreach; Este bucle esta espacialmente diseñado para recorrer arrays;

echo "<h1>Listado de cantantes</h1>";

echo "<ul>";


foreach ($cantantes as $cantante) {
    echo "<li>" . $cantante . "</li>";
}

echo "</ul>";


// Arrays asociativos;

$personas = array(
    'nombre' => 'Maria',
    'apellidos' => 'pinto',
    'edad' => 38
);


echo $personas['apellidos'];



// Arrays multidimensionales;   Importantes para trabajar con bases de datos;

$contactos = array(
    array(
        'nombre' => 'Lucia',
        'apellidos' => 'pinto',
        'edad' => 45
    ),
    array(
        'nombre' => 'Maria',
        'apellidos' => 'castro',
        'edad' => 16
    ),
    array(
        'nombre' => 'Marta',
        'apellidos' => 'sanchez',
        'edad' => 25
    ),
    array(
        'nombre' => 'Lucas',
        'apellidos' => 'lopez',
        'edad' => 65
    ),
    array(
        'nombre' => 'luisa',
        'apellidos' => 'sabater',
        'edad' => 56
    ),
);
echo "<br/>";

foreach ($contactos as $key => $contacto){     // Hemos accedido al primer indice, luego estamos accediendo de manera fija a los elementos que hay dentro de los arrays;
    var_dump($contacto['nombre']);             // No podemos agregar numeros, es un array asociativo;
}
