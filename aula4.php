<?php
for ($i = 1; $i <= 100; $i++){
    $resto_por_3  = $i % 3;
    $resto_por_5 = $i % 5;
    if ($resto_por_3 ==0){
        print 'fizz <br>';
    } else {
   if ($resto_por_5 == 0){
    print 'buzz <br>';
   } else {
    print $i . '<br>';
   }
   }
    }
    
    

?>