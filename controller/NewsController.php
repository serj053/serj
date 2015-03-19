<?php
date_default_timezone_set('Europe/Moscow');
    function __autoload($class){
        require'../model/'.$class.'.php';
    }

require'AbstractController.php';
require'classes/View.php';
class NewsController extends AbstractController{

    function __construct(){
       // echo'NewsController created !';
    }


    function getAllAction(){
      $allNews =  NewsModel::getAllArticles();
        $view = new View;
        $view->item = $allNews;
        $view->display('view/view_all_art.php');
    }

    protected function addArticleAction(){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $id_art = NewsModel::addArticle($title, $content);
        $allNews =  NewsModel::getAllArticles();
        $view = new View;
        $view->item = $allNews;
        $view->display('view/view_all_art.php');
    }

    protected function getArticleAction(){
        $id = $_GET['id_art'];
        $news = NewsModel::getArticle($id);
        $view = new View;
        $view->news = $news;
        $view->display('view/view_art.php');
    }

    protected function deleteArticleAction(){
        $id = $_GET['id_art'];
        $allNews = NewsModel::deleteArticle($id);
        $allNews =  NewsModel::getAllArticles();
        $view = new View;
        $view->item = $allNews;
        $view->display('view/view_all_art.php');
    }


    protected function updateArticleAction($id, $title, $content){
        $allNews = NewsModel::updateArticle($id, $title, $content);
        include'../view/all.php';
    }
}

//$n = new NewsController();
//$n->getAllAction();
//$n =  new NewsController();
//var_dump($n->getAllAction());
//$n->getAllAction();