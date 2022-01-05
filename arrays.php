<?php

    $carros =array("golf","fusca","camaro");
    print_r($carros); //jeito de imprimir arrays
    

    $moto =array(); // outra forma de declarar array e depois eu posso
   // preenchelo


    print_r($moto);

   $clientes = ['pedro'];
   print_r($clientes);



   echo count($carros);  // contando a quantidade de intens

   foreach($carros as $item)     // para cada elemento eu atribuo um valor
   {
        echo $item."<br>"; 


   }
?>