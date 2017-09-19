<?php
$clientes = array(
      0 => new ClientePF(array('id' => 1, 'nome' => "Mura", 'cpf' => 12345, 'endereco' => "rua 1", 'telefone' => 0000)),
      1 => new ClientePF(array('id' => 2, 'nome' => "Dada", 'cpf' => 12346, 'endereco' => "rua 2", 'telefone' => 1111)),
      2 => new ClientePF(array('id' => 3, 'nome' => "Mara", 'cpf' => 12347, 'endereco' => "rua 3", 'telefone' => 2222)),
      3 => new ClientePJ(array('id' => 4, 'nome' => "Mora", 'cpf' => 12348, 'endereco' => "rua 4", 'telefone' => 3333)),
      4 => new ClientePJ(array('id' => 5, 'nome' => "Doda", 'cpf' => 12349, 'endereco' => "rua 5", 'telefone' => 4444)),
      5 => new ClientePF(array('id' => 6, 'nome' => "Dida", 'cpf' => 12350, 'endereco' => "rua 6", 'telefone' => 5555)),
      6 => new ClientePF(array('id' => 7, 'nome' => "Mera", 'cpf' => 12351, 'endereco' => "rua 7", 'telefone' => 6666)),
      7 => new ClientePF(array('id' => 8, 'nome' => "Mira", 'cpf' => 12352, 'endereco' => "rua 8", 'telefone' => 7777,'classificacao_cliente'=>4)),
      8 => new ClientePJ(array('id' => 9, 'nome' => "Duda", 'cpf' => 12353, 'endereco' => "rua 9", 'telefone' => 8888,'razao_social'=>"teste_razao",'classificacao_cliente'=>10,'endereco_cobranca'=>"rua osvaldo")),
      9 => new ClientePJ(array('id' => 10, 'nome' => "Deda", 'cpf' => 12354, 'endereco' => "rua 10", 'telefone' => 9999)),
  );
  function crescente($a, $b)
  {
      return strcmp($a->nome, $b->nome);
  }

  function decrescente($a, $b)
  {
      return strcmp($b->nome,$a->nome);
  }
 ?>
