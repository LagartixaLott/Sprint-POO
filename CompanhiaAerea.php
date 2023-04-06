<?php

include_once("Aeronave.php");

class CompanhiaAerea{

protected string $nome;
protected string $razao_social;
protected string $codigo;
protected string $cnpj;
protected string $sigla;
protected array $avioes;

public function __construct($nome_f,$razao_f,$codigo_f,$cnpj_f,$sigla_f){
    $this->nome = $nome_f;
    $this->razao_social = $razao_f;
    $this->codigo = $codigo_f;
    $this->cnpj = $cnpj_f;
    $this->sigla = $sigla_f;
}

public function valida_sigla_companhia(){
// Deve ser formado por 2 letras
    if (ctype_alpha($this->sigla) && strlen($this->sigla) == 2){
        return true;
    }else{
        return false;
    }
}
public function valida_cnpj(){
// Deve ser formado por 14 digitos
    if (ctype_digit($this->cnpj) && strlen($this->cnpj) == 14){
        return true;
    }else{
        return false;
    }
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
    return $this->cnpj;
}

public function get_sigla(){
    return $this->sigla;
}

public function get_avioes(){
    return $this->avioes;
}

public function set_nome_comp($nome_f){
    $this->nome = $nome_f;
}

public function set_razao($razao_f){
    $this->razao_social = $razao_f;
}

public function set_codigo($codigo){
    $this->codigo = $codigo;
}

};