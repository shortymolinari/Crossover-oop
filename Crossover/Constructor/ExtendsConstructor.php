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

        echo "Persona: {$this->name} {$this->lastName} {$this->age}" . PHP_EOL;

    }

    public function getAge(){
        return $this->age;
    }
}

class Skills extends Person{

    public $skills = [];

    public function __construct(array $skills, string $name = '', string $lastName = '', int $age = null){
        $age = $this->getAge();
        parent::__construct($name, $lastName, $age);
        $this->skills = $skills;
    }

    public function getPerson(){
        $this->person->getPerson();
        $printSkills  = implode(", ", $this->skills);
        echo "Skills: {$printSkills} {$this->person->name}" . PHP_EOL;
    }
}

$person = new \Crossover\Constructor\Person('Edwin', 'Rincón', 31);
$skills = new \Crossover\Constructor\Skills(['Playing guitar', 'sing in the shower', 'Cook',  'sleep at work']);
$skills->getPerson();

