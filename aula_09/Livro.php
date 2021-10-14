<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAberta;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totPaginas, $leitor){
        $this-> setTitulo($titulo);
        $this-> setAutor($autor);
        $this-> setTotPaginas($totPaginas);
        $this-> setLeitor($leitor);
        $this-> setAberto(false);
        $this-> setPagAberta(0);
    }

    public function setTitulo($titulo){
        $this-> titulo = $titulo;
    }
    public function getTitulo(){
        return $this-> titulo;
    }
    public function setAutor($autor){
        $this-> autor = $autor;
    }
    public function getAutor(){
        return $this-> autor;
    }
    public function setTotPaginas($totPaginas){
        $this-> totPaginas = $totPaginas;
    }
    public function getTotPaginas(){
        return $this-> totPaginas;
    }
    public function setPagAberta($pagAberta){
        $this-> pagAberta = $pagAberta;
    }
    public function getPagAberta(){
        return $this-> pagAberta;
    }
    public function setAberto($aberto){
        $this-> aberto = $aberto;
    }
    public function getAberto(){
        return $this-> aberto;
    }
    public function setLeitor($leitor){
        $this-> leitor = $leitor;
    }
    public function getLeitor(){
        return $this-> leitor;
    }
    public function detalhe(){
        $status = $this-> getAberto() == true ? "Aberto": "Fechado";
        echo "<br>------- Detalhes do Livro -------<br>";
        echo "Nome do livro: ".$this-> getTitulo()."<br>";
        echo "Autor: ".$this-> getAutor()."<br>";
        echo "Quantidade de Páginas: ".$this-> getTotPaginas()."<br>";
        echo "Livro Aberto? : ".$status."<br>";
        echo "Página Atual: ". $this-> getPagAberta()."<br>";
        echo "Leitor: ". $this-> leitor -> getNome();
        echo '<br><br><br>';
    }

    /*  Interface  */ 
    public function abrir(){
        if($this-> getAberto()){
            echo "<br>Livro já está aberto";
        } else {
            $this-> setAberto(true);
        }
    }
    public function fechar(){
        if($this-> getAberto() != true){
            echo "<br>Livro já está fechado";
        } else {
            $this-> setAberto(false);
        }
    }
    public function folhear($p){
        
    }
    public function avancarPag(){
        if($this-> getAberto() != true){
            echo "<br>Livro Fechado, por favor abra para poder realizar a operação.<br>";
        } elseif($this-> getAberto() && $this-> getPagAberta() < $this-> getTotPaginas()){
            $this-> setPagAberta($this-> getPagAberta() + 1);
        } else {
            echo "<br>Você está na ultima página, não é possivel avançar mais.<br>";
        }
    }
    public function voltarPag(){
        if($this-> getAberto() != true){
            echo "<br>Livro Fechado, por favor abra para poder realizar a operação.<br>";
        } elseif($this-> getAberto() && $this-> getPagAberta()  >= 1){
            $this-> setPagAberta($this-> getPagAberta() - 1);
        } else {
            echo "<br>Você está na primeira página, não é possível voltar mais.<br>";
        }

    }
}