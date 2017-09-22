<?php
require_once("Cliente.php");

class ClientePJ extends Cliente
{
    public function __construct($id, $nome, $cpf, $endereco, $grau = null)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->id = $id;
        $this->grau = $grau;
        $this->tipo = 2;
    }
}
