<?php

include_once("DadosVoos.php");
include_once("Aeroporto.php");
include_once("CompanhiaAerea.php");

enum Frequencia{
    const DIARIA = 1;
    const SEMANAL = 2;
    const QUINZENAL = 3;
    const MENSAL = 4;
}
#array para guardar os voos planejado

class VooPlanejado{

protected string $codigo;
protected Aeroporto $Aeroporto_origem;
protected Aeroporto $Aeroporto_destino;
protected DateTime $hora_agendada_chegada;
protected DateTime $hora_agendada_saida;
protected Aeronave $Aviao_esperado;
protected frequencia $Frequencia_voo;
protected float $preco;
public static array $historico_planejado = [];    

public function __constructVooPlanejado($codigo_f,$Aerop_origem_f,$Aerop_destino_f,$Hora_agen_chegada_f,$Hora_agen_saida_f,$Aviao_esperado_f,$frequencia_voo_f,$preco_f){
    $this-> set_codigo($codigo_f);
    $this-> set_origem($Aerop_origem_f);
    $this->set_destino($Aerop_destino_f);
    $this->set_hora_cheg_agend($Hora_agen_chegada_f);
    $this->set_hora_said_agend($Hora_agen_saida_f);
    $this->set_aviao_esp($Aviao_esperado_f);
    $this->set_frequencia($frequencia_voo_f);
    $this->set_preco($preco_f);
    self::$historico_planejado[] = $this;
}

public function validar_codigo($codigo){
//Codigo composto por 2 letras e 4 numeros
    $letras = substr($codigo,0,2);
    $numeros = substr($codigo,2,4);
    if (ctype_alpha($letras) && ctype_digit($numeros)){
        return true;
    }else{
        return false;
    }
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

public function get_codigo(){
    return $this->codigo;
}
public function get_aviao_marcado(){
    return $this->Aviao_esperado;
}
public function get_preco(){
    return $this->preco;
}

public function set_frequencia($frequencia_voo_f){
    try{
        if ($frequencia_voo_f instanceof Frequencia){
            $this->Frequencia_voo = $frequencia_voo_f;
        } else{
            throw new Exception("Frequencia invalida");
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

public function set_aviao_esp($Aviao_esperado_f){
    try {
        if ($Aviao_esperado_f instanceof Aeronave){
            $this->Aviao_esperado = $Aviao_esperado_f;
        } else{
            throw new Exception("Aeronave invalida");
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

public function set_hora_cheg_agend($hora_agendada_chegada_f){
    try {
        if ($hora_agendada_chegada_f instanceof DateTime){
            $this->hora_agendada_chegada = $hora_agendada_chegada_f;
        } else{
            throw new Exception("Hora invalida");
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
public function set_hora_said_agend($hora_agendada_saida_f){
    try {
        if ($hora_agendada_saida_f instanceof DateTime){
            $this->hora_agendada_saida = $hora_agendada_saida_f;
        } else{
            throw new Exception("Hora invalida");
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

public function set_origem($Aerop_origem_f){
    try {
        if ($Aerop_origem_f instanceof Aeroporto){
            $this->Aeroporto_origem = $Aerop_origem_f;
        } else{
            throw new Exception("Aeroporto de origem invalido");
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
public function set_destino($Aerop_destino_f){
    try {
        if ($Aerop_destino_f instanceof Aeroporto){
            $this->Aeroporto_destino = $Aerop_destino_f;
        } else{
            throw new Exception("Aeroporto de destino invalido");
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
public function set_codigo($codigo_f){
    try {
        if ($this->validar_codigo($codigo_f)){
            $this->codigo = $codigo_f;
        } else{
            throw new Exception("Codigo invalido");
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
public function set_preco($preco_f){
    $this->preco = $preco_f;
}
public function get_hist_planejado(){
    return self::$historico_planejado;
}
}