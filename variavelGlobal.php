<?php

    $nome = "pedro";
  
    function exibe_nome(){
        global $nome; // acessando a variavel global
        echo $nome;

    }

 exibe_nome();

  echo "========================================";

  $A=5;
  $B=4;
  $C=3;

  function soma(){

     echo   $GLOBALS['C']+$GLOBALS['B']+$GLOBALS['C']; //OUTRA FORMA DE ACESSAR DE FORMA GLOBAL




  }

  soma();

?>