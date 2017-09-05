<?php

class Pessoa
{

    public $nome;
    public $idade;

    public function __construct(array $data){
        $this->nome = $data['nome'];
        $this->idade = $data['idade'];
    }

    public function correr($km)
    {
        echo $this->nome." esta correndo!";
        for ($i= 0; $i <= $km  ; $i++) {
          echo ".<br>";
        }
        echo $this->nome." terminou de correr";
    }
}
