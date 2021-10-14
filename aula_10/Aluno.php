<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    public function setMatricula($matricula){
        $this-> matricula = $matricula;
    }
    public function getMatricula(){
        return $this-> matricula;
    }
    public function setCurso($curso){
        $this-> curso = $curso;
    }
    public function getCurso(){
        return $this-> curso;
    }

    public function cancelarMatricula(){
       if($this-> getMatricula()){
           $this-> setMatricula(false);
       }  else {
           echo "Mátricula já está cancelada.";
       }
    } 

    public function reativarMatricula(){
        if($this-> getMatricula() == false){
            $this-> setMAtricula(true);
        } else {
            echo "Mátricula já está aberta.";
        }
    }
}