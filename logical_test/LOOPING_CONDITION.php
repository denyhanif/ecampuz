<?php
 
 for($j = 0; $j <= 50; $j++) {
     if ( $j % 3 == 0 && $j % 5 == 0) {
         echo "FooBarr<br>";
     } else if ($j % 5 == 0) {
         echo "Bar<br>";
     } else if ($j%3 == 0) {
         echo "Foo<br>";
     } else {
         echo $j . "<br>";
     }
 }
 
?>