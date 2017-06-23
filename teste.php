<?php

     $am1 = ['nome'=> 'Eduardo', 'idade'=> '15', 'cidade'=> 'Joinville'];
     $am2 = ['nome'=> 'Gabriela',     'idade'=> '16', 'cidade'=> 'São Francisco'];
     $am3 = ['nome'=> 'Gabriel',  'idade'=> '16', 'cidade'=> 'Joinville'];

     $amigos = [$am1, $am2, $am3];

     foreach ($amigos as $amigo){

         echo $amigo['nome'];
         echo "\n";
         echo $amigo['idade'];
         echo "\n";
         echo $amigo['cidade'];
         echo "\n";
         echo "\n";
         sleep(3);

     }

