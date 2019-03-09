<?php
namespace Crossover\Constructor;

require "../../vendor/autoload.php";

use Crossover\Constructor\Person;

class ExtendsClass extends Person{

    public $skills = [];

    public function __construct(array $skills, string $name = '', string $lastName = '', int $age = 0){
        $this->skills = $skills;
        parent::__construct($name, $lastName, $age);
    }

    public function getData(){
        parent::getData();
        $printSkills  = implode(", ", $this->skills);
       // echo "Skills: {$printSkills}" . PHP_EOL;
        //echo $this->getAge() . PHP_EOL;
    }
}

$extends = new \Crossover\Constructor\ExtendsClass(['PHP', 'javaScript', 'Html',  'Css'], 'Edwin', 'Rincón', 31);

//echo $extends->age . PHP_EOL;
//echo $extends->lastName . PHP_EOL;
echo $extends->getData();
