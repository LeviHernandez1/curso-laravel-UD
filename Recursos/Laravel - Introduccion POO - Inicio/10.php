<?php
include 'includes/header.php';

// Herencia
class Empleado {
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;
    protected $codigo;
    protected $departamento;

    // Constructores 
    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }
    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . "Email: " . $this->email;
    }
}

class Provedor  {
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;
    protected $empresa;

    // Constructores 
    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->empresa = $empresa;
    }

    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . "Email: " . $this->email;
    }
}

$empleado = new Empleado('Levi','Hernandez', 'Levi_hernandez@mail.com', '5599009900', '12','TI');
$provedor = new Provedor('Empleado1','Apeliido Provedor', 'empresa_numero@mail.com','5599889988','Empresa');

echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($provedor);
echo "</pre><br>";

$empleado->mostrarInformacion(); 
echo "</pre><br>";
$provedor->mostrarInformacion();