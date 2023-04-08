<?php

include_once("CompanhiaAerea.php");

class Excecao_Resgistro_aviao{
 public  string $registro_erro="Erro no registro";

 } 


class Aeronave{


 protected  string $fabricante;
 protected string $modelo;
 protected  float $carga;
 protected   int $pasageiros;
 protected   string $registro;
 protected   CompanhiaAerea $CompanhiaAerea_;



public function cadastro_aeronave ($fabricante_f,$modelo_f,$carga_f,$passageiros_f,$registro_f,$companhiaAerea_f){
$this->set_fabricante($fabricante_f);
$this->set_modelo($modelo_f);
$this->set_carga($carga_f);
$this->set_passageiro($passageiros_f);
$this->set_registro($registro_f);
$this->set_companhia($companhiaAerea_f);
}

public function validar_registro($registro_f){
if(sizeof($registro_f)!=6){
    
    throw new Excecao_Resgistro_aviao("Error Processing Request");
}
elseif($registro_f[1]!="P"){
    
    throw new Excecao_Resgistro_aviao("Error Processing Request");
}

elseif($registro_f[3]!="-"){
    
    throw new Excecao_Resgistro_aviao("Error Processing Request");
}
elseif($registro_f[2]!=("P" || "S" || "R" || "T")){
  
    throw new Excecao_Resgistro_aviao("Error Processing Request");
    
}
elseif($registro_f[4]!=("A"||"B"||"C"||"D"||"E"||"F"||"G"||"H"||"I"||"J"||"K"||"L"||"M"||"N"||"O"||"P"||"Q"||"R"||"S"||"T"||"U"||"V"||"W"||"X"||"Y"||"Z")){
    
    throw new Excecao_Resgistro_aviao("Error Processing Request");
}
elseif($registro_f[5]!=("A"||"B"||"C"||"D"||"E"||"F"||"G"||"H"||"I"||"J"||"K"||"L"||"M"||"N"||"O"||"P"||"Q"||"R"||"S"||"T"||"U"||"V"||"W"||"X"||"Y"||"Z")){
    throw new Excecao_Resgistro_aviao("Error Processing Request");
}

elseif($registro_f[6]!=("A"||"B"||"C"||"D"||"E"||"F"||"G"||"H"||"I"||"J"||"K"||"L"||"M"||"N"||"O"||"P"||"Q"||"R"||"S"||"T"||"U"||"V"||"W"||"X"||"Y"||"Z")){
    
    throw new Excecao_Resgistro_aviao("Error Processing Request");
}
else return true;

}

public function get_fabricante(){
return $this->$fabricante;
}

public function get_modelo(){
return $this->$modelo;
}

public function get_carga(){
return $this->$carga;

}

public function get_passageiro(){
return $this->$pasageiros;
}

public function get_registro(){
return $this->$registro;

}

public function get_companhia_aerea(){
return $this->$CompanhiaAerea_;

}

public function set_fabricante($fabricante_f){
$this->$fabricante = $fabricante_f;
}

public function set_modelo($modelo_f){
$this->$modelo=$modelo_f;
}

public function set_carga($carga_f){
$this->$carga=$carga_f;
}

public function set_passageiro($passageiro_f){
$this->$pasageiros=$passageiro_f;
}

public function set_registro($registro_f){
try{
validar_registro($registro_f);
}catch(Excecao_Resgistro_aviao $registro_erro){
  break function;
}
$this->registro=$registro_f;
}
public function set_companhia(CompanhiaAerea $companhia_aerea_f){
$this->$CompanhiaAerea=$companhia_aerea_f;
}

};