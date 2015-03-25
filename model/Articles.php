<?php
    require 'AbstractDBArticles.php';
    class Articles extends AbstractDBArticles {
        static $table = 'articles';
}

 //print_r(Articles::getAll());
