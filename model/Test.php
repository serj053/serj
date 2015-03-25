<?php
    $sql = 'mysql:dbname=dbarticles;host=localhost';
    $pd = new Pdo($sql, 'root','3141');
    $q = 'select * from articles';
    $dbh = $pd->query($q);
    $sth = $dbh->fetchAll();
   // print_r($sth);
$n=0;
    foreach($sth as $k=>$v){
        $n++;
        echo'<hr>';
        foreach($v as $kk=>$vv)
        echo $n.' - '.$kk.' = > '.$vv.'<br>';
    }
