<?php


namespace Crossover\Constructor;

require "../../vendor/autoload.php";

class MultipleCosntruct{

    public $method;

    function __construct(){ 
        
        $params = func_get_args(); 
        $number = func_num_args();
        $this->method = "__construct{$number}";

        if (method_exists($this, $this->method)) { 
            call_user_func_array([$this, $this->method], $params);
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

$object = new MultipleCosntruct('Edwin'); 
$object = new MultipleCosntruct('Edwin', 'Jorge'); 
$object = new MultipleCosntruct('Edwin', 'Jorge', 'Flavio'); 


// __construct with 1 param called: Edwin
// __construct with 2 params called: Edwin, Jorge
// __construct with 3 params called: Edwin, Jorge, Flavio