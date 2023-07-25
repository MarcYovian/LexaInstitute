<?php

$title = "Lexa Institute | Article";
$style = "/resources/css/app.css";
$js = "/resources/js/app.js";

$results = $database->getData("SELECT * FROM `posts`");
// dd($results);

require "resources/views/All_Users/Article/article.view.php";