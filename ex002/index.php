<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos de variáveis</title>
</head>
<body>
    <h1>
    <?php
    
    //variavel do tipo string. ( só string tem aspas )
    $sobrenome = "Silva";

    // outra variavel do tipo int ( inteiros)
    $idade = 19;

    // variavel do tipo float 
    $peso = 54.00;

    // variavel do tipo boolean ( verdadeiro ou falso )
    $casada = false;    

    echo "$sobrenome $idade $peso ";

    // método 1 : usando var_dump para exibir o valor boolean
    var_dump($casada); // exibe 'bool(false)'

    // método 2: usando uma conversão booleana para string 
    echo ($casada ? "casada" : "não é casada"); // exibe não é 'casada', pois determinamos isto com o var_dump 



    ?>
    </h1>






</body>
</html>