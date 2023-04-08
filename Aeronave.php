<?php

include_once("CompanhiaAerea.php");

class Aeronave{


    protected string $fabricante;
    protected string $modelo;
    protected float $carga;
    protected int $passageiros;
    protected string $registro;
    protected CompanhiaAerea $CompanhiaAerea_;



public function __construct ($fabricante_f,$modelo_f,$carga_f,$passageiros_f,$registro_f,$companhiaAerea_f){
    $this->fabricante = $fabricante_f;
    $this->modelo = $modelo_f;
    $this->carga = $carga_f;
    $this->passageiros = $passageiros_f;
    $this->registro = $registro_f;
    $this->CompanhiaAerea_ = $companhiaAerea_f;
}

public function validar_registro($registro_f){

}

public function get_fabricante(){

}

public function get_modelo(){
  
}

public function get_carga(){


}

public function get_passageiro(){


}

public function get_registro(){


}

public function get_companhia_aerea(){


}

public function set_fabricante($fabricante_f){

}

public function  set_modelo($modelo_f){

}

public function set_carga($carga_f){

}

public function set_passageiro($passageiro_f){


}

public function set_registro($registro_f){


}

public function set_companhia(CompanhiaAerea $companhia_aerea_f){
}

};