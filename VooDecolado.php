<?php
include_once("Aeronave.php");
include_once("VooPlanejado.php");

class VooDecolado extends VooPlanejado{
    protected Aeronave $aviao_voo;
    protected DateTime $chegada;
    protected DateTime $saida;
    protected VooPlanejado $voo_anunciado;
    public static array $historico_executado = []; 

    public function __construct($voo_anunciado_f,$saida_f,$chegada_f,$Aviao_voo_f){
        $this->voo_anunciado = $voo_anunciado_f;
        $this->saida = $saida_f;
        $this->chegada = $chegada_f;
        $this->aviao_voo = $Aviao_voo_f;
        self::$historico_executado[] = $this;
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