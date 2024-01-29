<?php

include_once './ParDigito.php';

class Timer {
    
    
    const NON_VALUE = -1;
    private $valor;
    private $hora;
    private $minuto;
    private $segundo;
    
    
    public function __construct($valor = self::NON_VALUE) {
        $this->hora = new ParDigito();
        $this->minuto = new ParDigito();
        $this->segundo = new ParDigito();
        $this->setValue($valor);
    }

    
    public function setValue($segundosHMS = self::NON_VALUE){
        $this->valor = $segundosHMS;
        if($segundosHMS == self::NON_VALUE){
            $this->hora->setValues(ParDigito::NON_VALUE);
            $this->minuto->setValues(ParDigito::NON_VALUE);
            $this->segundo->setValues(ParDigito::NON_VALUE);
        }else{
            $horas = floor($segundosHMS/3600);
            $segundosMS = $segundosHMS - $horas*3600;
            $minutos = floor($segundosMS/60);
            $segundosS = $segundosMS - $minutos*60;
            $this->hora->setValues($horas);
            $this->minuto->setValues($minutos);
            $this->segundo->setValues($segundosS);
        }
    }
    
    public function getValor(){
        return $this->valor;
    }
    
    public function costo(Timer $anterior){
        $costo = 0;
        $costo += $this->hora->costo($anterior->hora);
        $costo += $this->minuto->costo($anterior->minuto);
        $costo += $this->segundo->costo($anterior->segundo);
        return $costo;
    }
    
}
