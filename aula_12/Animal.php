<?php

abstract class Animal {
    protected $peso;
    protected $idade;
    protected $membro;

    abstract public function locomover();
    abstract public function alimentar();
    abstract public function emitirSom();

    public function setPeso($peso){
        $this-> peso = $peso;
    }
    public function setIdade($idade){
        $this-> idade = $idade;
    }
    public function setMembro($membro){
        $this-> membro = $membro;
    }
    public function getPeso(){
        return $this-> peso;
    }
    public function getIdade(){
        return $this-> idade;
    }
    public function getMembro(){
        return $this-> membro;
    }


}