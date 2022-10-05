<?php

  // LIST E EXTRACT - TRANSFORMAR UM ARRAY EM VÁRIAS VARIÁVEIS

  /*
    É possível transformar os valores de um array, cada um para
    uma variável específica. Utilizamos para isso a função list().
  */

  $nomes = ['diego', 'geison', 'junior'];
  // list($nome1, $nome2, $nome3) = $nomes;

  // echo $nome1 . PHP_EOL;
  // echo $nome2 . PHP_EOL;
  // echo $nome3 . PHP_EOL;
  
  // se quisermos apenas alguns elementos
  list($nome1,,$nome2) = $nomes;
  echo $nome1 . PHP_EOL;
  echo $nome2 . PHP_EOL;

  // Podemos ainda usar o extract para, automaticamente, cada valor
  // passar para uma variável com o nome da chave

  $funcionarios = [
    'administrador' => 'joao',
    'secretaria' => 'ana',
    'contabilidade' => 'carlos',
  ];

  extract($funcionarios);
  echo $administrador . PHP_EOL;
  echo $secretaria . PHP_EOL;
  echo $contabilidade . PHP_EOL;

  // IMPORTATE: não devemos usar o extract co arrays que não controlamos,
  // como por exemplo os dados de superglobal $_POST[] quando fazemos a
  // submissão de um formulário.