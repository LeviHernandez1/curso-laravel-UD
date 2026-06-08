<?php
include 'includes/header.php';

// Metodos
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

        // Para mandar a llamar dentro del constructor
        // $this->nombreEmpleado();
    }
    public function nombreEmpleado()
    {
        echo $this->nombre . " " . $this->apellido;
    }

    public function departamentoEmpleado()
    {
        return $this->departamento;
    }
}

$levi = new Empleado('Levi', 'Hernandez', 'TI','levi_mh@mail.com',001 );
// $levi->nombreEmpleado();

$empleado2 = new Empleado('Levi Segundo', 'Hernandez Segundo', 'Compras','levi_mh_segundo@mail.com',002 );


echo "<pre>";
var_dump($levi);
echo "</pre><br>";

echo "<pre>";
var_dump($empleado2);
echo "</pre><br>";

// echo $levi->nombreEmpleado();
// echo $empleado2->nombreEmpleado();
$departamento1 = $levi->departamentoEmpleado();
echo $departamento1;
