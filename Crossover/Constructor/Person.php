<?php

namespace Crossover\Constructor;

require "../../vendor/autoload.php";

class Person{

    public $name;
    protected $lastName;
    private $age;

    public function Person() {
        $this->getData();
    }
    
    public function __construct(string $name, string $lastName, int $age) {

        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->getData();
    }

    public function getData() {
        if ($this->name != '') {
            echo "Persona: {$this->name} {$this->lastName} {$this->age}" . PHP_EOL;
        }
    }

    public function getAge() {
        return $this->age;
    }
}

// $person = new \Crossover\Constructor\Person;
// $person = new \Crossover\Constructor\Person('Edwin', 'Rincón');
//$person = new \Crossover\Constructor\Person('Edwin', 'Rincón', 31);
//echo $person->getData();

