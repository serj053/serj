<?php
//date_default_timezone_set('Europe/Moscow');
/**/
    function autoloadNewsModel($class){
        $file = 'model/'.$class.'.php';
        if(is_readable($file)){
            require 'model/'.$class.'.php';
        }
    }
    function autoloadNewsController($class){
        $file= 'controller/'.$class.'.php';
        if(is_readable($file)){
            require'controller/'.$class.'.php';
        }
    }
    spl_autoload_register('autoloadNewsModel');
    spl_autoload_register('autoloadNewsController');

    if(isset($_GET['ctrl'])){
        $str = $_GET['ctrl'];
        $arr = explode('/',$str);
        $ctrlClass = $arr[0].'Controller';
        $action = $arr[1];
        $ctrl = new $ctrlClass;
//echo $action ;die;
        $ctrl->action($action);
    }else{
        require'view/main.php';
    }