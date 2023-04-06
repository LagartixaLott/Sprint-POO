<?php

include_once("DadosVoos.php");
include_once("Aeroporto.php");
include_once("CompanhiaAerea.php");

enum Frequencia{

}
#array para guardar os voos planejado

class VooPlanejado{

protected string $codigo;
protected Aeroporto $Aeroporto_origem;
protected Aeroporto $Aeroporto_destino;
protected DateTime $hora_agendada_chegada;
protected DateTime $hora_agendada_saida;
protected Aeronave $Aviao_esperado;
protected frequencia $Frequencia_voo;
public static array $historico_planejado = [];    

public function voo_planejado($codigo_f,$Aerop_origem_f,$Aerop_destino_f,$Hora_agen_chegada_f,$Hora_agen_saida_f,$Aviao_esperado_f,$frequencia_voo_f){
    $this->codigo = $codigo_f;
    $this->Aeroporto_origem = $Aerop_origem_f;
    $this->Aeroporto_destino = $Aerop_destino_f;
    $this->hora_agendada_chegada = $Hora_agen_chegada_f;
    $this->hora_agendada_saida = $Hora_agen_saida_f;
    $this->Aviao_esperado = $Aviao_esperado_f;
    $this->Frequencia_voo = $frequencia_voo_f;
    self::$historico_planejado[] = $this;
}

public function validar_codigo(){

}

public function get_frquencia_voo(){

}

public function get_origem(){

}

public function get_destino(){

}

public function get_hora_agenda_chegada(){

}

public function get_hora_agenda_saida(){

}

public function get_aviao_marcado(){

}

public function set_frequencia(){

}

public function set_aviao_esp(){

}

public function set_hora_cheg_agend(){

}

public function set_hora_said_agend(){

}


};