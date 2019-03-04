<?php

namespace Crossover\FinalKeyword;

final class FinalKeyword
{
   // final public $property = "can call an final public property";
    //final const FINAL_CONST = "Can declare an final conts";

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