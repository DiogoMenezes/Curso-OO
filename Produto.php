<?php
  class Produto
  {
    public $nome;
    public $descricao;
    public $valor;
    public $estoque;

    public function __construct(array $dados)
    {
      $this->nome = $dados['nome'];
      $this->descricao = $dados['descricao'];
      $this->valor = $dados['valor'];
      $this->estoque = $dados['estoque'];
      $this->cor = $dados['cor'];
      $this->tamanho = $dados['tamanho'];
    }

    public function baixaEstoque()
    {
      $this->estoque = $this->estoque - 1;
    }
  }
