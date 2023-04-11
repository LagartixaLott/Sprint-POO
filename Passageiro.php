<?php

class Passageiro{
   protected $nome_passageiro;
    protected $sobrenome_passageiro;
    protected $documento_passageiro;
    
    


public function __construct($nome_p, $sobrenome_p,$documento_p){
    $this->set_nome_passeiro($nome_p);
    $this->set_sobrenome_passageiro($sobrenome_p);
    $this->set_documento_passageiro($documento_p);

}
public function set_nome_passeiro($nome_p){
    $this->nome_passageiro = $nome_p;
}
public function set_sobrenome_passageiro($sobrenome_p){
    $this->sobrenome_passageiro = $sobrenome_p;
}
public function set_documento_passageiro($documento_p){
    $this->documento_passageiro = $documento_p;
}
public function get_nome_passageiro(){
    return $this->nome_passageiro;
}
public function get_sobrenome_passageiro(){
    return $this->sobrenome_passageiro;
}
public function get_documento_passageiro(){
    return $this->documento_passageiro;
}
}
    