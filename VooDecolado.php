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
        $this-> set_voo_anunciado($voo_anunciado_f);
        $this->set_saida($saida_f);
        $this->set_chegada($chegada_f);
        $this->set_aviao_voo($Aviao_voo_f);
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
    public function set_chegada($chegada_f){
        if ($chegada_f instanceof DateTime){
            $this->chegada = $chegada_f;
        }else{
            echo "Erro: chegada não é uma data";
        }
    }
    public function set_saida($saida_f){
        if ($saida_f instanceof DateTime){
            $this->saida = $saida_f;
        }else{
            echo "Erro: chegada não é uma data";
        }
    }
    public function set_aviao_voo($aviao_voo_f){
        if ($aviao_voo_f instanceof Aeronave){
            $this->aviao_voo = $aviao_voo_f;
        }else{
            echo "Erro: chegada não é uma data";
        }
    }
    public function set_voo_anunciado($voo_anunciado_f){
        if ($voo_anunciado_f instanceof VooPlanejado){
            $this->voo_anunciado = $voo_anunciado_f;
        }else{
            echo "Erro: chegada não é uma data";
        }
    }
    public function get_historico_executado(){
        return self::$historico_executado;
    }
}   
