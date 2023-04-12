<?php

include_once "VooPlanejado.php";
include_once "Passageiro.php";
class Passagens{
    protected VooPlanejado $voo;
    protected Passageiro $passageiro;

public function __constructPassagens($voo_f,$passageiro_f,$origem_f,$destino_f,$assento_f,$franquia_f,$tarifa_f){
    $this->set_voo($voo_f);
    $this->set_passageiro($passageiro_f);
}

public function get_voo(){
    return $this->voo;
}
public function get_cliente(){
    return $this->passageiro;
}
public function get_origem(){
    return $this->voo->get_origem();
}
public function get_destino(){
    return $this->voo->get_destino();
}
public function get_assento(){
    return $this->voo->get_assento();
}
public function get_franquia(){
    return $this->voo->get_franquia();
}
public function get_tarifa(){
    return $this->Aeronave->get_tarifa();
}
public function get_nbagagens(){
    return $this->passageiro->get_nbagagens();
}
public function comprar_bagagem(){
    $nbagagens = $this->get_nbagagens();
    $tarifa = $this->get_tarifa();
    return $nbagagens*$tarifa;
}
public function set_voo($voo_f){
    try {
        if ($voo_f instanceof VooPlanejado){
            $this->voo = $voo_f;
        } else {
            throw new InvalidArgumentException("Erro: o voo não existe");
        }
    } catch (InvalidArgumentException $e) {
        echo $e->getMessage();
    }
}
public function set_passageiro($passageiro_f){
    try {
        if ($passageiro_f instanceof Passageiro){
            $this->passageiro = $passageiro_f;
        } else {
            throw new InvalidArgumentException("Erro: o passageiro não existe");
        }
    } catch (InvalidArgumentException $e) {
        echo $e->getMessage();
    }
}

}

        