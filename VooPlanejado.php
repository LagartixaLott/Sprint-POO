<?php

include_once("DadosVoos.php");
include_once("Aeroporto.php");
include_once("CompanhiaAerea.php");

enum Frequencia{

}


class VooPlanejado extends DadosVoos{

private{
    string $codigo;
    Aeroporto $Aeroporto_origem;
    Aeroporto $Aeroporto_destino;
    date_time_set $hora_agendada_chegada;
    date_time_set $hora_agendada_saida;
    Aeronave $Aviao_esperado;
    frequencia $Frequencia_voo;
    
}

voo_planejado($codigo_f,$Aerop_origem_f,$Aerop_destino_f,$Hora_agen_chegada_f,$Hora_agen_saida_f,$Aviao_esperado_f,$frequencia_voo_f){

}

validar_codigo(){

}

get_frquencia_voo(){

}

get_origem(){

}

get_destino(){

}

get_hora_agenda_chegada(){

}

get_hora_agenda_saida(){

}

get_aviao_marcado(){

}

colocar_na_agenda(){

}

set_frequencia(){

}

set_aviao_esp(){

}

set_hora_cheg_agend(){

}

set_hora_said_agend(){

}


};