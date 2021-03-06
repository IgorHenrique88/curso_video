<?php

require_once 'Pessoa.php';


class Funcionario extends Pessoa{
    private $setor;
    private $trabalhando;

    public function setSetor($setor){
        $this-> setor = $setor;
    }
    public function getSetor(){
        return $this-> setor;
    }
    public function setTrabalhando($trabalhando){
        $this-> trabalhando = $trabalhando;
    }
    public function getTrabalhando(){
        return $this-> trabalhando;
    }

    public function iniciarTrabalho(){
        $this-> setTrabalhando(true);
    } 

    public function terminarTrabalho(){
        $this-> setTrabalhando(false);
    }
}