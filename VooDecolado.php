<?php
include_once("Aeronave.php");
include_once("VooPlanejado.php");

class VooDecolado{
    protected Aeronave $aviao_voo;
    protected date_time_set $chegada;
    protected date_time_set $saida;
    protected VooPlanejado $voo_anunciado;


    public function voo_decolado($voo_anunciado_f,$saida_f,$chegada_f,$Aviao_voo_f){
        $this->voo_anunciado = $voo_anunciado_f;
        $this->saida = $saida_f;
        $this->chegada = $chegada_f;
        $this->aviao_voo = $Aviao_voo_f;
    }
    public function colocar_no_historico(){
        return [
            'codigo' -> $this->voos_anunciado->get_codigo(),
            'origem' -> $this->voos_anunciado->get_origem(),
            'destino' -> $this->voos_anunciado->get_destino(),
            'saida' -> $this->saida,
            'chegada' -> $this->chegada,
        ];
    }

    public function get_chegada(){
        return $this->chegada;
    }
    public function get_saida(){
        return $this->saida;
    }
    public function get_voo_anunciado(){
        return $this->voo_anunciado;
    }
    public function get_aviao_voo(){
        return $this->aviao_voo;
    }
}