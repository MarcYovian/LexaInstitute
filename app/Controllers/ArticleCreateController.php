<?php

if (!isset($_SESSION['nip'])) {
    header("Location: /admin/login");
    exit();
}

// dd($_SESSION['nip']);

$title = "LEXA INSTITUTE | CREATE ARTICLES";
$style = "/resources/css/dashboard.css";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // dd($_POST);
    $errors = [];
    // dd($_POST);
    $articleTitle = htmlentities(strip_tags(trim($_POST["article_title"])));
    $tagline = htmlentities(strip_tags(trim($_POST["tagline"])));
    $content = htmlentities(strip_tags(trim($_POST["article_content"])));

    // Check if a file was uploaded successfully
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // The temporary location of the uploaded file
        $tmpFilePath = $_FILES['image']['tmp_name'];

        // Generate a unique name for the file to avoid overwriting
        $imageFileName = uniqid() . '_' . $_FILES['image']['name'];

        // The destination path to move the uploaded file to the 'article_photos' directory
        $destinationFilePath = $_SERVER['DOCUMENT_ROOT'] . '/publics/article_photos/' . $imageFileName;
        // dd($destinationFilePath);

        // Move the uploaded file to the new location
        if (move_uploaded_file($tmpFilePath, $destinationFilePath)) {
            // File was successfully moved, save the image path in the database
            $image = $imageFileName;
        } else {
            // There was an error moving the file, handle the error accordingly
            $errors['image'] = "Failed to upload the image. Please try again.";
        }
    } else {
        // No file was uploaded or an error occurred during upload
        $errors['image'] = "Please select an image to upload.";
    }

    if (empty($articleTitle)) {
        $errors['article_title'] = "Please enter a title of Article";
    }
    if (empty($tagline)) {
        $errors['tagline'] = "Please enter a tagline of Article";
    }
    if (empty($content)) {
        $errors['article_content'] = "Please enter a content of Article";
    }

    if (empty($errors)) {
        // If there are no errors, insert data into the database, including the image path
        $database->query(
            "INSERT INTO `posts`(`nip`, `title`, `tagline`, `content`, `image_path`) 
            VALUES (?, ?, ?, ?, ?)",
            [$_SESSION['nip'], $articleTitle, $tagline, $content, $image]
        );

        header("Location: /admin/articles");
    }
}


require("resources/views/Admin/Article/create.view.php");
