<?php
    function __autoload($class){
        require'../model/'.$class.'.php';
    }

class NewsController extends AbstractController{
    function AllAction(){
       return  NewsModel::findAll();
        //include'../view/all.php';
    }

    protected function findByIdAction(){
        $allNews = NewsModel::findById();
        include'../view/all.php';
    }

    protected function DeleteAction(){
        $allNews = NewsModel::Delete();
        include'../view/all.php';
    }

    protected function AddAction(){
        $allNews = NewsModel::add();
        include'../view/all.php';
    }
}

$cl = new NewsController();
var_dump($cl->AllAction());
