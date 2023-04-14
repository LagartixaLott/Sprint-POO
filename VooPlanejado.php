<?php

#include_once("DadosVoos.php");
include_once("Aeroporto.php");
include_once("CompanhiaAerea.php");


#array para guardar os voos planejado

class VooPlanejado{

protected string $codigo;
protected Aeroporto $Aeroporto_origem;
protected Aeroporto $Aeroporto_destino;
protected DateTime $hora_agendada_chegada;
protected DateTime $hora_agendada_saida;
protected Aeronave $Aviao_esperado;
protected array $Frequencia_voo = ['dia', 'frequencia'];
public static array $historico_planejado = [];    

public static $dict_frequencias = [
    '1' => 'Diário',
    '2' => 'Semanal',
    '3' => 'Quinzenal',
    '4' => 'Mensal',
];
public static $dict_dias = [
    '1' => 'Domingo',
    '2' =>'Segunda',
    '3' => 'Terça',
    '4' => 'Quarta',
    '5' =>'Quinta',
    '6' => 'Sexta',  
    '7' => 'Sábado',
];
public function __construct($codigo_f,$Aerop_origem_f,$Aerop_destino_f,$Hora_agen_chegada_f,$Hora_agen_saida_f,$Aviao_esperado_f, $dia_f,$frequencia_voo_f){
    $this->set_aviao_esp($Aviao_esperado_f);
    $this->set_codigo($codigo_f);
    $this->set_origem($Aerop_origem_f);
    $this->set_destino($Aerop_destino_f);
    $this->set_hora_cheg_agend($Hora_agen_chegada_f);
    $this->set_hora_said_agend($Hora_agen_saida_f);
    $this->set_frequencia($frequencia_voo_f, $dia_f);
    self::$historico_planejado[] = $this;
}

public function validar_codigo($codigo, $Aviao_esperado_f): bool
{
//Codigo composto por 2 letras e 4 numeros
    $letras = substr($codigo,0,2);
    $sigla_comp_aerea = $Aviao_esperado_f-> get_companhia_aerea() -> get_sigla();
    if ($letras != $sigla_comp_aerea){
        echo "Erro: Codigo do voo não corresponde a companhia aerea";
        return false;
    }
    $numeros = substr($codigo,2,4);
    if (ctype_alpha($letras) && ctype_digit($numeros)){
        return true;
    }else{
        return false;
    }
}

public function get_frequencia_voo(): array
{
    return $this->Frequencia_voo;
}

public function get_origem(): Aeroporto
{
    return $this->Aeroporto_origem;
}

public function get_destino(): Aeroporto
{
    return $this->Aeroporto_destino;
}

public function get_hora_agenda_chegada(): DateTime
{
    return $this->hora_agendada_chegada;
}

public function get_hora_agenda_saida(): DateTime
{
    return $this->hora_agendada_saida;
}

public function get_codigo(): string
{
    return $this->codigo;
}
public function get_aviao_marcado(): Aeronave
{
    return $this->Aviao_esperado;
}
// public function get_assento(){
//     return $this->Aviao_esperado->assento;
// }
// public function get_tarifa(){
//     return $this->Aviao_esperado->assento;
// }

public function set_frequencia($frequencia_voo_f, $dia_f): void
{
    $dia = '';
    $frequencia = '';
    try{
        if (isset(self::$dict_frequencias[$frequencia_voo_f])) {
            $frequencia = self::$dict_frequencias[$frequencia_voo_f];
        } else {
            throw new Exception("Código de frequência inválido.");
        }
        if (isset(self::$dict_dias[$dia_f])) {
            $dia = self::$dict_dias[$dia_f];
        } else {
            throw new Exception("Código de dia inválido.");
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
    $this->Frequencia_voo = [$dia, $frequencia];
}

public function set_aviao_esp($Aviao_esperado_f): void
{
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

public function set_hora_cheg_agend($hora_agendada_chegada_f): void
{
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
public function set_hora_said_agend($hora_agendada_saida_f): void
{
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

public function set_origem($Aerop_origem_f): void
{
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
public function set_destino($Aerop_destino_f): void
{
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
public function set_codigo($codigo_f): void
{
    try {
        if ($this->validar_codigo($codigo_f, $this->get_aviao_marcado())){
            $this->codigo = $codigo_f;
        } else{
            throw new Exception("Codigo invalido");
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
public static function get_hist_planejado(): string
{
    //deve retornar uma string com todos os voos planejados
    $string = "";
    foreach (self::$historico_planejado as $voo){
        $string .= "Voo " . $voo->get_codigo() . " da " . $voo->get_aviao_marcado()->get_companhia_aerea()->get_nome() . " de " . $voo->get_origem()->get_sigla_aero() . " para " . $voo->get_destino()->get_sigla_aero() . " marcado para " . $voo->get_hora_agenda_saida()->format('d/m/Y H:i') . " com chegada " . $voo->get_hora_agenda_chegada()->format('d/m/Y H:i') . "\n";
    }
    return $string;
}
public static function buscar_proximos_voos(): array
    {
        $agora = new DateTime();
        $data_limite = $agora->modify('+30 days');

        $voos_proximos = [];
        foreach (self::$historico_planejado as $voo) {
            if ($voo->hora_agendada_saida <= $data_limite) {
                $voos_proximos[] = $voo;
            }
        }

        return $voos_proximos;
    }
public static function proximos_voos_string(): string
    {
        $voos_proximos = self::buscar_proximos_voos();
        $string = "";
        foreach ($voos_proximos as $voo) {
            $string .= "Voo " . $voo->get_codigo() . " da " . $voo->get_aviao_marcado()->get_companhia_aerea()->get_nome() . " de " . $voo->get_origem()->get_sigla_aero() . " para " . $voo->get_destino()->get_sigla_aero() . " marcado para " . $voo->get_hora_agenda_saida()->format('d/m/Y H:i') . " com chegada " . $voo->get_hora_agenda_chegada()->format('d/m/Y H:i') . "\n";
        }
        return $string;
    }
}