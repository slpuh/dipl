<?php

class BlogController
{
    public function actionPost($page=1)
    {
        $blogList = array();
	$blogList = Blog::getBlogList($page);
        $total=10;
        // Создаем объект Pagination - постраничная навигация 
        $pagination = new Pagination(($total+1), $page, Blog::SHOW_BY_DEFAULT, 'page-'); 
        require_once(ROOT . '/views/blog/post.php');
        return true;
    }
    public function actionView($id)
    {
        if ($id) {
       $blogItem = Blog::getBlogItemByID($id);
       }
       require_once(ROOT . '/views/blog/view.php');
        return true;
    }
}
