<?php

//Step Two using start and end, step argument

function evenNumberPrint($start, $end, $step){

    $count = $start;
    while($count<=$end){
        echo $count +1;
        echo"\n";
        $count = $count +$step;
    }
    
}
evenNumberPrint(1,20,2);

