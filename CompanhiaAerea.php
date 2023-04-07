<?php

include_once("Aeronave.php");


class CompanhiaAerea{


protected string $nome;
protected string $razao_social;
protected string $codigo;
protected string $cnpj;
protected string $sigla;
protected $avioes;

public function __construct($nome_f,$razao_f,$codigo_f,$cnpj_f,$sigla_f){
$this->nome = $nome_f;
$this->razao_social = $razao_f;
$this->codigo = $codigo_f;
$this->cnpj = $cnpj_f;
$this->sigla = $sigla_f;
$this->avioes = array();
}


    public function adicionar_aviao(Aeronave $aviao_f){
        $aviao = $aviao_f->get_avioes();
        array_push($this->$avioes, $aviao_f)
}

//sigla precisa ser formada por duas letras 
public function valida_sigla_companhia($sigla_f){
    if(ctype_alpha($this->sigla) == true && strlen($this->sigla) ==2){
        return true;
    }else{
        return false;
    }
}
//cnpj precisa ser formado por 14 dígitos 
public function validar_cnpj($cnpj_f){
    if(ctype_digit($this->cnpj) && strlen($this->cnpj) == 14){
        return true;
    }else{
        return false;
    }

}
//obs: ainda não há especificações quanto ao formato do código da companhia 
public function validar_codigo($codigo_f){
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
    if(self::validar_cnpj($cnpj_f) == true){
        $this->cnpj = $cnpj_f;
        return;
    }else{
        echo "Cnpj inválido";
        return;
    }
}

public function set_sigla_comp(string $sigla_f){
    if(self::valida_sigla_companhia($sigla_f) == true){
        $this->sigla = $sigla_f;
        return;
    }else{
        echo "Sigla inválida";
        return;
    }
}

};