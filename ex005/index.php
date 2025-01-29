<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
<<<<<<< HEAD
    
<h2>Operadores de Atribuição</h2>

    <?php 
    
    // string
    $rua = "Rua Amador Bueno";

    //atribuição com concatenação \( o .= aqui conecta a string anterior com a atual sem substituir ela 
    
    $rua .= "na cidade de São Paulo";

    // float
    $preco = 2.45;
    // atribuição soma
    $preco += 2.30;
    // atribuição de subtração  (todo - ou + com = ( -=; +=; ), é uma soma de um novo valor com a prinmeira variavél que foi o preco = 2.45;)
    $preco -= 1.35;

    // Formata o meu número para usar virgula
    $preco_formatado = number_format($preco, 2, ',', '.'); 

    // exibe o resultado - por interpolação 
    echo "$rua, <br> Preço R$ $preco_formatado";
    


    ?>

=======

  <h2>Operadores de Atribuição</h2>

  <?php 
  
  //string

  $rua = "Rua Amador Bueno";
  //Atribuição com concatenação
  $rua .= " ,na cidade de São Paulo"; //.= concatena uma string atualizando uma variavel

  //float
  $preco = 2.45;
  //atribuição de soma
  $preco += 2.30;
  //atribuicao de subtração
  $preco -= 1.30;

  //formata o número para usar vírgula como separador decimal

  $preco_formatado = number_format($preco, 2, ',','.');


  //exibe o resultado - por interpolação

  echo "$rua <br> <br> Preço R$ $preco_formatado";
  
  
  ?>


    
>>>>>>> ac848bcdf1cb44686f7490ddea92b203ef736b40
</body>
</html>