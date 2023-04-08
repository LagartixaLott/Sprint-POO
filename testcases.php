<?php
include_once("Aeronave.php");
include_once("CompanhiaAerea.php");
include_once("VooDecolado.php");
include_once("VooPlanejado.php");
include_once("Aeroporto.php");

$saida = new DateTime("2022-10-11 16:45:32");
$chegada = new DateTime("2022-10-11 18:45:32");
$novasaida = new DateTime("2022-10-11 18:35:32");
$novachegada = new DateTime("2022-10-11 20:35:32");
//Test Cases para a classe CompanhiaAerea
$companhia = new CompanhiaAerea("Gol", "Gol Linhas Aereas", "123", "15.488.222/0001-72", "GL");
echo  $companhia->get_razao()."\n";
//Test Cases para a classe Aeronave
$aeronave = new Aeronave("Boeing", "A-800", 186, 23600, "PR-GUO", $companhia);
$nova_aeronave = new Aeronave("AeroBus", "M-650", 186, 23600, "PR-GUO", $companhia);
echo $aeronave->get_companhia_aerea()->get_nome()."\n";

//Test Cases para a classe Aeroporto
$congonhas = new Aeroporto("CNG", "Congonhas", "SP", "Aeroporto de Congonhas");
$teresina = new Aeroporto("THE", "Teresina", "PI", "Aeroporto de Teresina");
echo $congonhas->get_nome_aero()."\n";

//Test Cases para a classe VooPlanejado
$voo_planejado = new VooPlanejado("GL1234", $congonhas, $teresina, $chegada, $saida, $aeronave, '2');
echo $voo_planejado->get_frequencia_voo()."\n";

//Test Cases para a classe VooDecolado
$voo_decolado = new VooDecolado($voo_planejado, $novasaida, $novachegada, $nova_aeronave);
echo $voo_decolado->get_aviao_voo()->get_companhia_aerea()->get_nome()."\n";
echo $voo_planejado->get_hist_planejado();
echo $voo_decolado->get_hist_executado();



?>