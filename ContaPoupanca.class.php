<?php
  class ContaPoupanca extends ContaBancaria{
    private $juros_deposito;

  public function setJurosDeposito($valor){
    $this->juros_deposito=$valor;
  }
  public function getJurosDeposito(){
    return $this->juros_deposito;
  }
  public function depositar($valor){
    $this->saldo=$this->saldo + $valor + $this->$juros_deposito;
  }
}
?>
