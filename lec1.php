<?php

function add($n1, $n2){
    return $n1 + $n2;
}

function sub($n1, $n2){
    return $n1 - $n2;
}

function mul($n1, $n2){
    return $n1 * $n2;
}

function div($n1, $n2){
    if($n2 == 0){
        throw new Exception("Divide by ZERO");
    }else {
        return $n1 / $n2;
    }
}
echo add(8, 15);
echo "<br>";
echo sub(8, 15);
echo "<br>";
echo mul(8, 15);
echo "<br>";

try{
    echo sub(9, 0);
}catch (Exception $e){
    echo $e;
}
