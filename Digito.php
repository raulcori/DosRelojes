<?php

class Digito {
    
    
    const NON_VALUE = -1;
    private $value;
    private $izquierda_arriba = 0;
    private $izquierda_abajo  = 0;
    private $arriba           = 0;
    private $medio            = 0;
    private $abajo            = 0;
    private $derecha_arriba   = 0;
    private $derecha_abajo    = 0;
    
    
    public function __construct($numero = self::NON_VALUE) {
        $this->setValue($numero);
    }
    
    
    public function setValue($numero){
        $this->value = $numero;
        switch ($numero) {
            case 0: $this->setSegmentos(1, 1, 1, 0, 1, 1, 1);break;
            case 1: $this->setSegmentos(0, 0, 0, 0, 0, 1, 1);break;
            case 2: $this->setSegmentos(0, 1, 1, 1, 1, 1, 0);break;
            case 3: $this->setSegmentos(0, 0, 1, 1, 1, 1, 1);break;
            case 4: $this->setSegmentos(1, 0, 0, 1, 0, 1, 1);break;
            case 5: $this->setSegmentos(1, 0, 1, 1, 1, 0, 1);break;
            case 6: $this->setSegmentos(1, 1, 1, 1, 1, 0, 1);break;
            case 7: $this->setSegmentos(0, 0, 1, 0, 0, 1, 1);break;
            case 8: $this->setSegmentos(1, 1, 1, 1, 1, 1, 1);break;
            case 9: $this->setSegmentos(1, 0, 1, 1, 1, 1, 1);break;
            case self::NON_VALUE: 
                $this->setSegmentos(0, 0, 0, 0, 0, 0, 0);break;
        }
    }
    
    private function setSegmentos($izquierda_arriba, $izquierda_abajo, $arriba, $medio, 
            $abajo, $derecha_arriba, $derecha_abajo) 
    {
        $this->izquierda_arriba = $izquierda_arriba;
        $this->izquierda_abajo = $izquierda_abajo;
        $this->arriba = $arriba;
        $this->medio = $medio;
        $this->abajo = $abajo;
        $this->derecha_arriba = $derecha_arriba;
        $this->derecha_abajo = $derecha_abajo;
    }
    
    public function __toString() {
        return "$this->izquierda_arriba, $this->izquierda_abajo, $this->arriba, "
                . "$this->medio, $this->abajo, $this->derecha_arriba, "
                . "$this->derecha_abajo";
    }
    
    public function costo(Digito $anterior){
        //echo "<br/> actual $this, anterior $anterior";
        $costo = 0;
        
        if( ! $anterior->izquierda_arriba  &&  $this->izquierda_arriba){
            $costo++;
        }
        
        if( ! $anterior->izquierda_abajo  &&  $this->izquierda_abajo){
            $costo++;
        }
        
        if( ! $anterior->arriba  &&  $this->arriba){
            $costo++;
        }
        
        if( ! $anterior->medio  &&  $this->medio){
            $costo++;
        }
        
        if( ! $anterior->abajo  &&  $this->abajo){
            $costo++;
        }
        
        if( ! $anterior->derecha_arriba  &&  $this->derecha_arriba){
            $costo++;
        }
        
        if( ! $anterior->derecha_abajo  &&  $this->derecha_abajo){
            $costo++;
        }
        
        return $costo;
    }
    
}
