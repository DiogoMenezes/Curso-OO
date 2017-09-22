<?php
require 'banco/ProcessoTrait.php';

  class Produto
  {
      use ProcessoTrait;
    private $nome;
    private $descricao;
    private $valor;
    private $estoque;

    /*
    public function __construct(array $dados)
    {
      $this->nome = $dados['nome'];
      $this->descricao = $dados['descricao'];
      $this->valor = $dados['valor'];
      $this->estoque = $dados['estoque'];
      $this->cor = $dados['cor'];
      $this->tamanho = $dados['tamanho'];
    }
    */

    public function getNome()
    {
        $this->iniciaProcesso();
      return $this->nome;
    }

    public function setNome($nome)
    {
      $this->nome = $nome;
      return $this;
    }

    public function getDescricao()
    {
      return $this->descricao;
    }

    public function setDescricao($descricao)
    {
      $this->descricao = $descricao;
      return $this;
    }

    public function getValor()
    {
      return $this->valor;
    }

    public function setValor($valor)
    {
      $this->valor = $valor;
      return $this;
    }

    public function getEstoque()
    {
      return $this->estoque;
    }

    public function setEstoque($estoque)
    {
      $this->estoque = $estoque;
      return $this;
    }

    protected function baixaEstoque()
    {
      $this->estoque = $this->estoque - 1;
    }
  }
