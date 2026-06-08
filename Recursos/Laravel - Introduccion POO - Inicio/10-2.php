<?php
include 'includes/header.php';

//Herencia donde dos roles comparten algunas caracteristicas en el sistema y se eredan 
class Persona {
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

    public function __construct($nombre, $apellido, $email, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . "Email: " . $this->email;
    }
}

// Herencia
class Empleado extends Persona{
    protected $codigo;
    protected $departamento;

    // Constructores 
    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }
}

class Provedor extends Persona {
    protected $empresa;

    // Constructores 
    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre, $apellido, $email, $telefono, $empresa);
        $this->empresa = $empresa;
    }
    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . "Email: " . $this->email . " Trabajador de la empresa: ". $this->empresa;
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
echo "</pre><br><br>";
$provedor->mostrarInformacion();