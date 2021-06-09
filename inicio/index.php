<?php
 // para realizar comentario
 # mas comentarios
 // todas las declarciones deben finalizar con ";" para comenzar la siguiente linea
 /**
  * para comentar varias lineas
  * -> para hacer varias lineas de comentarios
  * debemos comentar el codigo que hagamos para dar a entender el codigo a futuros programadores
 */

// Asignacion

$num = 9;
$lang = [
    'es' => 'español', // => se usa para arreglos asociativos
    'en' => 'ingles'
];

// Aritmetica
echo "suma: ".((int) 2 + (int) 2); //sumar dos numeros enteros
echo "resta: ".((int) 2 - (int) 2); //resta dos numeros enteros
echo "multiplica: ".(2*2); // multiplica dos valores
echo "divide: ".(2/2); # divide dos valores
echo "modulo: ".(3%2); # me arroja el residuo de una division
echo "exponencial: ".(2**2); # me arroja el valor de un exponente

//comparacion
valor '9' == 9 //compara el valor del dato
valor '9' === 9 // compara el valor del dato y tambien el tipo
diferencia != de valor
diferencia !== de valor y tipo

// Variables variables
$nombre = 'david';
$david = 'estudiante';

echo $nombre; // -> david
echo $$nombre; // -> estudiante

?>