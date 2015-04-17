<?php

 class AbstractDBArticles {

    static private $dbh = null;
    protected $isNew = false;
    static protected $table;
    static $column ;

    static function getDbh(){
        if(self::$dbh == null) {
            $dbh = "mysql:host=localhost;dbname=dbarticles";
            return new Pdo($dbh, 'root', '3141');
        }else{
            return self::$dbh;
        }
    }

   static function getAll(){
        $sq = 'select * from '.static::$table;
        $dbh = self::getDbh();
       $sth = $dbh->prepare($sq);
       $sth->execute();
      return($sth->fetchAll(PDO::FETCH_ASSOC));
    }

    static function getOne($id){
        $sq = 'select * from '.static::$table.' where id_art = :id';
        $arr = array(':id' => $id);
        $dbh = self::getDbh();
        $sth = $dbh->prepare($sq);
        $sth->execute($arr);
        return $sth->fetch();
    }
    
    function save(){
        if($this->id){
            $tokens = [];
            $values =[];
            foreach(static::$column as $column){
                $tokens[] = ':'.$column;
                $values[':'.$column] = $this->$column;
         }
         $sql = 'insert into '.static::$table.
         '('.implode(',', static::$columns).')'
          . ' values('.implode(',',$tokens).')';
         $dbh = self::getDbh();
         $sth = $dbh->prepare($sql);
         $sth->execute($values);
         return $this->id = $dbh->lastInsertId();        
        }
    }
/*
    static function delete($id){
        $sq = 'delete from '.static::$table.' where id_art = :id';
        $arr = array(':id'=>$id);
        $dbh = self::getDbh();
        $sth = $dbh->prepare($sq);
        return $sth->execute($arr);
    }
    
    static function update($id,$title,$content ){    
   
        $sq = 'update articles set  title = "'.$title.
                 '", content = "'.$content.'" where id_art ='.$id;
        $dbh = self::getDbh();
        $dbh->query($sq);        
    }
    
    static function addArticle($title, $content){
        $sq = 'insert into '.static::$table.
        '(id_user, title, content) values( 333,"'.$title.
        '","'.$content.'")';
        $dbh = self::getDbh();
        $sth = $dbh->query($sq);
    }
 * 
 */
}




