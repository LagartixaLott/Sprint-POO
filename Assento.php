<?php

include_once("Passageiro.php");

class Assento {
    protected string $fileira;
    protected string $numero_assento;
    public bool $disponibilidade;
    protected Passageiro $passageiro;

    public function __construct(string $fileira_f, string $numero_f, Passageiro $passageiro_f){
        $this->fileira = $fileira_f;
        $this->numero_assento = $numero_f;
        $this->disponibilidade = true;
        $this->passageiro = $passageiro_f; //inicialmente recebe um passageiro nulo
    }


    public function get_fileira(){
        return $this->fileira;
    }
    public function get_numero_assento(){
        return $this->numero_assento;
    }
    public function set_passageiro_assento($passageiro_f){
        try {
            if ($passageiro_f instanceof Passageiro){
                $this->passageiro = $passageiro_f;
            } else{
                throw new Exception("Passageiro invalido");
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }

    }

}

?>