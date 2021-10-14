<?php
/*
   Só dois tipos de conta CC -> Conta COrrente e CP -> Conta Poupança
   abrirConta() altera o status para verdadeiro.
   abrirConta() -> Qual tipo de conta (CC - 50$, CP - 150$)
   fecharConta() -> Não pode ter dinheiro, e não pode dever para o banco.
   depositar() -> Status tem que está verdadeiro.
   sacar() ->  Status tem q está verdadeiro, e tenho que ter saldo.
   pagarMensalidade() -> CC -> 12$ de mensalidade CP -> 20$ de mensalidade
   ContaBanco() -> Saldo 0$ e status fechado
*/

class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function abrirConta($tipoConta){
        $this-> setStatus(true);
        $this-> setTipo($tipoConta);
    }
    public function fecharConta(){
        if($this->getStatus() == true && $this-> getSaldo() == 0){
            $this-> setStatus(false);
        }
    } 
    public function sacar($valorSaque){
        if($this-> getStatus() == true && $this-> getSaldo() >= $valorSaque){
            $this-> setSaldo($this-> getSaldo() - $valorSaque);
            // $this->setSaldo($sal) - $valorSaque;
        }
    }    
    public function depositar($valorDeposito){
        if($this-> getStatus()){
            $this-> setSaldo($this->getSaldo() + $valorDeposito);
        }
    }
    public function pagarMensalidade(){
        if($this-> getStatus()){
            if($this-> getTipo() == 'CC'){
                $this-> setSaldo($this-> getSaldo() - 12);
            } else {
                $this-> setSaldo($this-> getSaldo() - 20);
            }
        }
    }



    public function getNumConta(){
        return $this-> numConta;
    }
    public function setNumConta($num){
        $this-> numConta = $num;
    }
    public function getTipo(){
        return $this-> tipo;
    }
    public function setTipo($tip){
        if($tip === 'CC'){
            $this-> tipo = $tip;
            $this-> setSaldo(50);
        } else if ($tip === 'CP'){
            $this-> tipo = $tip;   
            $this-> setSaldo(150);
        } else {
            echo 'CONTA INVALIDA!! <br>';
        }
    }
    public function getDono(){
        return $this-> dono;
    }
    public function setDono($don){
        $this-> dono = $don;
    }
    public function getSaldo(){
        return $this-> saldo;
    }
    public function setSaldo($sal){
        $this-> saldo = $sal;
    }
    public function getStatus(){
        return $this-> status;
    }
    public function setStatus($sta){
        $this-> status = $sta;
    }
}