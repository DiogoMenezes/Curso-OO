<?php

  require_once'Pessoa.php';

  $data = array('nome'=>"Dida",'idade'=>54321);
  $data1 = array('nome'=>"Domn", 'idade'=>54321);
  $pessoa1 = new Pessoa($data);
  $pessoa2 = new Pessoa($data1);


  $pessoa1->correr(10);
  echo "<br>";
  $pessoa2->correr(2);
