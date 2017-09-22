<?php
require 'ContaAbstract.php';

class ContaPremium extends ContaAbstract
{
  public function __construct()
  {
    $this->saldo += 10;
  }

  public function calculoDeposito($valor)
  {
    return $valor += 20;
  }
}
