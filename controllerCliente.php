<?php

include 'Cliente.php';

$cliente1 = new Cliente;

$cliente1->setCodigo(filter_input (INPUT_POST, 'codigo'));
$cliente1->setNome(filter_input (INPUT_POST, 'nome'));
$cliente1->setDataNascimento(filter_input (INPUT_POST, 'dataNascimento'));
$cliente1->setPreferencia(filter_input (INPUT_POST, 'preferencia'));

$cliente1->imprimir();

?>