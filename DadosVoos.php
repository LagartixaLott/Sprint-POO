<?php
include_once("VooDecolado");
class DadosVoos{
    private{
    array $voos_agenda[];
    array $voos_historico[];
    }   

    public function DadosVoos(){
    $this->voos_agenda = [];
    $this->voos_historico = vooplanejado::get_historico();
    }

    ver_historico_dia(date_time_set $dia_f){

    }
    ver_agenda(){
        return $this->voos_agenda;
    }

    ver_historico(){
        return $this->voos_historico;
    }

    ver_historico_dia(date_time_set $dia_f){
        $historico_dia = [];
        foreach($this->voos_historico as $voo){
            if($voo->get_chegada() == $dia_f){
                $historico_dia[] = $voo;
            }
        }
        return $historico_dia;
    }
}