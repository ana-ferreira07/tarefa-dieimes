<?php
   $pessoa1 = array();
   $pessoa2 = array();
   $pessoa3 = array();
   $pessoa4 = array();
   
   $pessoa1 [0][0][0][0][0][0] = "Maria";
   $pessoa1 [0][0][0][0][0][1] = "16 anos";
   $pessoa1 [0][0][0][0][0][2] = "ivaipora";
   $pessoa1 [0][0][0][0][0][3] = "1,65cm";
   $pessoa1 [0][0][0][0][0][4] = "preto";
   $pessoa1 [0][0][0][0][0][5] = "branca";


   $pessoa2 [0][0][0][0][0][0] = "Matheus";
   $pessoa2 [0][0][0][0][1][1] = "16 anos";
   $pessoa2 [0][0][0][0][2][2] = "Jardim Alegre";
   $pessoa2 [0][0][0][0][3][3] = "1,78cm";
   $pessoa2 [0][0][0][0][4][4] = "roxo";
   $pessoa2 [0][0][0][0][5][5] = "amarelo";

   $pessoa3 [0][0][0][0][0][0] = "Ana Beatriz";
   $pessoa3 [0][0][0][1][1][1] = "16 anos";
   $pessoa3 [0][0][0][2][2][2] = "Ivaipora";
   $pessoa3 [0][0][0][3][3][3] = "1,57cm";
   $pessoa3 [0][0][0][4][4][4] = "preto";
   $pessoa3 [0][0][0][5][5][5] = "pardo";

   $pessoa4 [0][0][0][0][0][0] = "Leticia";
   $pessoa4 [0][0][1][1][1][1] = "16 anos";
   $pessoa4 [0][0][2][2][2][2] = "Ivaipora";
   $pessoa4 [0][0][3][3][3][3] = "1,55cm";
   $pessoa4 [0][0][4][4][4][4] = "preto";
   $pessoa4 [0][0][5][5][5][5] = "branca";

   echo " A " . $pessoa1[0][0][0][0][0][0] . " tem " . $pessoa1[0][0][0][0][0][1] . " e mora em " . $pessoa1[0][0][0][0][0][2] . " e tem " . $pessoa1[0][0][0][0][0][3] . " as cores favoritas dela são " . $pessoa1 [0][0][0][0][0][4] . " e " . $pessoa1 [0][0][0][0][0][5];
   echo("</br>");
   echo " A " . $pessoa2[0][0][0][0][0][0] . " tem " . $pessoa2[0][0][0][0][1][1] . " e mora em " . $pessoa2[0][0][0][0][2][2] . " e tem " . $pessoa2[0][0][0][0][3][3] . " as cores favoritas dela são " . $pessoa2 [0][0][0][0][4][4] . " e " . $pessoa2 [0][0][0][0][5][5];
   echo("</br>");
   echo " A " . $pessoa3[0][0][0][0][0][0] . " tem " . $pessoa3[0][0][0][1][1][1] . " e mora em " . $pessoa3[0][0][0][2][2][2] . " e tem " . $pessoa3[0][0][0][3][3][3] . " as cores favoritas dela são " . $pessoa3 [0][0][0][4][4][4] . " e " . $pessoa3 [0][0][0][5][5][5];
   echo("</br>");
   echo " A " . $pessoa4[0][0][0][0][0][0] . " tem " . $pessoa4[0][0][1][1][1][1] . " e mora em " . $pessoa4[0][0][2][2][2][2] . " e tem " . $pessoa4[0][0][3][3][3][3] . " as cores favoritas dela são " . $pessoa4 [0][0][4][4][4][4] . " e " . $pessoa4 [0][0][5][5][5][5];
   echo("</br>");
?>