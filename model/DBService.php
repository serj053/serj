<?php

class DBService {

  public $db = null;

     function connect_DB(){
         $this->db = mysql_connect('localhost', 'root', '3141');
         mysql_select_db('dbarticles');

        }

    public  function  getAll(){

        $query = 'select * from articles';
        $res = mysql_query($query);
        $arr = Array();
        while ($row = mysql_fetch_assoc($res)) {
            $arr[] = $row;
        }
        return $arr;

    }

    public function getById($id){
       $query = 'select * from `articles` where id_art = '.$id;
        $res = mysql_query($query);
        return mysql_fetch_assoc($res);
    }

    public function insert($title,$content){
        $id_user = 234;
        $query = 'insert into articles(id_user,title,content)
                    values("'.$id_user.'","'.$title.'","'.$content.'")';
        $res = mysql_query($query);
        var_dump($query);
        return mysql_insert_id();
    }

    public function update($id_art,$title, $content){
        $id_user = 565;
        $query = 'update articles
                    set id_user = '.$id_user.',
					title = "'.$title.'",
					content = "'.$content.'"
                    where id_art = '.$id_art;
    //var_dump($query);
        $res = mysql_query($query);
        if(false != $res)
            return $id_art;
        else
            return false;
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






