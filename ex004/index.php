<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Operadores Aritméticos</title>
</head>
<body>
<h1>Operadores Aritméticos</h2>
=======
    <title>Operadores aritiméticos</title>
</head>
<body>

<h1>Operadores Aritiméticos</h1>
>>>>>>> ac848bcdf1cb44686f7490ddea92b203ef736b40

    <?php

    $soma = 20 + 20;
    $subtração = 10 - 5;
    $divisão = 5 / 2;
    $resto = 5 % 2;
<<<<<<< HEAD
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
            
=======
    $multiplicacao = 5* 3;
    $potenciacao = 2 ** 3;

    echo "O resultador da soma é $soma <br>";
    echo "<br> O resultador da subtração é $subtração <br>";
    echo "<br> O resultador da divisão é $divisão <br>";
    echo "<br> O resto de 5/2 é $resto <br>";
    echo "<br> O resultador da multiplicação é $multiplicacao <br>";
    echo "<br> O resultador de 2 elevado a 3 é $potenciacao <br>";

    /*orderm de grandezas
    primeiro = () parênteses;
    segundo = potenciação;
    terceiro = multiplicação;
    quarto = divisão;
    quinto - soma;
    sexto = subtração;
    */

    // Primeira expressao: (3 + 2 ) * 4
    $valor1 = (3 + 2) * 4;
    

    // Exibindo os resultados - concatenação
    echo " <br> O resultado da primeira expressão: " . $valor1 . "<br> <br>";

    // Segunfa expressão: (2 * (2 + (2 - 1))) + 8 * 2

    $valor2 = (2 * (2 + (2 - 1))) + 8 * 2;
   
    echo "O resultado da segunda expressão: " . $valor2 . "\n";

    ?>
>>>>>>> ac848bcdf1cb44686f7490ddea92b203ef736b40
</body>
</html>