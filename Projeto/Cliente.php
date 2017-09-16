<?php
require 'ClienteInterface.php';

class Cliente implements ClienteInterface
    {
      public $nome;
      public $cpf;
      public $endereco;
      public $telefone;
      public $id;

    public function __construct(array $info)
    {
      $this->nome = $info['nome'];
      $this->cpf = $info['cpf'];
      $this->endereco = $info['endereco'];
      $this->telefone = $info['telefone'];
      $this->id = $info['id'];
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }
    public function getId()
    {
        return $this->id;
    }
  }
