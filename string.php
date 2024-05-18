<?php
    $strings = ["Hello", "World", "PHP", "Programming"];
   $vowels = array('a','e','i','o','u');

    foreach( $strings as $value) {
       $count_vowels = 0;
       $reverse = strrev($value);
       for($i = 0; $i < strlen($value); $i++) {
           if(in_array(($value)[$i], $vowels)) {
               $count_vowels++;
           }
       }
        echo "Original String: $value,  Vowel Count: $count_vowels, Reversed String : $reverse ".PHP_EOL;
       }    
     
   
   





  

                