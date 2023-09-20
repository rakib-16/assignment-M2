<?php
echo "Break on Condition: </br>";
    $f1 = 0;
    $f2 = 1;
    $n = 30;
    echo $f1;
    echo '<br/>';
    echo $f2;
    echo '<br/>';
    for($i = 1; $i <= $n; $i++) {
        $f3 = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f3;
        if($f3 > 100){
            break;
        }
        else{
            echo $f3 ."<br />";
            
        }
    }
?>