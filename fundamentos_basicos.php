<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUndamentos PHP</title>
</head>
<body>
    <?php
        $teste = "teste";
        echo "$teste";  // declarando variaveis
    
         // criando nome dinamico para as variaveis

         $teste = "nome";

         $$teste = "Pedro";  // estou dizendo que essa minha variavel recebera o nome do conteudo de teste;
                                   
         echo  $nome;
  
        
  ?>
</body>
</html>