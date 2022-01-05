<?php

    //array númerico

    $nome  =  array("teste");

    print_r($nome);

    echo "<br>";


    // Arrays associativos onde os identificadores são nomes

    $cliente = array("nome"=> "Pedro", "idade"=> "32");


     print_r($cliente);

     echo "<hr>";
   //Arrays multidimencional tipo matrizes


   $times = array(
            "cariocas" => array("vasco", "flamengo","botafogo"),
            "paulistas" => array("palmeiras", "santos")

   );
   
   print_r ($times);

?>