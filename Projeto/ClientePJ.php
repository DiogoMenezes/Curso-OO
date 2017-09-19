<?php
require_once("Cliente.php");

class ClientePJ extends Cliente
{
  public function __construct($id, $nome, $cpf, $endereco)
  {
      parent::__construct($id, $nome, $cpf, $endereco);
      $this->tipo = 2;
  }
}
