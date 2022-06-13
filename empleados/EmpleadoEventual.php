<?php
require_once "Empleado.php";

class EmpleadoEventual extends Empleado
{
    private $ventas;
    public const PORCENTAJE = 5 ;

    public function __construct($nombre, $apellido, $dni, $salario, Array $ventas)
    {
        parent::__construct($nombre, $apellido, $dni, $salario);
        $this->ventas = $ventas;
        //TODO: Construir el método constructor
        // ATENCIÓN: Tener en cuenta que en $ventas llega un Array (llamado
        // $_POST['ventas'] en el archivo verDatos.php
    }

    public function calcularComision() {
        // TODO: Construir este método
        return array_sum($this->ventas)*EmpleadoEventual::PORCENTAJE/100;
    }
    
    public function calcularIngresoTotal() {
        // TODO: Construir este método 
        return $this->calcularComision() + $this->salario;
    }
}
