<?php 
    echo "Hello World<br>";
    print("Hello World<br>");
    print_r(["Hello World", "Hello PHP", "Hello my friend"]);
    echo "<br>";

    $str = 'Single Quoted String<br>';
    $str2 = "Double Quoted String<br>";

    $s1 = 'Hello.';
    $s2 = "My name is Mohammed.";
    $s3 = "I am a teacher";

    $string = $s1 . ' ' . $s2 . ' ' . $s3;
    echo $string."<br>";

    echo "$s1 $s2 $s3 <br>";

    $price = 14.15;

    echo "The price is: $" . $price;
    echo "Price is: $" . strval($price);
    echo strval($price) . '$price';
    echo "<br>";

    $var = 'This is Motasem';

    echo str_replace('Motasem', 'My Motasem', $var);
    echo "<br>";
    $var2 = "Hi there, I'm a Software Developer!";
    echo strpos($var2,'!');
    echo "<br>";
    echo substr($var2, 0, strpos($var2, ',') + 1);
    echo "<br>";


    $st1 = 'hello';
    $st2 = "Hello";

    if($st1 == $st2){
        echo "Case-sensitive ==<br>";
    }

    if($st1 === $st2){
        echo "Case-sensitive ===<br>";
    }

    if(strcmp($st1, $st2) == 0){
        echo "Case-sensitive strcmp()<br>";
    }

    if(strcasecmp($st1, $st2) == 0){
        echo "Case-insensitive strcasecmp()<br>";
    }

    // This is the way that I'm managing my things in order to keep track of every milliseconds or microseconds or even nanoseconds, or you can say seconds


    