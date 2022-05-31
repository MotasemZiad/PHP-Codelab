<?php 
    // class Person{
    //     public $name;
    //     public $email;
    // }

    // $p1 = new Person();

    // $p1->name = 'Ahmed';
    // echo ($p1->name). "<br>";
    // $date = date('d-m-Y'); // return a String 
    // echo $date;

    // die(); # To terminate the current script.
    // exit(); # the same as to die

    // sort([]);
    // rsort([]);
    // asort([]);
    // ksort([]);
    // arsort([]);
    // krsort([]);
    // var_dump($date);

    // $arr = array(5 => 1, 12 => 2); 
    // $arr[] = 56;
    // $arr['x'] = 42;
    // echo var_dump($arr) . "<br>";

    // $input = 6;
    // if($input == 5){
    //     $value = "Large";
    // }else if($input < 5){
    //     $value = "Small";
    // }

    // echo $value; // Undefined variable 


    //! Q1: 
    class Dragonball{
        public $ballCount = 0;

        public function iFoundaBall(){
            global $ballCount;
            $ballCount++;

            if($ballCount == 7){
                echo "Your wish is printed<br>";
                $ballCount = 0;
            }
        }
    }

    $dragon = new Dragonball();
    $dragon->iFoundaBall();
    $dragon->iFoundaBall();
    $dragon->iFoundaBall();
    $dragon->iFoundaBall();
    $dragon->iFoundaBall();
    $dragon->iFoundaBall();
    $dragon->iFoundaBall();

    //! Q2:
    class Student{
        public $name;
        # In PHP we can't created multiple constructors.
        public function __construct()
        {
            
        }

        public static $v = "aa";
    }

    Student::$v = "bb";
    Student::$v = "aa";
    Student::$v = "cc";

    $std = new Student;
    $std2 = new Student;
    $std::$v = "bb";
    $std2::$v = "ahmed";
    
    echo Student::$v . "<br>"; // ahmed

    //! Q3: 

    function calculateAverage($array){
        $avg = 0;
        $sum = 0;

        for ($i=0; $i < count($array); $i++) { 
            $sum += $array[$i];
        }
        $avg = $sum / count($array);
        return $avg;
    }
    $fruits = ['Apple', 'Strawberry', 'Orange', 'Pineapple', 'Banana', 'Lemon', 'Watermelon'];
    $numbers = [1,2,3,4,5];
    echo calculateAverage($numbers) . "<br>";

    echo date('Y-M-D h:i:s') . "<br>";
?>