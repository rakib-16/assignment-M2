<?php
echo "For Looping with Increment using a Function: </br>";
function foreven($n){
    for($i=1;$i<=$n;$i++){
        if($i%2==0){
            echo "$i </br>";
        }
    }
}
foreven(20);

echo "while Looping with Increment using a Function: </br>";

function whileeven($star, $end){
    while($star<=$end){
        if($star%2==0){
            echo "$star <br/> ";   
        }
        $star++;
    }
}

whileeven(1,20);
echo "do-while Looping with Increment using a Function: </br>";

function dowhileeven($s,$e){
    do{
        if($s%2==0){
            echo "$s <br/> ";   
        }
        $s++; 
    }while($s<=$e);
}
dowhileeven(1,20);


