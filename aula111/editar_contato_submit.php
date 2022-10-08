<?php

  // criar a instancia da classe EasyPDO
  require_once('inc/config.php');
  require_once('inc/EasyPDO.php');
  $bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

  // verificar se existe um POST
  if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die('acesso negado.');
  }

  $id_contato = aes_desencriptar($_POST["id_contato"]);
  if ($id_contato == -1 || $id_contato == false) {
    die('Acesso inválido!');
  }

  $nome = $_POST["nome"];
  $telefone = $_POST["telefone"];

  $parametros = [
    ':id_contato' => $id_contato,
    ':nome' => $nome,
    ':telefone' => $telefone,
  ];

  $bd->update("UPDATE dados SET nome = :nome, telefone = :telefone WHERE id_contato = :id_contato", $parametros);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edição concluída</title>
</head>

<body>
  <h2>Contato editado com sucesso!</h2>
  <div>
    <a href="ver_contatos.php">Voltar</a>
  </div>
</body>

</html>