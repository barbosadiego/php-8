<?php

  //FILESYSTEM 

  //gravar texto completo

  $texto = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa assumenda error accusamus porro iste! Ipsa obcaecati placeat odio? Quam repellendus officia in non perferendis nulla optio architecto culpa dolore accusantium. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo minus doloribus aspernatur, mollitia atque officia eveniet dolorum earum blanditiis soluta, recusandae officiis culpa voluptatum dolores. Eligendi cumque cum tenetur nihil. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam voluptatibus sit, recusandae sequi earum et modi nulla consectetur non sint deleniti unde neque at? Animi facilis inventore autem? Aliquid, suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic expedita, tenetur assumenda modi sint eum dolorum quas blanditiis accusamus, dolore sunt ipsam repudiandae deserunt aliquam enim temporibus magni ullam dignissimos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque earum ducimus dolorem? Labore repellendus voluptate, natus nesciunt nam provident architecto facilis, suscipit ipsam quam nemo omnis quod dolores quos tenetur?';

  file_put_contents('texto_completo.txt', $texto);
  //esta função é equivalente a chamar fopen, fwrite e fclose tudo na mesma função

  //ler todo o conteudo de um arquivo para uma variável
  $texto = file_get_contents('texto_completo.txt');
  echo $texto;