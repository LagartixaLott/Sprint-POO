<?php

include_once("Aeronave.php");

/**
 * Summary of CompanhiaAerea
 */
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

/**
 * Summary of adicionar_aviao
 * @param Aeronave $aviao_f
 * @return void
 */
public function adicionar_aviao(Aeronave $aviao_f){
    $aviao = $aviao_f->get_avioes();
    
    if( !isset ($this->adicionar_aviao[$aviao])){
        $this->adicionar_aviao[aviao] = array();
    }
}

public function valida_sigla_companhia($sigla_f){

}
public function valida_cnpj($cnpj_f){

}
public function valida_codigo($codigo_f){

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
    return $this->cnpj;

}

public function get_sigla(){
    return $this->sigla;
}

public function get_avioes(){
    return $this->aviao;
}

public function set_nome_comp(string $nome_f){
    $this->nome = $nome_f;
}

public function set_razao(string $razao_f){
    $this->razao_social = $razao_f;
}

public function set_codigo(string $codigo_f){
    $this->codigo = $codigo_f;
}

public function set_cnpj(string $cnpj_f){
    $this->cnpj = $cnpj_f;
}

public function set_sigla_comp(string $sigla_f){
    $this->sigla = $sigla_f;
}


};