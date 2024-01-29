<?php

include_once './Reloj.php';

class RelojEstandar extends Reloj{
    
    public function setValue($segundos) {
        //$this->anterior->setValue($this->actual->getValor());
        $this->getActual()->setValue($segundos);
    }

}
