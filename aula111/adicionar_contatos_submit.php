<?php

// verificar se foi feito um post
if($_SERVER["REQUEST_METHOD"] != 'POST'){
  die('Acesso negado');
}

// adicionar à base de dados
require_once('inc/config.php');
require_once('inc/EasyPDO.php');
$bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

// parametros
$parametros = [
  ':nome' => $_POST["nome"],
  ':telefone' => $_POST["telefone"],
];

$bd->insert("INSERT INTO dados VALUES(0, :nome, :telefone)", $parametros);
echo 'Contato salvo com sucesso!';