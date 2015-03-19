<?php

class DBService {

  public static $db = null;

    static function connect_DB(){
        if(self::$db == null) {
            self::$db = mysql_connect('localhost', 'root', '3141');
            mysql_select_db('dbarticles');
        }else{
            return self::$db;
        }
      }

    public static function  getAll(){
         self::connect_DB();
        $query = 'select * from articles';
        $res = mysql_query($query);
        $arr = Array();
        while ($row = mysql_fetch_assoc($res)) {
            $arr[] = $row;
        }
        return $arr;

    }

    public static function getById($id){
        self::connect_DB();
       $query = 'select * from `articles` where id_art = '.$id;
        $res = mysql_query($query);
        return mysql_fetch_assoc($res);
    }

    public function insert($title,$content){
        self::connect_DB();
        $id_user = 234;
        $query = 'insert into articles(id_user,title,content)
                    values("'.$id_user.'","'.$title.'","'.$content.'")';
        $res = mysql_query($query);
        return mysql_insert_id();
    }

    public function update($id_art,$title, $content){
        self::connect_DB();
        $id_user = 565;
        $query = 'update articles
                    set id_user = '.$id_user.',
					title = "'.$title.'",
					content = "'.$content.'"
                    where id_art = '.$id_art;
        $res = mysql_query($query);
        if(false != $res)
            return $id_art;
        else
            return false;
    }

    public static function delete($id){
        self::connect_DB();
        $query='delete from articles where $id_art ='.$id;
        $res = mysql_query($query);
        if($res) {
            return true;
        } else{
            return false;
        }
    }

}

/*
$n = new DBService;
$n->connect_DB();
$all = $n->getAll();
var_dump($all);

/*
   mysql_connect('localhost', 'root', '3141');
   mysql_select_db('dbarticles');

    $query = 'select * from articles';
    $res = mysql_query($query);
    $arr = Array();
    while ($row = mysql_fetch_assoc($res)) {
        $arr[] = $row;
    }
    foreach ($arr as $k => $v) {
        echo $k . '<br>';
        foreach ($v as $j => $val)
            echo $j . ' = > ' . $val . ' - ';
    }

echo mysql_error();
qu();
*/






