<?php

namespace SON\Conta\Types;

use \SON\Conta\ContaAbstract;

class ContaPremiumType extends ContaAbstract
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
