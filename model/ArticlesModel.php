<?php

    require 'AbstractDBArticles.php';
    class ArticlesModel extends AbstractDBArticles {
        static $table = 'articles';
        static $column = array('title','content');

}

