<?php

require_once "Pessoa.php";

class Estrangeira extends Pessoa{
    private $numPassaporte;
    private $paisOrigem;

    public function __constructor($nome, $sobrenome, $telefone, $numPassaporte, $paisOrigem){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->telefone = $telefone;
        $this->numPassaporte = $numPassaporte;
        $this->paisOrigem = $paisOrigem;
    }

    public function setNumPassaporte($numPassaporte){
        $this->numPassaporte = $numPassaporte;
    }   

    public function setPaisOrigem($paisOrigem){
        $this->paisOrigem = $paisOrigem;
    }

    public function getNumPassaporte(){
        return $this->numPassaporte;
    }

    public function getPaisOrigem(){
        return $this->paisOrigem;
    }

    public function mostrarInformacao() {
        return $this->nome . "<br>" .
        $this->sobrenome . "<br>" .
        $this->telefone . "<br>" .
        $this->numPassaporte . "<br>" .
        $this->paisOrigem;
    }
}