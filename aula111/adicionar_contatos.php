<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Contatos</title>
</head>
<body>
  <form action="adicionar_contatos_submit.php" method="post">
    <div>
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" maxlength="50">
    </div>
    <div>
      <label for="telefone">Telefone:</label>
      <input type="text" name="telefone" id="telefone" maxlength="20">
    </div>
    <div>
      <input type="submit" value="Guardar">
    </div>
    <div>
      <a href="index.php">Voltar</a>
    </div>
   
  </form>
</body>
</html>