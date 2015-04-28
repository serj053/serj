<?php


class Test_1 {
    function __construct(){
            echo'Test_1 created !<br>';
        
    }

    static function conn(){
        echo'Static function';
    }
}

//new Test_1;
//Test_1::conn();

    $a = array(1,3,5,7,9);

    reset($a);
    while($c = current($a)){
        echo $c.'<br>';
        next($a);
    }

  // function __autoload($class){
   //     require'../controller/'.$class.'.php';
   //    require $class.'.php';
   //}

function autoload_New_1($class){
    include $class.'.php';
}

function autoload_test1($class){
    @include '../controller/'.$class.'.php';
}

spl_autoload_register('autoload_New_1');
spl_autoload_register('autoload_test1');
    //new New_1;
    new test1;




















