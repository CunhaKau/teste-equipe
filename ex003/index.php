<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

</body>
</html>