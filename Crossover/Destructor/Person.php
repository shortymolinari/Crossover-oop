<?php

namespace Crossover\Destructor;

require "../../vendor/autoload.php";

use Crossover\Destructor\OverwriteDestructor;

class Person
{
    protected $name;
    protected $lastName;
    protected $age;

    public function __construct(string $name, string $lastName, int $age) {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->getData();
       // sleep(10);
    }

    public function getData() {
        if ($this->name != '') {
            echo "Persona: {$this->name} {$this->lastName}, edad: {$this->age}" . PHP_EOL;
        }
    }

    public function getAge() {
        return $this->age;
    }

    /*private function __destruct() {
        echo "Ejecutando el destructor";
    }*/

    /*protected function __destruct() {
        echo "Ejecutando el destructor";
    }*/

    public function __destruct() {
        echo "Soy el destructor " , get_class($this) , "\n";
    }

   /* final function __destruct() {
        echo "Soy el destructor " , get_class($this) , "\n";
    }*/

}

class Department extends Person{

    use OverwriteDestructor;

    public $department;

    public function setDepartment(string $department) {
        $this->department = $department;
    }

    public function getDepartment() {
        echo $this->department;
    }

    /*protected function __destruct() {
        parent::__destruct();
        //echo "Soy el destructor " , get_class($this) , " despúes de 10 segundos\n";
    }

    private function __destruct() {
        parent::__destruct();
        //echo "Soy el destructor " , get_class($this) , " despúes de 10 segundos\n";
    }*/

   /* public function __destruct() {
        parent::__destruct();
        //echo "Soy el destructor " , get_class($this) , " despúes de 10 segundos\n";
    }*/

}

$person = new Department("Edwin", "Rincón", 31);
