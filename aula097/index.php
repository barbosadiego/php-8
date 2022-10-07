<?php

//CONECTAR PHPMYADMIN AO MYSQL

//definição da ligação
$gestor = new PDO('mysql:host=localhost;dbname=loja', 'root', '');
$dados = $gestor->query("SELECT * FROM clientes");
$clientes = $dados->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($clientes);