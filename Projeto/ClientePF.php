<?php
class ClientePF implements ClientePFInterface,ImportanciaClienteInterface,EnderecoCobranca
  {
      public $nome;
      public $cpf;
      public $endereco;
      public $telefone;
      public $id;
      public $classificacao_cliente;
      public $endereco_cobranca;

      public function __construct(array $info)
      {
        $this->nome = $info['nome'];
        $this->cpf = $info['cpf'];
        $this->endereco = $info['endereco'];
        $this->telefone = $info['telefone'];
        $this->id = $info['id'];
        $this->razao_social = $info['razao_social'];
        $this->classificacao_cliente = $info['classificacao_cliente'];
        $this->endereco_cobranca = $info['endereco_cobranca'];
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

      public function getClassificacaoCliente()
      {
          return $this->classificacao_cliente;
      }

      public function getEnderecoCobranca()
      {
        return $this->endereco_cobranca;
      }

  }
