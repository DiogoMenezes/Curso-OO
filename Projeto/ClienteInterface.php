<?php

  interface ClienteInterface
  {
      public function getId();
      public function getNome();
      public function getCpf();
      public function getEndereco();
      public function getTelefone();
  }
