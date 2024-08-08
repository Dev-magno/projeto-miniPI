<?php
// Classe Carro que representa um carro
class Vestido {
    private $nome;
    private $cor;
    private $tamanho;
    private $descricao;
    private $caracteristica;

    // Construtor da classe
    public function __construct($nome, $cor, $tamanho, $descricao, $caracteristica) {
        $this->nome = $nome;
        $this->cor = $cor;
        $this->tamanho = $tamanho;
        $this->descricao= $descricao;
        $this->caracteristica= $caracteristica;
    }

    // Getters para acessar as propriedades do vestido
    public function getNome() {
        return $this->nome;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getCaracteristica() {
        return $this->caracteristica;
    }
}  
?>