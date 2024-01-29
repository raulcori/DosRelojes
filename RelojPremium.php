<?php

include_once './Reloj.php';

class RelojPremium extends Reloj{
    
    public function setValue($segundos) {
        $this->getAnterior()->setValue($this->getActual()->getValor());
        $this->getActual()->setValue($segundos);
    }
    
}
