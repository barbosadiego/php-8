<?php

  // DATETIME - calcular idade

  $data_nascimento = new DateTime('05-07-1986');
  echo calcular_idade($data_nascimento);

  function calcular_idade($data_nascimento){
    $agora = new DateTime();

    //primeiro cálculo dos anos
    if($agora->format('Y') == $data_nascimento->format('Y')){
      //verifica se estamos no mesmo ano
      $anos = 1;
    } else {
      $anos = $agora->format('Y') - $data_nascimento->format('Y');
    }

    //validar os anos de forma precisa
    //se ainda não chagamos ao nosso mês, 
    //temos menos 1 ano do que é calculado
    if($agora->format('m') < $data_nascimento->format('m')){
      $anos--;
    } elseif($agora->format('m') == $data_nascimento->format('m')){
      //estamos no mês de nosso aniversário
      //vamos ver se o dia já chegou
      if($agora->format('d') < $data_nascimento->format('d')){
        $anos--;
      }
    }
    return $anos != 1 ? "você tem $anos anos" : "você tem 1 ano";
  }
 