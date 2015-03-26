<?php
require 'Articles.php';
class NewsModel extends Articles{
    public function getAllArticles(){
        return Articles::getAll();
    }

    public function getArticle($id){
        return DBService::getById($id);
    }

    public function addArticle($title, $content){
        return DBService::insert($title, $content);
    }

    public function updateArticle($id, $title, $content){
        return DBService::update($id, $title, $content);
    }

    public function deleteArticle($id){
    return DBService::delete($id);
    }
}

$n = new NewsModel();
var_dump($n->getAllArticles());
