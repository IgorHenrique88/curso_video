<?php
/*
    O metodo $this serve para referenciar um objeto que está chamando um método
    No exemplo a baixo consigo ver que o this é o objeto caneta01.
*/
class Caneta {
    public $modelo;
    private $cor;
    private $ponta;
    protected $tampada;
    protected $carga;


    function rabiscar(){
        echo 'Estou rabiscando';
    }
    function tampar(){
        $this-> tampada = true;
    }
    function destampar(){
        $this-> tampada = false;
    }
}


class Agenda {
    public $dia;
    private $marcado;
    private $mes;
    private $ano;
    private $status;


    function marcar(){
        $this-> $marcado = true;
    }
    function desmarcar(){
        $this->$marcado = false;
    }
}