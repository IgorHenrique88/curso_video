<?php

class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    /*
        METODOS ESPECIAIS
    */

    public function __construct($nome, $idade, $sexo){
        $this-> setNome($nome);
        $this-> setIdade($idade);
        $this-> setSexo($sexo);
    }
    public function setNome($nome){
        $this-> nome = $nome;
    }
    public function getNome(){
        return $this-> nome;
    }
    public function setIdade($idade){
        $this-> idade = $idade;
    }
    public function getIdade(){
        return $this-> idade;
    }
    public function setSexo($sexo){
        $this-> sexo = $sexo;
    }
    public function getSexo(){
        return $this-> sexo;
    }

    // Métodos

    public function fazerAniversario(){
        $this-> setIdade($this-> getIdade() + 1);
    }    
}