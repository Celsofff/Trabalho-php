<?php

class Pessoa{
    protected $nome;
    protected $sobrenome;
    protected $telefone;

    public function setNome($nome){
        $this->nome = $nome;
    }   
    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getNome() {
        return $this->nome;
    }
    public function getSobrenome() {
        return $this->sobrenome;
    }
    public function getTelefone() {
        return $this->telefone;
    }
}