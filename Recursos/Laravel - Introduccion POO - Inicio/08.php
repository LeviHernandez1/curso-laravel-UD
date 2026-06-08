<?php
include 'includes/header.php';

// Modificadores de Acceso
// Public, Private, Protected

// PUBLIC: Acceder a sus valores desde la clase o desde sus instancias "cualquier lugar", el programa es ,mas avierto
// PROTECTED: Aceeso desde la clase
// PRIVATE: 

class Empleado {
    protected $nombre;
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
    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function cambiarNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}

$levi = new Empleado('Levi', 'Hernandez', 'TI','levi_mh@mail.com',001 );
//$levi->nombre = "Levi cambiado";
$levi->cambiarNombre("Levi cambiado 2");

// echo $levi->nombre . "*";
echo $levi->obtenerNombre() . " / Desde un protegido";

echo "<pre>";
var_dump($levi);
echo "</pre><br>";


