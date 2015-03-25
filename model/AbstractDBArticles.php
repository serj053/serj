<?php

  //abstract
abstract  class AbstractDBArticles {

    static protected $table;

    static function getDbh(){
        $dsn = "mysql:host=localhost;dbname=dbarticles";
      return new Pdo($dsn, 'root','3141');
    }

   static function getAll(){
        $sql = "select * from :table";
        $sth = self::getDbh()->prepare($sql);
       $arr = array(':table'=>static::$table);
       $sth->execute($arr);
      return($sth->fetchAll(PDO::FETCH_ASSOC));
    }


}

 //AbstractDBArticles::getAll();array(':table'=>static::$table)
//var_dump($nn);.static::$table;
