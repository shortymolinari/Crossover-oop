<?php
namespace Crossover\Destructor;

class Destructor{

    public function __destruct(){
        echo "Destruyendo la clase " , get_class($this) , "\n";
    }
    
}

class voidClass extends Destructor{

}

class oneMethodClass extends Destructor{

    public function __destruct(){}

    Public function getTheParentDestructor(){
        parent::__destruct();
    }
}

$destructor = new Destructor;
$voidClass = new voidClass;
// si no se sobre escribe el construtor el mensaje se imprime por defecto
$oneMethodClass = new oneMethodClass; 
$oneMethodClass->getTheParentDestructor();
unset($destructor);

