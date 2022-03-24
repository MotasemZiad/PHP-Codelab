<?php 
function sum($n1, $n2){
    return $n1 + $n2;
}

function sub($n1, $n2){
    return $n1 - $n2;
}

function mul($n1, $n2){
    return $n1 * $n2;
}

function div($n1, $n2){
    if($n2 == 0) throw new Exception("Division By Zero Error");
    return $n1 / $n2;
}