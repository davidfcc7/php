<?php

# ------------------------  ASIGNACION  ------------------------------- #
$num = 9; # asignacion simple
$language = [ # asignacion compleja
    'es' => 'espanish',
    'en' => 'english'
];

# ------------------------  ARITMETICA  ------------------------------- #
/**
 * echo se utiliza para mostrar resultados en pantall
 * . concatena valores
 * (int) declara que nuestro valor es un entero
 */
echo 'suma 2+2: ' . ((int) 2 + (int) 2); 
echo 'resta 2-2: ' . ((int) 2 - (int) 2); 
echo 'multiplicacion 2*2: ' . ((int) 2 * (int) 2); 
echo 'divicion 2/2: ' . ((int) 2 / (int) 2);
echo 'modulo 2%2: ' . ((int) 2 % (int) 2); 
echo 'exponencial 2**2: ' . ((int) 2 ** (int) 2);  

# ------------------------  COMPARACION  ------------------------------- #
//'9' == 9 true
//'9' === 9 false, por que los valores no son del mismo tipo
//'9' != 9 no es igual
//'9' !== 9 no es exactamente igual (valor ni tipo)

# ------------------------  VARIABLES VARIABLES  ------------------------------- #
$app = 'name';
$name = 'david';

echo $app; // name
echo $$app; // david