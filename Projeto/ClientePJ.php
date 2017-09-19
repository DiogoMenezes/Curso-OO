<?php

  class ClientePJ extends ClientePF implements ClientePJInterface
  {
    public $razao_social;

    public function getRazaoSocial()
    {
        return $this->razao_social;
    }
    public function setRazaoSocial($razao_social)
    {
      $this->razao_social = $razao_social;
    }
  }
