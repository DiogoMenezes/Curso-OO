<?php

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

  interface ImportanciaClienteInterface
  {
      public function getClassificacaoCliente();
  }

  interface EnderecoCobranca
  {
      public function getEnderecoCobranca();
  }
