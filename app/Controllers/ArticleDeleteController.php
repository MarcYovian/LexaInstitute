<?php

// dd("Hello, world!");

if (!isset($_SESSION['nip'])) {
    header("Location: /admin/login");
    exit();
}

// dd($_SESSION['nip']);

$id = $_GET['id'];
// dd($id);

$database->query("DELETE FROM `posts` WHERE `id` = ?", [$id]);

header("Location: /admin/articles");