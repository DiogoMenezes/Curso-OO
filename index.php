<?php

define('CLASS_DIR','src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$conta = new SON\Conta\Types\ContaPremiumType();
$conta->depositar(100);
$conta->sacar(50);


echo $conta->getSaldo();