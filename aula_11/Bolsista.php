<?php
require_once 'Aluno.php';

class Bolsista extends Aluno{
    private $bolsa;

    public function setBolsa($bolsa){
        $this-> bolsa = $bolsa;
    }
    public function getBolsa(){
        return $this-> bolsa;
    }
    public function renovarBolsa(){
        echo "Bolsa renovada";
    }

    public function pagarMensalidade(){
        echo "Pagar mensalidade bolsista";
    }
}