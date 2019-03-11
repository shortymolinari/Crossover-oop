<?php
namespace Crossover\Constructor;

class Constructor{

    public function __construct(){
        echo "Mi nombre es " , get_class($this) , "\n";
    }
    
}

class voidClass extends Constructor{

}

class oneMethodClass extends Constructor{

    public function __construct(){}

    Public function getTheParentConstructor(){
        parent::__construct();
    }
}

$constructor = new Constructor;
$voidClass = new voidClass;
// si no se sobre escribe el construtor el mensaje se imprime por defecto
$oneMethodClass = new oneMethodClass; 
$oneMethodClass->getTheParentConstructor();
