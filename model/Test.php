<?php
try {
    $sql = 'mysql:dbname=dbarticles;host=localhost';
    $pd = new Pdo($sql, 'root', '3141');
}catch(PDOException $e){
    die('Error -'.$e->getMessage());
}
    $str = 'articles';
    $sq = 'select * from articles ';
    //$sth = $pd->prepare($q);
    //$arr = array(':id'=>'articles');
   // $sth->bindParam(':art',$str);
    //$str = 'articles';
    $sth = $pd->query($sq);
   // $sth = $sth->fetchAll();
   print_r($sth->fetchAll());
    
/*
$n=0;
    foreach($sth as $k=>$v){
        $n++;
        echo'<hr>';
        foreach($v as $kk=>$vv)
        echo $n.' - '.$kk.' = > '.$vv.'<br>';
    }

Альберт на одном из уроков где изучалась PDO рассматривался такой пример
$sql = "SELECT * FROM :table" ну и так далее, но пример не пошел (возвратился пустой массив) и Вы заменили
этот запрос на $sql = "SELECT * FROM ".ststic::$table; и этот пример успешно отработал,
и больше к этому не успешному варианту не возвращались, я решил при повторе попробовать
это вариант , но как ни бился что то не клеиться, варианты типа
"SELECT * FROM articles WHERE id = :id" - работают а вот это "SELECT * FROM :table" не
 работает , в чем же там секрет то..
 static function getAll(){
        $qu = 'select * from :table';//.static::$table;
        $dbh = self::getDbh();
       $arr = array(':table'=>static::$table);
       $sth = $dbh->prepare($qu);
       $sth->execute($arr);
      return($sth->fetchAll(PDO::FETCH_ASSOC));
    } - возвращает пустой массив

*/
