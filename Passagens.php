<?php

include_once "VooPlanejado.php";
<<<<<<< HEAD
include_once "Passageiro.php";
class Passagens{
    protected VooPlanejado $voo;
    protected VooPlanejado $conexao;
    protected Passageiro $passageiro;
    public static array $passagens = []; 
    protected float $preco;

    #protected VooPlanejado $conexao;

public function __constructPassagens($voo_f,$passageiro_f,$origem_f,$destino_f,$assento_f,$franquia_f,$tarifa_f, $preco_f){
    $this->set_voo($origem_f, $destino_f);
    $this->set_cliente($passageiro_f);
    $this->set_preco();
    self::$passagens[] = $this;
}
public function get_preco(){
    return $this->preco;
}
=======
include_once "Cliente.php";
class Passagens{
    protected VooPlanejado $voo;
    protected Passageiro $passageiro;

public function __construct($voo_f,$passageiro_f,$origem_f,$destino_f,$assento_f,$franquia_f,$tarifa_f){
    $this->set_voo($voo_f);
    $this->set_cliente($passageiro_f);
}

>>>>>>> vini-branch
public function get_voo(){
    return $this->voo;
}
public function get_cliente(){
<<<<<<< HEAD
    return $this->passageiro;
}
public function get_origem(){
    return $this->voo->get_origem();
=======
    return $this-> passageiro;
}
public function get_origem(){
    return $this-> voo->get_origem();
>>>>>>> vini-branch
}
public function get_destino(){
    return $this->voo->get_destino();
}
public function get_assento(){
<<<<<<< HEAD
    return $this->voo->VooPlanejado::get_assento();
=======
    return $this->voo->get_assento();
>>>>>>> vini-branch
}
public function get_franquia(){
    return $this->voo->get_franquia();
}
public function get_tarifa(){
<<<<<<< HEAD
    return $this->Aeronave->get_tarifa();
}
public function get_nbagagens(){
    return $this->passageiro->get_nbagagens();
}
public function set_preco(){
    if ($this->conexao != null){
        $this->preco = $this->voo->get_preco();
    }
    else{
        $this->preco = $this->voo->get_preco() + $this->conexao->get_preco();
    }
}

public function comprar_bagagem(){
    $nbagagens = $this->get_nbagagens();
    $tarifa = $this->get_tarifa();
    return $nbagagens*$tarifa;
}
public function set_voo($origem_f, $destino_f){
    $voos = self::verificar_conexão($origem_f, $destino_f);
    if (sizeof($voos) == 1){
        $this->voo = $voos[0];
    if (sizeof($voos) == 2){
        $this->voo = $voos[0];
        $this->conexao = $voos[1];
    }
}
}
public function set_cliente($cliente_f){
    try {
        if ($cliente_f instanceof Passageiro){
            $this->passageiro = $cliente_f;
=======
    return $this->voo->get_tarifa();
}
public 

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
public function set_cliente($cliente_f){
    try {
        if ($cliente_f instanceof Cliente){
            $this->cliente = $cliente_f;
>>>>>>> vini-branch
        } else {
            throw new InvalidArgumentException("Erro: o cliente não existe");
        }
    } catch (InvalidArgumentException $e) {
        echo $e->getMessage();
    }
}
<<<<<<< HEAD
public function verificar_conexão(string $origem, string $destino){
    $conjunto_voos = array();
    foreach(VooPlanejado::$historico_planejado as $voo){
         if($voo->VooPlanejado::get_origem() == $origem && $voo->VooPlanejado::get_destino() == $destino){
            $conjunto_voos.array_push($voo);
             return $conjunto_voos;
         }else{
            foreach(VooPlanejado::$historico_planejado as $voo1){
                if ($voo1->VooPlanejado::get_origem() == $origem){
                    foreach(VooPlanejado::$historico_planejado as $voo2){
                        if($voo2->VooPlanejado::get_origem() == $voo1->VooPlanejado::get_destino() && $voo2->VooPlanejado::get_destino() == $destino){
                            $conjunto_voos.array_push($voo1, $voo2);
                            return $conjunto_voos;
                        }else{
                            return "Não há voos para o destino desejado";
                        }
                    }
                }
            }
         } 
    }

}




}       
=======

}

        
>>>>>>> vini-branch
