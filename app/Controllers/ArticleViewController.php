<?php

if (!isset($_SESSION['nip'])) {
    header("Location: /admin/login");
    exit();
}

$title = "LEXA INSTITUTE | VIEW ARTICLES ";
$style = "/resources/css/dashboard.css";
$id = $_GET['id'];

$results = $database->getData("SELECT * FROM `posts` WHERE `id` = '$id'");
$post = $results[0];
// dd($post);

require("resources/views/Admin/Article/show.view.php");
