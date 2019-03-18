<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 17/03/2019
 * Time: 9:52 PM
 */

namespace Crossover\Destructor;


/*$anonymous = new class{
    public function __destruct() {
        echo "Destruyendo la clase " , get_class($this) , "\n";
    }
};*/

class Employee {
    public $name;
    protected $lastName;
    protected $age;
    private $department;

    public function __construct(string $name, string $lastName, int $age, string $department) {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->department = $department;
    }

    public function getData() {
        if ($this->name != '') {
            echo "Persona: {$this->name} {$this->lastName}, edad: {$this->age}" . PHP_EOL;
        }
    }

    /*public function setDepartment() {
        return new class($this->name, $this->lastName, $this->age, $this->department) extends Employee {
            private $setDepartment;

            public function __construct($name, $lastName, $age, $department) {
                parent::__construct($name, $lastName, $age, $department);
                $this->setDepartment = $department;
            }

            public function __destruct() {
                echo $this->getData();
                echo "Department: {$this->setDepartment}";
            }
        };
    }*/

    public function __destruct() {
        echo "Destruyendo la clase " , get_class($this) , "\n";
        return new class($this->name, $this->lastName, $this->age, $this->department) extends Employee {
            private $setDepartment;

            public function __construct($name, $lastName, $age, $department) {
                parent::__construct($name, $lastName, $age, $department);
                $this->setDepartment = $department;
            }

            public function __destruct() {
                echo $this->getData();
                echo "Department: {$this->setDepartment}" . PHP_EOL;
                echo "Destruyendo la clase " , get_class($this) , "\n";
            }
        };
    }
}

$employee = new Employee("Edwin", "Rincon", 31, "Development");
//$employee->setDepartment();

//ejecuta el destrucor despues de la ultima vez que use la referencia del objecto
$employee->name = "Raul";
//Se invoca al destructor de employee

$employee2 = new Employee("Arley", "Henao", 31, "Development");


