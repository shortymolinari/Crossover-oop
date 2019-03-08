<?php


namespace Crossover\Constructor;

require "../../vendor/autoload.php";

class Person{

    public $name;
    protected $lastName;
    private $age;
    
    public function __construct(string $name, string $lastName, int $age){

        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;

    }

    public function getPerson(){
        if ($this->name != '') {
            echo "Persona: {$this->name} {$this->lastName} {$this->age}" . PHP_EOL;
        }
    }

    public function getAge(){
        return $this->age;
    }
}

class Skills extends Person{

    public $skills = [];

    public function __construct(array $skills, string $name = '', string $lastName = '', int $age = 0){
        $age = $this->getAge();
        parent::__construct($name, $lastName, $age = 0);
        $this->skills = $skills;
    }

    public function getPerson(){
        parent::getPerson();
        $printSkills  = implode(", ", $this->skills);
        echo "Skills: {$printSkills}" . PHP_EOL;
    }
}

$person = new \Crossover\Constructor\Person('Raul', 'Gazca', 31);

$skills = new \Crossover\Constructor\Skills(['Playing guitar', 'sing in the shower', 'Cook',  'sleep at work']);

$skills->getPerson();

