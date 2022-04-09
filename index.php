<?php
  include 'ContaCorrente.class.php';
  include 'ContaPoupanca.class.php';

  $cc=new ContaCorrente();
  $cc->setTitular("João");
  $cc->setSaldo(10000);
  $cc->setTaxaSaque(3);

  $cp=new ContaPoupanca();
  $cp->setTitular("Joana");
  $cp->setSaldo(8000);
  $cp->setJurosDeposito(6);
?>
