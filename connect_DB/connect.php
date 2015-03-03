<?php

    $db = mysql_connect('localhost','root','pi3141');
    $conn = mysql_select_db('dbarticles',$db);
   // $query = 'insert into articles(id_user, title, content) values("12","titl","control")';
   // $query = mysql_query($query,$db);

    $query = mysql_query('select * from articles');

    $res = mysql_fetch_assoc($query);
var_dump($res);
