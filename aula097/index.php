<?php

  //CONECTAR PHPMYADMIN AO MYSQL

  //definição da ligação
  $gestor = new PDO('mysql:host=localhost;dbname=loja;charset=utf8', 'root', '');
  $dados = $gestor->query("SELECT * FROM clientes");
  $clientes = $dados->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table, th, td{
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <h3>CLIENTES</h3>
  <hr>
  <table>
    <thead>
      <tr>
        <th>ID cliente</th>
        <th>Nome</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($clientes as $cliente):?>
        <tr>
          <td><?= $cliente['id_cliente']; ?></td>
          <td><?= $cliente['nome']; ?></td>
        </tr>
      <?php endforeach;?>
    </tbody>
  </table>

  <p>Total de clientes: <strong><?= count($clientes); ?></strong></p>
</body>
</html>
