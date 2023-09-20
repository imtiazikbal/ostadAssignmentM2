<?php 
function printEvenNumbersForLoop($start, $end, $step) {
     for ($i = $start; $i <= $end; $i += $step) {
        
             echo ($i+1) . " ";
         
    }
}

 //Call the function to print even numbers
 printEvenNumbersForLoop(1,20,2);
 echo "\n";
