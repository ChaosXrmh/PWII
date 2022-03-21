<?php

include "Contato.class.php"
;
$contato = new Contato();

$contato->setNome("ChaosX");
$contato->setSenha("123");

$nome   = $contato->getNome();
$senha  = $contato->getSenha();

echo "Nome:" . $nome . "<br>";
echo "Senha:" . $senha;