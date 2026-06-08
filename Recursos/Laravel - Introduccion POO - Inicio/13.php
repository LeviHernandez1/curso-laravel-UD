<?php
include 'includes/header.php';
include 'DB.php';

// Comunicar dos o mas clases
class Empleado {
    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;

    // Metodo magico
    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
        
    }

    /* 
        Get - Para obtener un valor
        Set - Para modificar un valor
    */

    // Nombre
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    // Apellido
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    // Codigo
    public function getCodigo()
    {
        return $this->codigo;
    }
    // Departamento
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    }
    public function getDepartamento()
    {
        return $this->departamento;
    }
    // Correo electronico
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }


    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
}

$levi = new Empleado('Levi', 'Hernandez', 'TI','levi_mh@mail.com',001 );

$nombre = $levi->getNombre();
//echo $nombre;

$db = new DB($nombre);
// var_dump($db);
$db->guardar();