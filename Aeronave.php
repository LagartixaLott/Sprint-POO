<?php

include_once("CompanhiaAerea.php");

class Excecao_Resgistro_aviao{
 public  string $registro_erro;
}

class Aeronave{


 protected  string $fabricante;
 protected string $modelo;
 protected  float $carga;
 protected   int $pasageiros;
 protected   string $registro;
 protected   CompanhiaAerea $CompanhiaAerea_;



public function cadastro_aeronave ($fabricante_f,$modelo_f,$carga_f,$passageiros_f,$registro_f,$companhiaAerea_f){
public Aeronave $a;
$a.set_fabricante($fabricante_f);
$a.set_modelo($modelo_f);
$a.set_carga($carga_f);
$a.set_passageiro($passageiros_f);
$a.set_registro($registro_f);
$a.set_companhia($companhiaAerea_f);
}

public function validar_registro($registro_f){
if(sizeof($registro_f)!=6){
   public Excecao_Resgistro_aviao $e.$registro_erro=$registro_f;
     throw new Exception("Error Processing Request", $e);
    
}
elseif($registro_f[1]!="P"){
   public Excecao_Resgistro_aviao $e.$registro_erro=$registro_f;
     throw new Exception("Error Processing Request", $e);
    
}

elseif($registro_f[3]!="-"){
   public  Excecao_Resgistro_aviao $e.$registro_erro=$registro_f;
    throw new Exception("Error Processing Request", $e);
    
}
elseif($registro_f[2]!=("P" || "S" || "R" || "T")){
    Excecao_Resgistro_aviao $e.$registro_erro=$registro_f;
    throw new Exception("Error Processing Request", $e);
    
}


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
$this->registro=$registro_f;
}catch(Excecao_Resgistro_aviao){
    echo "registro invalido";
}
}

public function set_companhia(CompanhiaAerea $companhia_aerea_f){
$this->$CompanhiaAerea=$companhia_aerea_f;
}

};