<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>meu primeiro código :D</title>
</head>
<body>
 <h2> <?php 
 

    // Declarando uma variável 
    $nome = "Gigi";
    $sobrenome = "silva";              


    //a variavél nome pode ser mudada
    $nome = "Gigi Pereira";


    echo "seja bem-vinda, $nome $sobrenome";

    // esse print é quase a mesma coisa do echo.. o que tá em parentese é pra mostrar um emoji :D
    print ("\u{1F5A5}");


        // declarando uma constante
        const time = "Brasil";
        
        // uma constante nao pode ser mudada, caso tente dará erro de cópia de constante, mas pode ser acrescentada uma nova constante, ex:

        const timenovo = "barcelona";

        // teste

        echo " meu time de futebol é " . time .  " e "  . timenovo;


        // quebra de linha antes do proximo echo
    echo '<br> </br>';


        echo 'meu time de futebol ta ruim boy.. ;-;' . time
    
    ?>   </h2>
   


</body>
</html>