<?php
/*
    O metodo $this serve para referenciar um objeto que está chamando um método
    No exemplo a baixo consigo ver que o this é o objeto caneta01.
*/
class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    protected $tampada;
    protected $carga;

    //Duas formas de declarar um contrutor, pode ser pelo nome __construct() ou  com o nome da propria classe no exemplo Caneta()
    // public function __construct(){
    //     $this-> cor = "Azul";
    //     $this->tampada();
    // }
    // public function Caneta(){
    //     $this-> cor = "Azul";
    //     $this->tampada();
    // }

    public function Caneta($m, $c, $p){
        $this-> modelo = $m;
        $this-> cor = $c;
        $this-> ponta = $p;
    }

    public function tampada(){
        $this-> tampada = true;
    }

    public function getModelo(){
        return $this-> modelo;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getCor(){
        return $this-> cor;
    }

    public function setCor($c){
        $this->cor = $c;
    }

    public function getPonta(){
        return $this-> ponta;
    }

    public function setPonta($p){
        $this->ponta = $p;
    }

    public function getTampada(){
        return $this-> tampada;
    }

    public function setTampada($t){
        $this->tampada = $t;
    }

    public function getCarga(){
        return $this-> carga;
    }

    public function setCarga($c){
        $this->carga = $c;
    }
}

class Celular {
    private $marca;
    private $modelo;
    private $cor;
    private $camera;
    private $polegada;
    private $digital;
    private $ligado;
    private $desligado;

    public function __construct($mar, $mod, $pol){
        $this->setMarca($mar); 
        $this->setModelo($mod);
        $this->setPolegada($pol); 
    }

    public function ligar(){
        $this-> ligado = true;
    }
    public function desligar(){
        $this-> desligado = true;
    }

    public function getMarca(){
        return $this-> marca;
    }
    public function setMarca($mar){
        $this-> marca = $mar;
    }
    public function getModelo(){
        return $this-> modelo;
    }
    public function setModelo($mod){
        $this-> modelo = $mod;
    }
    public function getCamera(){
        return $this-> camera;
    }
    public function setCamera($cam){
        $this-> camera = $cam;
    }
    public function getCor(){
        return $this-> cor;
    }
    public function setCor($cor){
        $this-> cor = $cor;
    }
    public function getPolegada(){
        return $this-> polegada;
    }
    public function setPolegada($pol){
        $this-> polegada = $pol;
    }
    public function getDigital(){
        return $this-> digital;
    }
    public function setDigital($dig){
        $this-> digital = $dig;
    }
    public function getLigado(){
        return $this-> ligado;
    }
    public function setLigado($lig){
        $this-> ligado = $lig;
    }
    public function getDesligado(){
        return $this-> desligado;
    }
    public function setDesligado($des){
        $this-> desligado = $des; 
    }
}