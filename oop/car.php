<?php 

class Car {
    private $name;
    private $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function __destruct(){
        $this->name = "";
        $this->color = "";
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setColor($color){
        $this->color = $color; 
    }

    public function getColor(){
        return $this->color;
    }
}

$c = new Car("BMW", "Green");
$c1 = new Car("Fiat", "Black");
$c2 = new Car("Kia", "Grey");
echo $c->getName();
echo "<br>";
echo $c->getColor();
echo "<br>";

echo $c1->getName();
echo "<br>";
echo $c1->getColor();
echo "<br>";






