<?php
//Este arquivo será usado para test cases das classes contidas nessa pasta//
include_once("VooPlanejado.php");
include_once("VooDecolado.php");
include_once("Aeronave.php");
include_once("Aeroporto.php");
include_once("CompanhiaAerea.php");

$voo_anunciado = new VooPlanejado("ABC123", "São Paulo", "Rio de Janeiro");
$saida = new DateTime("2023-04-05 14:00:00");
$chegada = new DateTime("2023-04-05 15:30:00");
$aviao_voo = new Aeronave("Boeing", "777");

$voo_decolado = new VooDecolado($voo_anunciado, $saida, $chegada, $aviao_voo);

$historico = $voo_decolado->colocar_no_historico();
assert($historico['codigo'] == "ABC123");
assert($historico['origem'] == "São Paulo");
assert($historico['destino'] == "Rio de Janeiro");
assert($historico['saida'] == $saida);
assert($historico['chegada'] == $chegada);

assert($voo_decolado->get_chegada() == $chegada);
assert($voo_decolado->get_saida() == $saida);
assert($voo_decolado->get_voo_anunciado() == $voo_anunciado);
assert($voo_decolado->get_aviao_voo() == $aviao_voo);
