<?php

//Step Two using start and end, step argument

function evenNumberPrint($start, $end, $step){

    $count = $start;
    do{
        echo $count+1;
        echo"\n";
        $count = $count +$step;
    }while($count<=$end);
    
}
evenNumberPrint(1,20,2);

