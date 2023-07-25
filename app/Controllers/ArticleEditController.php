<?php

// dd("Hello, world!");

if (!isset($_SESSION['nip'])) {
    header("Location: /admin/login");
    exit();
}

// dd($_SESSION['nip']);

$title = "LEXA INSTITUTE | UPDATE ARTICLES";
$style = "/resources/css/dashboard.css";
// dd($_SERVER);
$id = $_GET['id'];

$results = $database->getData("SELECT * FROM `posts` WHERE `id` = '$id'");
$article = $results[0];

require("resources/views/Admin/Article/edit.view.php");
