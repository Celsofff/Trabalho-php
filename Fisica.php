<?php

require_once "Pessoa.php";

class Fisica extends Pessoa{

    private $cpf;
    private $email;
    private $dataNasc;

    public function __constructor($nome, $sobrenome, $telefone, $cpf, $email, $dataNasc){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->dataNasc = $dataNasc;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }   
    public function setEmail($email){
        $this->email = $email;
    }
    public function setDataNasc($dataNasc){
        $this->dataNasc = $dataNasc;
    }

    public function getCpf(){
        return $this->cpf;
    }   
    public function getEmail(){
        return $this->email;
    }
    public function getDataNasc(){
        return $this->dataNasc;
    }

    public function mostrarInformacao() {
        return $this->nome . "<br>" .
        $this->sobrenome . "<br>" .
        $this->telefone . "<br>" .
        $this->cpf . "<br>" .
        $this->email . "<br>" .
        $this->dataNasc;
    }
}