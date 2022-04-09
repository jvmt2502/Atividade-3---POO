<?php
/*João Victor de Melo Tavares - SI - 3° Semestre*/
	class ContaBancaria{
		private $titular;
		private $saldo;
		private $numero;

	public function setTitular($nome){
		$this->titular=$nome;
	}
	public function setSaldo($valor){
		$this->saldo=$valor;
	}
	public function setNumero($numero){
		$this->numero=$numero;
	}
	public function getTitular(){
		return $this->titular;
	}
	public function getSaldo(){
		return $this->saldo;
	}
	public function getNumero(){
		return $this->numero;
	}
	public function sacar($valor){
		$this->saldo=$this->saldo - $valor;
	}
	public function depositar($valor){
		$this->saldo=$this->saldo + $valor;
	}
}
?>
