<?php
namespace Crossover\Constructor;

require "../../vendor/autoload.php";

use Crossover\Constructor\Person;

class Skills extends Person{

    public $skills = [];

    public function __construct(array $skills, string $name = '', string $lastName = '', int $age = 0){
        $this->skills = $skills;
        parent::__construct($name, $lastName, $age);
    }

    public function getData(){
        parent::getData();
        $printSkills  = implode(", ", $this->skills);
        echo "Skills: {$printSkills}" . PHP_EOL;
    }
}

$person = new \Crossover\Constructor\Person('Raul', 'Gazca', 31);
$skills = new \Crossover\Constructor\Skills(
    ['PHP', 'javaScript', 'Html',  'Css'],
    'Edwin', 
    'Rincón',
    31
    // 'Un parámtro mas',
    // 55// 
);

// $skills->getData();