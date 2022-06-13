<?php
class claseTexto
{
    public $t;

    public function __construct($t)
    {
        $this->t = $t; 
    }

    public function recorrerCadena($letras){

        for ($i=0; $i<strlen($this->t); $i++){
            if  (strpos($letras, $this->t)!== false){
                $c = 0 ;
                return $c=+1 ;
            }else {
                $v = 0 ;
                return $v=+1 ;
            }
        }
    }

    public function letras(){
        //pasar a recorercadena una array con todas las vocales
    }
}
