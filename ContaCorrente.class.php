<?php
  class ContaCorrente extends ContaBancaria{
    private $taxa_saque;

  public function setTaxaSaque($taxa){
    $this->taxa_saque=$taxa;
  }
  public function getTaxaSaque(){
    return $this->taxa_saque;
  }
  public function sacar($valor){
    $this->saldo=$this->saldo - $valor - $this->$taxa_saque;
  }
}
?>
