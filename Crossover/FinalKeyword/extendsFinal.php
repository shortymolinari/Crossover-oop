<?php

namespace Crossover\FinalKeyword;

require "../../vendor/autoload.php";

use Crossover\FinalKeyword\FinalKeyword;
use Crossover\FinalKeyword\FinalTrait;

class extendsFinal extends FinalKeyword {

    //use FinalTrait;

    public function moreTesting(){
        parent::moreTesting();
        echo 'Sobreescribiendo método final';
    }

}

$extendsFinal = new extendsFinal();
$extendsFinal->moreTesting();