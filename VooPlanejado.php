<?php

include_once("DadosVoos.php");
include_once("Aeroporto.php");
include_once("Aeronave.php");
include_once("CompanhiaAerea.php");

enum Frequencia{
    case diario=1;
    case semanal=7;
    case quinzenal=15;
    case mensal=30; 
}

class codigo_invalido_voo extends Exception {
    public function errorMessage_voo() {
      $errorMsg = 'Erro! O codigo deve ser composto por 2 letras e 4 numeros';
      return $errorMsg;
    }
  }

class VooPlanejado{

protected string $codigo_voo;
protected Aeroporto $Aeroporto_origem;
protected Aeroporto $Aeroporto_destino;
protected DateTime $hora_agendada_chegada;
protected DateTime $hora_agendada_saida;
protected Aeronave $Aviao_esperado;
protected frequencia $Frequencia_voo;
public static array $historico_planejado = [];    

public function __construct($codigo_f,$Aerop_origem_f,$Aerop_destino_f,$Hora_agen_chegada_f,$Hora_agen_saida_f,$Aviao_esperado_f,$frequencia_voo_f){
    $this->codigo_voo = $codigo_f;
    $this->Aeroporto_origem = $Aerop_origem_f;
    $this->Aeroporto_destino = $Aerop_destino_f;
    $this->hora_agendada_chegada = $Hora_agen_chegada_f;
    $this->hora_agendada_saida = $Hora_agen_saida_f;
    $this->Aviao_esperado = $Aviao_esperado_f;
    $this->Frequencia_voo = $frequencia_voo_f;
    self::$historico_planejado[] = $this;
}

public function validar_codigo($codigo){
//Codigo composto por 2 letras e 4 numeros
    $letras = substr($codigo,0,2);
    $numeros = substr($codigo,2,4);
    if (ctype_alpha($letras) && ctype_digit($numeros)){
        return $codigo;
    }else{
        throw new codigo_invalido_voo;
    }
}
public function get_codigo_voo(){
    return $this->codigo_voo;
}
public function get_frequencia_voo(){
    return $this->Frequencia_voo;
}

public function get_origem(){
    return $this->Aeroporto_origem;
}

public function get_destino(){
    return $this->Aeroporto_destino;
}

public function get_hora_agenda_chegada(){
    return $this->hora_agendada_chegada;
}

public function get_hora_agenda_saida(){
    return $this->hora_agendada_saida;
}

public function get_aviao_marcado(){
    return $this->Aviao_esperado;
}

public function set_codigo_voo(string $codigo_s){
    try {
        self::validar_codigo($codigo_s);
    } catch(codigo_invalido_voo $c) {
        return;
    }
    return $this->codigo_voo=$codigo_s;
}
public function set_frequencia(){
    return $this->Frequencia_voo;
}

public function set_aviao_esp(){
    return $this->Aviao_esperado;
}

public function set_hora_cheg_agend(){
    return $this->hora_agendada_chegada;
}

public function set_hora_said_agend(){
    return $this->hora_agendada_saida;
}


};
