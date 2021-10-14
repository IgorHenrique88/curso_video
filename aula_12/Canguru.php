<?php

require_once 'Animal.php';

class Canguru extends Mamifero{
    public function usarBolsa(){
        echo "Estou usando a bolsa";
    }
    public function locomover(){
        echo "Pulando";
    }
}