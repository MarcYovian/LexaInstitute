<?php

if (!isset($_SESSION['nip'])) {
    header("Location: /admin/login");
    exit();
}

// dd($_SESSION['nip']);

$title = "LEXA INSTITUTE | ARTICLES";
$style = "/resources/css/dashboard.css";

$nip = $_SESSION['nip'];
$users = $database->getData("SELECT * FROM `users` WHERE `nip` = $nip ;");
$user = $users[0];


$articles = $database->getData("SELECT * FROM `posts` WHERE `nip` = $nip ;");

// dd($result);

require("resources/views/Admin/Article/index.view.php");
