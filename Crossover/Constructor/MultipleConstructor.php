<?php


namespace Crossover\Constructor;

require "../../vendor/autoload.php";

class MultipleCosntructor{

    public $method;

    function __construct(){ 
        
        $params = func_get_args(); 
        $i = func_num_args();
        $this->method = '__construct' . $i;

        if (method_exists($this, $this->method)) { 
            call_user_func_array(array($this, $this->method), $params);
        } 
    } 
    
    function __construct1($param_1){ 
        echo('__construct with 1 param called: ' . $param_1 . PHP_EOL); 
    } 
    
    function __construct2($param_1, $param_2){ 
        echo('__construct with 2 params called: ' . $param_1 . ', ' . $param_2 . PHP_EOL); 
    } 
    
    function __construct3($param_1, $param_2, $param_3){ 
        echo('__construct with 3 params called: ' . $param_1 . ', ' . $param_2 . ', ' . $param_3 . PHP_EOL); 
    } 
} 

$object = new MultipleCosntructor('sheep'); 
$object = new MultipleCosntructor('sheep', 'cat'); 
$object = new MultipleCosntructor('sheep', 'cat', 'dog'); 

// results: 
// __construct with 1 param called: sheep 
// __construct with 2 params called: sheep,cat 
// __construct with 3 params called: sheep,cat,dog 