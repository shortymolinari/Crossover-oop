<?php

namespace Crossover\Destructor;


class Params{
    public $name;
    public $lastName;

    public function __destruct(String $name, string $lastName) {
        $this->name = $name;
        $this->lastName = $lastName;

        echo "Person: {$this->name} {$this->lastName}";
    }
}

$newPerson = new Params("Edwin Arley", "Rincón Henao");