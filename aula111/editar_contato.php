<?php

  if(!isset($_GET["id"])){
    die('acesso negado');
  }
  
  $id_contato = $_GET["id"];

  // criar a instancia da classe EasyPDO
  require_once('inc/config.php');
  require_once('inc/EasyPDO.php');
  $bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

  $id_contato = aes_desencriptar($id_contato);

  $parametros = [
    ':id_contato' => $id_contato
  ];

  $contato = $bd->select("SELECT * FROM dados WHERE id_contato = :id_contato", $parametros)[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Contato</title>
</head>

<body>
  <form action="editar_contato_submit.php" method="post">
    <input type="hidden" name="id_contato" value="<?= $id_contato ?>">
    <div>
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" maxlength="50" value="<?= $contato['nome']; ?>">
    </div>
    <div>
      <label for="telefone">Telefone:</label>
      <input type="text" name="telefone" id="telefone" maxlength="20" value="<?= $contato['telefone']; ?>" >
    </div>
    <div>
      <input type="submit" value="Salvar">
    </div>
    <div>
      <a href="ver_contatos.php">Cancelar</a>
    </div>
  </form>
</body>

</html>