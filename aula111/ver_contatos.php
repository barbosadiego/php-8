<?php 
  // criar a instancia da classe EasyPDO
  require_once('inc/config.php');
  require_once('inc/EasyPDO.php');

  // ligar à base de dados
  $bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

  //buscar todos os contatos na base de dados
  $contatos = $bd->select("SELECT * FROM dados");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ver Contatos</title>
  <style>
    table, th, td{
      border: 1px solid black;
    } 
  </style>
</head>
<body>
  <h3>Contatos existentes</h3>
  <hr>
  <table>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($contatos as $contato):?>
        <tr>
          <td><?= $contato['nome'] ?></td>
          <td><?= $contato['telefone'] ?></td>
          <td><a href="editar_contato.php?id=<?= aes_encriptar($contato['id_contato']) ?>">Editar</a></td>
          <td><a href="excluir_contato.php?id=<?= aes_encriptar($contato['id_contato']) ?>">Excluir</a></td>
        </tr>
      <?php endforeach;?>
    </tbody>
  </table>

  <a href="index.php">Voltar</a>
</body>
</html>