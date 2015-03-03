<?php

    foreach($allNews as $v){
        echo '<br>';
        foreach($v as $k=>$val)
            echo $k.' = > '.$val;
    }