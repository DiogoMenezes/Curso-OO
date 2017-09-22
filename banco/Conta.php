<?php
require 'ContaAbstract.php';

class Conta extends ContaAbstract
{
    public function calculoDeposito($valor)
    {
      return $valor +=10;
    }
}
