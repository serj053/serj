<?php
try {
    $sql = 'mysql:dbname=dbarticles;host=localhost';
    $pd = new Pdo($sql, 'root', '3141');
}catch(PDOException $e){
    die('Error -'.$e->getMessage());
}
    $str = 'articles';
    $q = 'select * from '.$str;
    $sth = $pd->prepare($q);
    //$arr = array(':id'=>'articles');
   // $sth->bindParam(':art',$str);
    //$str = 'articles';
    $sth->execute();
    $sth = $sth->fetchAll();
   print_r($sth);
   echo'Control!';
/*
$n=0;
    foreach($sth as $k=>$v){
        $n++;
        echo'<hr>';
        foreach($v as $kk=>$vv)
        echo $n.' - '.$kk.' = > '.$vv.'<br>';
    }


*/
