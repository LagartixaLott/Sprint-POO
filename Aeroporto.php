<?php

class Aeroporto {

  protected string $sigla;
  protected string $cidade;
  protected string $estado;
  protected string $nome;


  public function cadastro_aeroporto(string $sigla_f,string $cidade_f,string $estado_f,string $nome_f){
    $this->sigla = $sigla_f;
    $this->cidade = $cidade_f;
    $this->estado = $estado_f;
    $this->nome = $nome_f;
  }

  public function validar_sigla_aero(string $sigla_s){
    throw new Exception("Sigla Inválida", 1);
  
  }

  public function get_sigla_aero(){
  
  }

  public function get_cidade(){
 
  }

  public function get_estado(){
  
  }

  public function get_nome_aero(){

  }  

  public function set_sigla_aero(string $sigla_f){

  }

  public function set_cidade(string $cidade_f){


  }

  public function set_estado(string $estado_f){


  } 

  public function set_nome(string $nome_f){

  }

};