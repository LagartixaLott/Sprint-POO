<?php

include_once("Aeronave.php");

class CompanhiaAerea{


protected string $nome;
protected string $razao_social;
protected string $codigo;
protected string $cnpj;
protected string $sigla;
protected $avioes = array();

public function cadastro_companhia($nome_f,$razao_f,$codigo_f,$cnpj_f,$sigla_f){
$this->nome = $nome_f;
$this->razao_social = $razao_f;
$this->codigo = $codigo_f;
$this->cnpj = $cnpj_f;
$this->sigla = $sigla_f;
}

public function adicionar_aviao(Aeronave $aviao_f){
    $aviao = $aviao_f->get_avioes();
    
    if( !isset ($this->adicionar_aviao[$aviao])){
        $this->adicionar_aviao[aviao] = array();
    }
}

public function valida_sigla_companhia($sigla_f){

}
public function valida_cnpj(){

}
public function valida_codigo(){

}

public function get_nome(){
    return $this->nome; 
}

public function get_razao(){
    return $this->razao_social;
}

public function get_codigo(){
    return $this->codigo;
}

public function get_cnpj(){

}

public function get_sigla(){

}

public function get_avioes(){

}

public function set_nome_comp(){

}

public function set_razao(){

}

public function set_codigo(){

}

public function set_cnpj(){

}

public function set_sigla_aero(){

}


};