<?php

require_once "Fisica.php";
require_once "Juridica.php";
require_once "Estrangeira.php";

$novoFisica = new Fisica;
$novoJuridica = new Juridica;
$novoEstrangeira = new Estrangeira;

$button = $_POST["button"];

if($button == "estrangeira"){
    // Pessoa

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $telefone = $_POST["telefone"];

    // Estrangeira

    $numPassaporte = $_POST["numPassaporte"];
    $paisOrigem = $_POST["paisOrigem"];

    $novoEstrangeira->__constructor($nome, $sobrenome, $telefone, $numPassaporte, $paisOrigem);

    $getNome = $novoEstrangeira->getNome();
    $getSobrenome = $novoEstrangeira->getSobrenome();
    $getTelefone = $novoEstrangeira->getTelefone();
    $getNumPassaporte = $novoEstrangeira->getNumPassaporte();
    $getPaisOrigem = $novoEstrangeira->getPaisOrigem();

    echo "Nome: " . $getNome . "<br>";
    echo "Sobrenome: " . $getSobrenome . "<br>";
    echo "Telefone: " . $getTelefone . "<br>";
    echo "Número de passaporte: " . $getNumPassaporte . "<br>";
    echo "País de origem: " . $getPaisOrigem . "<br><br>";

    echo "Metodo mostrar informações: " . $novoEstrangeira->mostrarInformacao();
}

// Fisica

else if($button == "fisica"){
    // Pessoa

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $telefone = $_POST["telefone"];

    // Fisica

    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $dataNasc = $_POST["dataNasc"];

    $novoFisica->__constructor($nome, $sobrenome, $telefone, $cpf, $email, $dataNasc);

    $getNome = $novoFisica->getNome();
    $getSobrenome = $novoFisica->getSobrenome();
    $getTelefone = $novoFisica->getTelefone();
    $getCpf = $novoFisica->getCpf();
    $getEmail = $novoFisica->getEmail();
    $getDataNasc = $novoFisica->getDataNasc();

    echo "Nome: " . $getNome . "<br>";
    echo "Sobrenome: " . $getSobrenome . "<br>";
    echo "Telefone: " . $getTelefone . "<br>";
    echo "Cpf: " . $getCpf . "<br>";
    echo "Email: " . $getEmail . "<br>";
    echo "Data de Nascimento: " . $getDataNasc . "<br><br>";

    echo "Metodo mostrar informações: " . $novoFisica->mostrarInformacao();
}
// Juridica

else{
    // Pessoa

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $telefone = $_POST["telefone"];

    // Juridica

    $cnpj = $_POST["cnpj"];
    $faturamento = $_POST["faturamento"];

    $novoJuridica->__constructor($nome, $sobrenome, $telefone, $cnpj, $faturamento);

    $getNome = $novoJuridica->getNome();
    $getSobrenome = $novoJuridica->getSobrenome();
    $getTelefone = $novoJuridica->getTelefone();
    $getCnpj = $novoJuridica->getCnpj();
    $getFaturamento = $novoJuridica->getFaturamento();

    echo "Nome: " . $getNome . "<br>";
    echo "Sobrenome: " . $getSobrenome . "<br>";
    echo "Telefone: " . $getTelefone . "<br>";
    echo "Cnpj: " . $getCnpj . "<br>";
    echo "Faturamento: " . $getFaturamento . "<br><br>";

    echo $novoJuridica->consultarFaturamento();
}