<?php
include_once("Aeronave.php");
include_once("Aeroporto.php");
include_once("CompanhiaAerea.php");
include_once("Passageiro.php");
include_once("Passagens.php");
include_once("Usuario.php");
include_once("Viagem.php");
include_once("VooPlanejado.php");

$atual = new DateTime("2022-10-01 19:31:45");
$saida = new DateTime("2022-10-11 16:45:32");
$chegada = new DateTime("2022-10-11 18:45:32");
$novasaida = new DateTime("2022-10-11 18:35:32");
$novachegada = new DateTime("2022-10-11 20:35:32");
//Test Cases para a classe CompanhiaAerea
$companhia = new CompanhiaAerea("Gol", "Gol Linhas Aereas", "123", "15.488.222/0001-72", "GL", "25");
echo  $companhia->get_razao()."\n";
//Test Cases para a classe Aeronave
$aeronave = new Aeronave("Boeing", 27, "A-800", 186, 23600, "PR-GUO", $companhia);
$nova_aeronave = new Aeronave("AeroBus", 35, "M-650", 186, 23600, "PR-GUO", $companhia);
echo $aeronave->get_companhia_aerea()->get_nome()."\n";

//Test Cases para a classe Aeroporto
$congonhas = new Aeroporto("CNG", "Congonhas", "SP", "Aeroporto de Congonhas");
$teresina = new Aeroporto("THE", "Teresina", "PI", "Aeroporto de Teresina");
echo $congonhas->get_nome_aero()."\n";

//Test Cases para a classe VooPlanejado
$voo_planejado = new VooPlanejado("GL1234", $congonhas, $teresina,  $atual, $chegada, $saida, $aeronave, '2', 300);
echo $voo_planejado->get_frequencia_voo()."\n";
$voo_planejado2 = new VooPlanejado("GL1534", $teresina, $guarulhos,  $atual, $chegada, $saida, $aeronave, '2', 400);

//Test Case para código do VooPlanejado
$voo = new VooPlanejado("GLP255",  $congonhas, $teresina, $atual, $chegada, $saida, $aeronave, '2', 600);

//Test Cases para a classe VooDecolado
$voo_decolado = new Viagem($voo_planejado, $novasaida, $novachegada, $nova_aeronave);
echo $voo_decolado->get_aviao_voo()->get_companhia_aerea()->get_nome()."\n";
echo $voo_planejado->get_hist_planejado();
echo $voo_decolado->get_hist_executado();

//Test Case para a classe Passageiro
$passageiro = new Passageiro("Bruna", "Faria", "12345678914"); 
echo $passageiro->get_nome_passageiro();

//Test Case para classe Assento
$assento = new Assento("A","3", $passageiro);
echo $assento->get_numero_assento();

//Test Case para venda de passagens em 30 dias
$passagem = new Passagens($voo_planejado, $passageiro, $congonhas, $teresina, "1", "20", "50",'50');
echo $passagem->$voo_planejado->VooPlanejado::get_origem();

//Test Case conexão
$passagem = new Passagens($voo_planejado, $passageiro, $congonhas, $guarulhos,"1", "20", "50", '50');
echo $passagem->get_preco();

?>