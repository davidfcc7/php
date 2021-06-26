<?php

echo 'las comillas simples le utilizan para
escribir texto y 
varias lineas de parrafo para mantener organizano es codigo <br>';

$nombre = 'david';
echo "las comillas dobles se usan para concatenar mi nombre: $nombre <br>";

$cursos = ['wordpress' => 'php', 'css', 'html'];
class profesional{
    public $name = 'david';
}
$user = new profesional;
echo "$user->name quiere aprender {$cursos['wordpress']}<br>";

$estudiante = 'david';
$david = 'estudiante de Platzi';
echo "$estudiante es ${$estudiante}<br>";

function getEstudiante (){
    return 'alumno';
}
$alumno = 'david';
echo "${getEstudiante()} aprende PHP";
