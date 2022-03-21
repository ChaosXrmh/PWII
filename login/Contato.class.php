<?php
class Contato{
    private $id; 
    private $nome;
    private $senha;
    private $pdo;

    function getId(){
        return $this->id;
    }

    function getNome(){
        return $this->nome;
    }

    function getSenha(){
        return $this->senha;
    }

    function setNome($nome){
        $this->nome = $nome;
    }   

    function setSenha($senha){
        $this->senha = $senha;
    }

    }