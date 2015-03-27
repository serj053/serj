<?php
/*
function __autoload($class){
    if($class == 'New_1')
        require 'classes/'.$class.'.php';
    if($class == 'test1')
        require 'controller/'.$class.'.php';

}
*/
  //  require 'classes/New_1.php';
   // require 'controller/test1.php';

function autoload_classes($class){
    $file = 'classes/'.$class.'.php';
    if(is_readable($file))
         require $file;
}

function autoload_controller($class){
    $file = 'controller/'.$class.'.php';
    if(is_readable($file))
        require $file;
}

spl_autoload_register('autoload_classes');
spl_autoload_register('autoload_controller');

    new New_1;
echo'<br>';
    new test1;