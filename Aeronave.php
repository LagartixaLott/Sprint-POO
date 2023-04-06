<?php

include_once("CompanhiaAerea.php");

class Aeronave{

protected string $fabricante;
protected string $modelo;
protected float $carga;
protected int $passageiros;
protected string $registro;
protected CompanhiaAerea $CompanhiaAerea_;


public function cadastro_aeronave ($fabricante_f,$modelo_f,$carga_f,$passageiros_f,$registro_f,$companhiaAerea_f){
    $this->fabricante = $fabricante_f;
    $this->modelo = $modelo_f;
    $this->carga = $carga_f;
    $this->passageiros = $passageiros_f;
    $this->registro = $registro_f;
    $this->CompanhiaAerea_ = $companhiaAerea_f;
}

public function validar_registro($registro_f){
// Composto pelo prefixo, que contém duas letras:
// Um hífen
// Seguido de três letras
// Ex.: PR-GUO)
// No Brasil, somente são permitidos para voos comerciais os
// prefixos PT, PR, PP, PS, que devem ser validados.

    $prefixo = substr($registro_f,0,2);
    $hifen = substr($registro_f,2,1);
    $sufixo = substr($registro_f,3,3);
    if (ctype_alpha($prefixo)==true && $hifen=='-' && ctype_alpha($sufixo)==true && $prefixo=='PT' || $prefixo=='PR' || $prefixo=='PP' || $prefixo=='PS'){
        return true;
    }
    else{
        return false;
    }
}

public function get_fabricante(){
    return $this->fabricante;
}

public function get_modelo(){
    return $this->modelo;
}

public function get_carga(){
    return $this->carga;
}

public function get_passageiro(){
    return $this->passageiros;
}

public function get_registro(){
    return $this->registro;
}

public function get_companhia_aerea(){
    return $this->CompanhiaAerea_;
}

public function set_fabricante($fabricante_f){
    $this->fabricante = $fabricante_f;
}

public function set_modelo($modelo_f){
    $this->modelo = $modelo_f;
}

public function set_carga($carga_f){
    $this->carga = $carga_f;
}

public function set_passageiro($passageiro_f){
    $this->passageiros = $passageiro_f;
}

public function set_registro($registro_f){
    if (self::validar_registro($registro_f)==true){
        $this->registro = $registro_f;
        return;
    }
    else{
        echo "Registro inválido";
        return;
    }
}

public function set_companhia(CompanhiaAerea $companhia_aerea_f){
    $this->CompanhiaAerea_ = $companhia_aerea_f;
}
};