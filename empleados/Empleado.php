<?php

abstract class Empleado
{

    protected $nombre;
    protected $apellido;
    protected $sector;
    protected $salario;
    protected $dni;

    public function __construct($nombre, $apellido, $dni, $salario)
    {
        //TODO: Construir el método constructor
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->salario = $salario;

    }
    public function getNombreApellido() 
    {
        return $this->nombre . " " . $this->apellido;
    }

    public function getDNI()
    {
        return $this->dni;
    }
    
    public function getSalario()
    {
        return $this->salario;
    }

    public function setSector($sector) {
        $this->sector = $sector;
    }
    public function __toString() 
    {
        return "DNI: " . $this->dni . " nombre completo: " . $this->nombre . " " . $this->apellido;
    }
}