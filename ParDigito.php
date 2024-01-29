<?php

include_once './Digito.php';

class ParDigito {
    
    const NON_VALUE = -1;
    private $valor;
    private $decena;
    private $unidad;
    
    
    public function __construct($valor = self::NON_VALUE) {
        $this->decena = new Digito();
        $this->unidad = new Digito();
        $this->setValues($valor);
    }
    
    public function setValues($valor){
        $this->valor = $valor;
        if($valor == self::NON_VALUE){
            $this->decena->setValue(Digito::NON_VALUE);
            $this->unidad->setValue(Digito::NON_VALUE);
        } else {
            $decenas = $this->getDecenas($valor);
            $unidades = $this->getUnidades($valor);
            $this->decena->setValue($decenas);
            $this->unidad->setValue($unidades);
        }
    }
    
    private function getDecenas($numero){
        return floor($numero/10);
    }
    
    private function getUnidades($numero){
        return $numero - $this->getDecenas($numero)*10;
    }
    
    
    public function costo(ParDigito $anterior){
        $costo = 0;
        $costo += $this->decena->costo($anterior->decena);
        $costo += $this->unidad->costo($anterior->unidad);
        return $costo;
    }
    
    public function getValor(){
        return $this->valor;
    }
    
}
