<?php
include 'includes/header.php';

// Metodos y propiedades estaticos, no requieren una instancia para poder acceder a ellos.
// En lugar de utlizar this se utiliza self 

class Empleado {
    protected static $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        self::$nombre = $nombre;
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

    public static function obtenerEmpleado()
    {
        echo "Desde método estatico";
    }

    public static function getNombre()
    {
        return self::$nombre;
    }
}

// Empleado::obtenerEmpleado();

$levi = new Empleado('Levi', 'Hernandez', 'TI','levi_mh@mail.com',001 );
echo $levi::getNombre();

echo "<pre>";
var_dump($levi);
echo "</pre><br>";
