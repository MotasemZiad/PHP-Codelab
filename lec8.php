<?php 
    date_default_timezone_set("Asia/Gaza");
    echo date("D, d M Y H:i:s")."<br>"; # Mon, 11 Feb 2022 05:32:30
    echo Date('d-m-y')."<br>";
    echo Date('d/m/y')."<br>";
    echo Date('d.m.y')."<br>";
    echo Date('d.m.y')."<br>";
    echo Date('h:i:s')."<br>";

    $num1 = 5.0;
    $num2 = 5;

    $result = $num1 + $num2;
    echo $result."<br>";

    if($num1 === $num2){
        echo "Yep<br>";
    }else {
        echo "Nope<br>";
    }
    echo "<br><strong>Logical Operator</strong><br>";
    echo "--------<br>";
    echo "And-&& =><br> T && T = T<br>T && F = F<BR> F && T = F<BR> F && F = F<BR>";
    echo "--------<br>";
    echo "Or-|| =><br> T && T = T<br>T && F = T<BR> F && T = T<BR> F && F = F<BR>";
    echo "--------<br>";
    echo "Xor-^ =><br> T && T = F<br>T && F = T<BR> F && T = T<BR> F && F = F<BR>";
    echo "--------<br>";
    echo "Not-! =><br> !T = F<br>!F = T<BR>";
    echo "*******<br>";

    if ($num1 >= 5 && $num2 < 5) {
        echo "&&- True<br>";
    } else {
        echo "&&- False<br>";
    }
    if ($num1 >= 5 AND $num2 < 5) {
        echo "and- True<br>";
    } else {
        echo "and- False<br>";
    }
    if ($num1 >= 5 || $num2 < 5) {
        echo "||- True<br>";
    } else {
        echo "||- False<br>";
    }
    if ($num1 >= 5 OR $num2 < 5) {
        echo "or- True<br>";
    } else {
        echo "or- False<br>";
    }
    if ($num1 >= 5 ^ $num2 < 5) {
        echo "^- True<br>";
    } else {
        echo "^- False<br>";
    }
    if ($num1 >= 5 XOR $num2 < 5) {
        echo "xor- True<br>";
    } else {
        echo "xor- False<br>";
    }
    

    $str = "<ul><strong>Programming Languages</strong>";
    $str .= "<li>Java</li>";
    $str .= "<li>Python</li>";
    $str .= "<li>C++</li>";
    $str .= "<li>C</li>";
    $str .= "<li>Objective-C</li>";
    $str .= "<li>C#</li>";
    $str .= "<li>Php</li>";
    $str .= "<li>Ruby</li>";
    $str .= "<li>Scala</li>";
    $str .= "<li>JavaScript</li>";
    $str .= "<li>TypeScript</li>";
    $str .= "<li>R</li>";
    $str .= "<li>Kotlin</li>";
    $str .= "<li>Swift</li>";
    $str .= "<li>Dart</li>";
    $str .= "<li>Julia</li>";
    $str .= "</ul>";

    echo $str."<br>";

    for ($i=1; $i <= 10; $i++) { 
        echo "$i *";
        for ($j=1; $j < 10; $j++) { 
            echo "$j";
        }
        echo "<br>";
    }

    for ($i=0; $i < 10; $i++) { 
        for ($j=0; $j < $i; $j++) { 
            echo "*";
        }
        echo "<br>";
    }

    function getScholarship($credit, $gpa){
        if(is_numeric($credit) && is_numeric($gpa)){
            if($gpa < 40 || $gpa > 100){
                echo "Invalid GPA!<br>";
            }else if($credit < 0) {
                echo "Invalid Credit!";
            }else{
                if($gpa >= 95){
                    echo "Scholarship amount is 70%";
                }elseif($gpa >= 90){
                    echo "Scholarship amount is 50%";
                }elseif($credit <= 100){
                    echo "Scholarship amount is 20%";
                }else {
                    echo "You don't have scholarship";
                }
            }
        }else {
            "Error! you must enter a number";
        }
    }

    getScholarship(120, 100);
