<?php   

require_once "Pessoa.php";

class Juridica extends Pessoa{

    private $cnpj;
    private $faturamento;

    public function __constructor($nome, $sobrenome, $telefone, $cnpj, $faturamento){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->telefone = $telefone;
        $this->cnpj = $cnpj;
        $this->faturamento = $faturamento;
    }

    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }   
    public function setFaturamento($faturamento){
        $this->faturamento = $faturamento;
    }

    public function getCnpj(){
        return $this->cnpj;
    }
    public function getFaturamento(){
        return $this->faturamento;
    }

    public function consultarFaturamento(){
        if($this->faturamento < 0){
            return "Reveja seus ativos e passivos para não quebrar.";
        }else if($this->faturamento >= 0){
            return "Não há débitos pendentes.";
        }else{
            return "Número do faturamento não é válido!.";
        }
    }
}