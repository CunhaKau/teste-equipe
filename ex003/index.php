<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Comentários e variável dentro da variável</title>
</head>
<body>

    <h2> Variável dentro de outra Variável </h2>

    <?php

    // para comentários de uma linha eu uso o barra e barra "/ algo ai /" ou "/* algo ai */", sempr fechando o */ no fim.  

   $nome= "Geovanna";
    $sobrenome = "Pereira";

    // A variavél abaixo recebe uma interpolação

    $frase = "Seu nome é $nome, seu sobrenome é $sobrenome";

    echo "$frase";

    // com concatenção é " echo "seu nome é ", . nome;  


    ?>

=======
    <title>Comentários e Variável dentro da variável</title>
</head>
<body>

<h2> Variável dentro de Variável </h2>

<?php
    
      //para comentário de uma linha eu uso o barra + barra
      /* eu uso
      para comentar
      várias linhas
      ap mesmo tempo
      */

      $nome = "Victor";
      $sobrenome = "Previato";

      //A Variável abaixo recebe uma interpolaçao
      $frase = "Seu nome é $nome, seu sobrenome é $sobrenome";

      echo $frase;
?>


     
    
>>>>>>> ac848bcdf1cb44686f7490ddea92b203ef736b40
</body>
</html>