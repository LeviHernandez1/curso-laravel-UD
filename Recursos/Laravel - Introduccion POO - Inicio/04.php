<?php
include 'includes/header.php';

// Constructores
class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    // Metodo magico
    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        // echo "Desde el constructor";
        // Atributos intenrnos con flecha 
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
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
