<?php

include_once './Timer.php';

abstract class Reloj {
    
    
    private $anterior;
    private $actual;
    
    
    function __construct() {
        $this->anterior = new Timer();
        $this->actual = new Timer();
    }

    
    public abstract function setValue($segundos);
    
    
    public function costo(){
        return $this->actual->costo($this->anterior);
    }
    
    public function getGastoEnergetico($segundos){
        $this->actual->setValue();
        $this->anterior->setValue();
        $gasto = 0;
        for ($i = 0; $i <= $segundos; $i++) {
            $this->setValue($i);
            $gasto += $this->costo();
            //echo '<br/> i '.$i.' gasto = '.$gasto;
        }
        
        return $gasto;
    }
    
    
    
    public function getActual(){
        return $this->actual;
    }
    
    public function getAnterior(){
        return $this->anterior;
    }
    
}
