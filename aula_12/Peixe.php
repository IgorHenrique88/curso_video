<?php

require_once 'Animal.php';

class Peixe extends Animal{
    private $corEscama;

    public function setCorEscama($corEscama){
        $this-> corEscama = $corEscama;
    }
    public function getCorEscama(){
        return $this-> corEscama;
    }
    public function locomover(){
        echo "<p>Rastejando</p>";
    }
    public function alimentar(){
        echo "<p>Comendo substancias</p>";
    }
    public function emitirSom(){
        echo "<p>Peixa não faz som</p>";
    }
    public function soltarBolha(){
        echo "Soltou bolha";
    }





}