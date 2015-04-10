<?php

   // require '../classes/View.php';
    require 'AbstractDBArticles.php';
    class Articles extends AbstractDBArticles {
        static $table = 'articles';

        public function getAllArticles(){
            $news = self::getAll();
            $view = new View;
            $view->news = $news;
            $view->display('../view/view_all_art.php');
        }

        public function getOneArticle($id){
            $new = self::getOne($id);
            $view = new View;
            $view->new = $new;
            $view->display('../view/view_art.php');
        }
}

    $ob = new Articles();
    $ob->getOneArticle(14);
