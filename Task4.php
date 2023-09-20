<?php

echo "Fibonacci Series printing using a Function: </br>";
function fibonacci($n){
    $n1 = 0;
    $n2 = 1;
    echo "$n1 </br> $n2 </br>";
    for($i=1;$i<=$n;$i++){
        $n3=$n2+$n1;
        $n1=$n2;
        $n2=$n3;
        echo "$n3 </br>";
    }
    
}

fibonacci(15);

