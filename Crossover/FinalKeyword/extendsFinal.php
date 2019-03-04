<?php

namespace Crossover\FinalKeyword;

require "../../vendor/autoload.php";

use Crossover\FinalKeyword\FinalKeyword;

class extendsFinal extends FinalKeyword {

    public function moreTesting(){
        echo 'Sobreescribiendo método final';
    }

}

$extendsFinal = new extendsFinal();
$extendsFinal->moreTesting();