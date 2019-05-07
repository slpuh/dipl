<?php

class NewsController
{
        public function actionIndex($page=1)
    {   
        $newsList = array();
	$newsList = News::getNewsList($page);
        //$total = News::getNewsCount($type); 
        //var_dump($total);
        //die();
        $total=10;
        // Создаем объект Pagination - постраничная навигация 
        $pagination = new Pagination(($total+1), $page, News::SHOW_BY_DEFAULT, 'page-'); 
        // Подключаем вид
        require_once(ROOT . '/views/news/index.php');
        return true;
    }
    public function actionView($id)
    {
       if ($id) {
       $newsItem = News::getNewsItemByID($id);
       }
        require_once(ROOT . '/views/news/view.php');
	return true;
}
}


