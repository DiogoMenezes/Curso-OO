<?php

/*
  interface ClientePFInterface
  {
      public function getId();
      public function getNome();
      public function getCpf();
      public function getEndereco();
      public function getTelefone();
  }

  interface ClientePJInterface
{
      public function getRazaoSocial();
}
*/
  interface ClienteInterface
  {
      public function getGrauImportancia();
      public function setGrauImportancia($grau);
      public function getEnderecoCobranca();
      public function setEnderecoCobranca($endereco);
  }
