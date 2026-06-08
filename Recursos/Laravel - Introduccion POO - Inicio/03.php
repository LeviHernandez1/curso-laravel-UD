<?php
include 'includes/header.php';

// Atributos de una clase
// Nivel de abstraccion
class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;
}

$empleado = new Empleado;

// El parametro de fecha es para acceder a los atributos

// var_dump($empleado->nombre);
$empleado->nombre = "Levi";
$empleado->apellido = "Hernandez";


echo "<pre>";
var_dump($empleado);
echo "</pre>";

// crenado una segunta instancia de clase 

$empleado2 = new Empleado;

// El parametro de fecha es para acceder a los atributos

// var_dump($empleado->nombre);
$empleado2->nombre = "Levi Segundo";
$empleado2->apellido = "Hernandez Segundo";


echo "<pre>";
var_dump($empleado2);
echo "</pre>";
