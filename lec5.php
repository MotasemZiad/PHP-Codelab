<?php 
    $var = 5;
    $var2 = $var;
    echo "$var = $var2 <br>";

    $var = $var +1;
    $var += 5;
    $var *= 2;

    echo $var;
    
    $v1 = 4;
    $v2 = 3;

    // $v1 += $v2 + $v1 *2;
    $v1 = $v1 + $v2 + $v1 * 2;

    echo "<br> $v1 <br>";

    $n1= "5";
    $n2 = 3;
    $result = $n1 * $n2;

    echo $result. "<br>";
    if($n1 <=> $n2){
        echo "true<br>";
    }else {
        echo "false<br>";
    }

    echo $n1 <=> $n2 ."<br>";

    /* 
    == equal 
    === identical
    != not equal
    !== not identical
    > greater than
    < less than
    >= greater than of equal to
    <= less than or equal to
    */

    $x = 5;
    // $some = $n1 * ++$x;
    // $some = $n1 * $x++;
    // $some = $n1 * --$x;
    $some = $n1 * $x--;

    echo "Some = $some :: X = $x<br>";
    /*
    Increment & Decrement
    Pre-increment ++$x
    Post-increment $x++

    Pre-decrement --$x
    -Post-decrement $x--
    */


    $v = 5;
    $r = $v++ + ++$v + $v++ + ++$v;

    echo "$r <br>";

    // Logical Operator And Or Xor && || !

    $a = FALSE;
    $b = True;

    echo var_dump($a) . "<br>";

    // String operator . for concatenation & .= for appending

    $txt1 = "Motasem ";
    $txt2 = "Abu Nema";
    $name = $txt1 . $txt2; 
    $txt3 = " (Abu Omar)";

    $name .= $txt3;
    // echo $txt1 . $txt2 . "<br>";
    echo $name . "<br>";

    // Array Operators 

    $arr1 = ["Ahmed", "Hassan", 99.6, TRUE, 25];
    $arr2 = ["Ahmed", "Hassan", 99.6, TRUE, 25];
    $arr3 = $arr1 + $arr2;
    print_r($arr3);

    echo $arr1 === $arr2;

    $q = null;

    echo $q ?? "<br>Hello<br>";

    $isTrue = FALSE;
    echo $isTrue ? "TRUE<br>" : "FALSE<br>";









