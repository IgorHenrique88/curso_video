<?php
    require_once 'Lutador.php';

    class Luta{

        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;
         
            
        public function marcarLuta($lutador01, $lutador02){


            if($lutador01->getCategoria() === $lutador02->getCategoria() && ($lutador01 != $lutador02)){
                $this-> aprovada = true;
                $this-> desafiado = $lutador01;
                $this-> desafiante = $lutador02;
                // echo "Luta marcada";
            } else {
                $this-> aprovada = false;
                $this-> desafiado = null;
                $this-> desafiante = null;
            }
        }
        public function lutar(){
            if($this-> getAprovada()){
                $this-> desafiado->apresentar();
                $this-> desafiante->apresentar();
                $vencedor = rand(0,2);
                switch($vencedor){
                    case 0:
                        echo "<p>Empatou</p>";
                        $this-> desafiante->empatarLuta();
                        $this-> desafiado->empatarLuta();
                        break;                    
                    case 1:
                        echo "<p>O lutador ".$this->desafiado->getNome()." ganhou</p>";
                        $this-> desafiado-> ganharLuta();
                        $this-> desafiante-> perderLuta();
                        break;
                    case 2:
                        echo "<p>O lutador ".$this->desafiante->getNome()." ganhou</p>";
                        $this-> desafiado-> perderLuta();
                        $this-> desafiante-> ganharLuta();
                        break;
                }
            } else {
                echo "<p>Luta não pode acontecer</p>";
            }

        }

        /*Métodos Especiais*/
        public function setDesafiado($desafiado){
            $this-> desafiado = $desafiado;
        }
        public function getDesafiado(){
            return $this-> desafiado;
        }
        public function setDesafiante($desafiante){
            $this-> desafiante = $desafiante;
        }
        public function getDesafiante(){
            return $this-> desafiante;
        }
        public function setRounds($rounds){
            $this-> rounds = $rounds;
        }
        public function getRounds(){
            return $this-> rounds;
        }
        public function setAprovada($aprovada){
            $this-> aprovada = $aprovada;
        }
        public function getAprovada(){
            return $this-> aprovada;
        }

    }
