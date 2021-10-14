<?php

class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitoria;
    private $derrota;
    private $empate;
    private $dtLuta;

    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitoria, $derrota, $empate, $dtLuta){
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitoria($vitoria);
        $this->setDerrota($derrota);
        $this->setEmpate($empate);
        $this->setDtLuta($dtLuta);
    }

    public function getNome(){
        return $this-> nome;
    }
    public function setNome($nome){
        $this-> nome = $nome;
    }
    public function getNacionalidade(){
        return $this-> nacionalidade;
    }
    public function setNacionalidade($nacionalidade){
        $this-> nacionalidade = $nacionalidade;
    }
    public function getIdade(){
        return $this-> idade;
    }
    public function setIdade($idade){
        $this-> idade = $idade;
    }
    public function getAltura(){
        return $this-> altura;
    }
    public function setAltura($altura){
        $this-> altura = $altura;
    }
    public function getPeso(){
        return $this-> peso;
    }
    public function setPeso($peso){
        $this-> peso = $peso;
        $this->setCategoria();
    }
    public function getCategoria(){
        return $this-> categoria;
    }
    public function setCategoria(){
        if($this->getPeso() < 52.2){
            $this-> categoria = 'Invalido';
        } elseif ($this->getPeso() <= 70.3) {
            $this-> categoria = 'Leve';
        } elseif ($this->getPeso() <= 83.9){
            $this-> categoria = 'Médio';
        } elseif ($this->getPeso() <= 120.2) {
            $this-> categoria = 'Pesado';
        } else {
            $this-> categoria = 'Invalido';
        }
    }
    public function getVitoria(){
        return $this-> vitoria;
    }
    public function setVitoria($vitoria){
        $this->vitoria  = $vitoria;
    }
    public function getDerrota(){
        return $this-> derrota;
    }
    public function setDerrota($derrota){
        $this-> derrota = $derrota;
    }
    public function getEmpate(){
        return $this-> empate;
    }
    public function setEmpate($empate){
        $this-> empate = $empate;
    }
    public function getDtLuta(){
        return $this-> dtLuta;
    }
    public function setDtLuta($dtLuta){
        $this-> dtLuta = $dtLuta;
    }





    public function ganharLuta(){
        $this->setVitoria($this->getVitoria() + 1);
    }
    public function perderLuta(){
        $this->setDerrota($this->getDerrota() + 1);
    }
    public function empatarLuta(){
        $this->setEmpate($this->getEmpate() + 1);
    }

    public function apresentar(){
        echo "<p>LUTADOR</p><br>";
        echo "<p>------------------------------------</p>";
        echo "<br>Lutador: " . $this-> getNome();
        echo "<br>Nacionalidade: " . $this-> getNacionalidade();
        echo "<br>Idade: " . $this-> getIdade();
        echo "<br>Altura: " . $this-> getAltura();
        echo "<br>Peso: " . $this-> getPeso();
        echo "<br>Categoria: " . $this-> getCategoria();
        echo "<br>Vitórias: " . $this-> getVitoria();
        echo "<br>Derrotas: " . $this-> getDerrota();
        echo "<br>Empates: " . $this-> getEmpate();
        echo "<br>Ultima luta: " . $this-> getDtLuta();
    }
    
    public function status(){
    echo "<p>";
    echo "Lutador: " .$this-> getNome(). " com peso: ".$this-> getPeso()." Categoria: ".$this-> getCategoria();
    echo "</p>";
    }

    public function periodoOff(){
        $this-> setPeso($this-> getPeso() + 15);
    }

    public function preparacao(){
        $this-> setPeso($this->getPeso() - 15);
    }
}