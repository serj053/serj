<?php

    $ctrl = $_GET['ctrl'];
    $action = $_GET['action'];

    $ctrlClass = $ctrl.'Controller';
    $action_method = $action;
/*
   if(!class_exists('New_1',false)){
        die('No class ');
    }
*/

    function __autoload($class) {
        require_once 'controller/'.$class.'.php';
    }

    $ctrl = new $ctrlClass;
    $ctrl->action($action);
