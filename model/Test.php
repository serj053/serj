<?php
/**/
    function __autoload($class){
        require'../classes/'.$class.'.php';
    }

//require'../classes/New_1.php';

new New_1();
//new Test();
echo'<br>';


new Test_1();


