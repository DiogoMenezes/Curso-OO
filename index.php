<?php

  require_once'Pessoa.php';
  require_once'Produto.php';
  require_once'Tenis.php';
  require_once'TenisAdidas.php';

  /*
  $data = array('nome'=>"Dida",'idade'=>54321);
  $data1 = array('nome'=>"Domn", 'idade'=>54321);
  $pessoa1 = new Pessoa($data);
  $pessoa2 = new Pessoa($data1);
  */

  /*
  $pessoa1->correr(10);
  echo "<br>";
  $pessoa2->correr(2);
  */

  /*
  $dados_produto1 = array('nome'=>"produto1",'estoque'=>1500);
  $produto1 = new Produto($dados_produto1);
  echo $produto1->nome;
  echo "<br>";
  echo $produto1->estoque;
  echo "<br>";


  $dados_tenis1 = array('nome'=>"tenis1",'estoque'=>1500,'cor'=>"rosa");
  $produto2 = new Tenis($dados_tenis1);
  echo $produto2->nome;
  echo "<br>";
  echo $produto2->cor;
  */
$dados_tenis1 = array('nome'=>"tenis1",'estoque'=>1500,'cor'=>"rosa");
  $tenis = new TenisAdidas($dados_tenis1);
