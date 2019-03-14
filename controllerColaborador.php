<?php

include 'Colaborador.php';

$colaborador1 = new Colaborador;

$colaborador1->setCodigo(filter_input (INPUT_POST, 'codigo'));
$colaborador1->setNome(filter_input (INPUT_POST, 'nome'));
$colaborador1->setDataNascimento(filter_input (INPUT_POST, 'dataNascimento'));
$colaborador1->setPreferencia(filter_input (INPUT_POST, 'preferencia'));
$colaborador1->setSetor(filter_input (INPUT_POST, 'setor'));
$colaborador1->setDataAdmissao(filter_input (INPUT_POST, 'dataAdmissao'));
$colaborador1->setSalario(filter_input (INPUT_POST, 'salario'));

$colaborador1->imprimir();

?>