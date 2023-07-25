<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'app/Controllers/HomeController.php',
    '/about' => 'app/Controllers/AboutUsController.php',
    '/blog' => 'app/Controllers/ArticleController.php',
    '/blog/show' => 'app/Controllers/ArticleShowController.php',
    '/admin' => 'app/Controllers/AdminController.php',
    '/admin/login' => 'app/Controllers/LoginController.php',
    '/admin/logout' => 'app/Controllers/LogoutController.php',
    '/admin/dashboard' => 'app/Controllers/AdminHomeController.php',
    '/admin/articles' => 'app/Controllers/AdminArticleController.php',
    '/admin/articles/create' => 'app/Controllers/ArticleCreateController.php',
    '/admin/article/view' => 'app/Controllers/ArticleViewController.php',
    '/admin/article/edit' => 'app/Controllers/ArticleEditController.php',
    '/admin/article/update' => 'app/Controllers/ArticleUpdateController.php',
    '/admin/article/delete' => 'app/Controllers/ArticleDeleteController.php',
    '/admin/register' => 'app/Controllers/RegisterController.php',
];

function routeToController($uri, $routes, $database)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);

    $title = "page not found";
    $style = '/resources/css/styleHome.css';
    $js = [];

    require "resources/views/Error/{$code}.php";

    die();
}

routeToController($uri, $routes, $database);
