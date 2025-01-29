<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
<h1>Operadores Aritméticos</h2>

    <?php

    $soma = 20 + 20;
    $subtração = 10 - 5;
    $divisão = 5 / 2;
    $resto = 5 % 2;
    $multiplicação = 5 * 3;
    $potenciação = 2 ** 3;

    echo "Resultado da soma é $soma <br></br>";
    echo "Resultado da subtração é $subtração <br></br>";
    echo "Resultado da divisão é $divisão <br></br>";
    echo "O resto da divisão é $resto <br></br>";
    echo "Resultado da multiplicação é $multiplicação <br></br>";
    echo "Resultado da potenciação é $potenciação <br></br>";

    /* ordem de grandeza

     Primeiro = ( )
     fora od parentese se calcula na ordem abaixo 
     segundo = potemciacao
     terceiro = multiplicacao
     quarto = divisao 
     quinto = soma
     sexto = subtração
     
     */


        //primeira expressão: (3+2) * 4

        $valor1 = (3+2) * 4;

    // exibindo os resultados - concatenação
    echo "resultado da primeira expressão:" . $valor1 . "<br></br>";

    // /n também serve como uma quebra de linha, assim como o <br></br>

    //segunda expressão : (2 *(2 + (2 - 1))) + 8

    $valor2 = (2 *(2 + (2 - 1))) + 8 * 2;

        //     echo "resultado da primeira expressão:" . $valor2 . "\n";

    echo "resultado da segunda expressão" . $valor2 . "<br></br>";


    // também tem assim: 

    $a = 2;
    $b = 3;
    $c = 4;
    $calculo = ($a = $b) * $c;

    echo "resultado da terceira expressão" . $calculo . "<br></br>";

    





    ?>  
            
</body>
</html>