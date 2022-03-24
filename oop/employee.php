<?php
class Employee {
    private $id;
    private $name;
    private $salary;

    public function __construct($id, $name, $salary)
    {
        $this->id = $id;
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function getSalary(){
        return $this->salary;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }

    public function printReport(){
        echo "ID: $this->id\nName: $this->name\nSalary: $this->salary";
    }
}

class FullTimeEmployee extends Employee {
    public $address;
    public $commission;

    public function __construct($address, $commission)
    {
        parent::__construct($id, $name, $salary);
        $this->address = $address;
        $this->commission = $commission;
    }
}

$emp = new Employee(1, "Ahmed Hassan", 5500.99);
$emp1 = new Employee(2, "Ali Sameer", 1200.99);

$emp->printReport();
echo "<br>";
$emp1->printReport();