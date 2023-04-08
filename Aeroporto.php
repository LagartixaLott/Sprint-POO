<?php

class Aeroporto {

  protected string $sigla;
  protected string $cidade;
  protected string $estado;
  protected string $nome;


  public function Aeroporto(string $sigla_f,string $cidade_f,string $estado_f,string $nome_f){
    $this->sigla = $sigla_f;
    $this->cidade = $cidade_f;
    $this->estado = $estado_f;
    $this->nome = $nome_f;
  }

  public function validar_sigla_aero(string $sigla_s){
    if(ctype_alpha($sigla_s) && strlen($sigla_s)==3){
      return true;
    }else{
      return false;
    }
  }

  public function get_sigla_aero(){
    return $this->sigla;
  }

  public function get_cidade(){
    return $this->cidade;
  }

  public function get_estado(){
    return $this->estado;
  }

  public function get_nome_aero(){
    return $this->nome;
  }  

  public function set_sigla_aero(string $sigla_f){
    $this->sigla = $sigla_f;
  }

  public function set_cidade(string $cidade_f){
    $this->cidade = $cidade_f;
  }

  public function set_estado(string $estado_f){
    $this->estado = $estado_f;
  } 

  public function set_nome(string $nome_f){
    $this->nome = $nome_f;
  }

};
