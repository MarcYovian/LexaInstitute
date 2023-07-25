<?php

$style = "/resources/css/article.css";
$id = $_GET['id'];

$results = $database->getData("SELECT * FROM `posts` WHERE `id` = '$id'");
$post = $results[0];
$postTitle = $post['title'];
$title = "LEXA INSTITUTE | $postTitle";
// dd($title);

require("resources/views/All_Users/Article/show.view.php");
