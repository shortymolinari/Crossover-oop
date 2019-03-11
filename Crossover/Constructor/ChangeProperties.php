<?php
namespace Crossover\Constructor;

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

class Skills extends Person{

    public $skills = [];

    public function __construct(array $skills, string $name = '', string $lastName = '', int $age = 0){
        $this->skills = $skills;
        parent::__construct($name, $lastName, $age);
    }

    public function getData(){

        $this->lastName = "Perez";
        parent::getData();

        $printSkills  = implode(", ", $this->skills);
        echo "Skills: {$printSkills}" . PHP_EOL;
    }
}

$person = new \Crossover\Constructor\Person('Raul', 'Gazca', 31);

$skillsCollection = ['PHP', 'javaScript', 'Html',  'Css'];
$skills = new \Crossover\Constructor\Skills($skillsCollection, 'Edwin', 'Rincón', 31);

$person->getData();
