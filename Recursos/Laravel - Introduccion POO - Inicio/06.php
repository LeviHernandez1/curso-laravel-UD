<?php
include 'includes/header.php';

// Constructor property promotion
class Empleado {
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    )
    {
        
    }
}


$empleado = new Empleado('Levi', 'Hernandez', 'TI','levi_mh@mail.com',001 );
$empleado2 = new Empleado('Levi Segundo', 'Hernandez Segundo', 'Compras','levi_mh_segundo@mail.com',002 );

echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";
