<?php

namespace Crossover\FinalKeyword;

require "../../vendor/autoload.php";

class FinalKeyword
{
    //final public $property = "can call an final public property";
    //final const FINAL_CONST = "Can declare an final conts";
    public static $staticProperty = 'propiedad estática';
    public $property = 'property of final class';
    const FINAL_CONST = 'const of final class';

    public function test()
    {
        echo "BaseClass::test() called\n";
    }

    // Here it doesn't matter if you specify the function as final or not
    final public function moreTesting()
    {
        echo "BaseClass::moreTesting() called\n";
    }

    final static function callingFinalStaticMethod(){
        echo "Can call an Final Static Method";
    }
}


//$finalClass = new FinalKeyword();
//$finalClass->moreTesting();
//$finalClass->callingFinalStaticMethod();
//FinalKeyword::callingFinalStaticMethod();
//$finalKeyword = 'Crossover\FinalKeyword\FinalKeyword';
//$finalKeyword::callingFinalStaticMethod();
//echo $finalKeyword::FINAL_CONST;
//echo $finalKeyword::$staticProperty;