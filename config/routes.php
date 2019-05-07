<?php

return array(
//Новости    
'news/page-([0-9]+)' => 'news/index/$1',//Постраничная навигация Новости
'news/([0-9]+)' => 'news/view/$1',
'news' => 'news/index', // actionIndex в NewsController
//Блог     
'blog/page-([0-9]+)' => 'blog/post/$1',//Постраничная навигация Блог
'blog/([0-9]+)' => 'blog/view/$1', 
'blog' => 'blog/post', // actionIndex в BlogController 
// Пользователь:
'user/register' => 'user/register',
'user/login' => 'user/login',
'user/logout' => 'user/logout',
'user' => 'user/login',
'cabinet/edit' => 'cabinet/edit',
'cabinet' => 'cabinet/index',

'contacts' => 'site/contact',
// Главная страница
'index.php' => 'site/index', // actionIndex в SiteController   
'' => 'site/index', // actionIndex в SiteController
    
);