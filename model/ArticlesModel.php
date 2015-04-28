<?php

    require 'AbstractDBArticles.php';
    class ArticlesModel extends AbstractDBArticles {
        static $table = 'articles';
        static $columns = array('id_user','title','content');

}

