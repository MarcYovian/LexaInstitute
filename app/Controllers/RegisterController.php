<?php

if (!isset($_SESSION['nip'])) {
    header("Location: /admin/login");
    exit();
}

// dd($_SESSION['nip']);

$title = "LEXA INSTITUTE | REGISTER";
$style = "/resources/css/dashboard.css";


$nip = $_SESSION['nip'];

$users = $database->getData("SELECT * FROM `users` WHERE `nip` = $nip ;");
$user = $users[0];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    $nip = htmlentities(strip_tags(trim($_POST['nip'])));
    $name = htmlentities(strip_tags(trim($_POST['name'])));
    $mail = htmlentities(strip_tags(trim($_POST['mail'])));
    $password = htmlentities(strip_tags(trim($_POST['password'])));
    $alamat = htmlentities(strip_tags(trim($_POST['alamat'])));

    // Check if a file was uploaded successfully
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // The temporary location of the uploaded file
        $tmpFilePath = $_FILES['image']['tmp_name'];

        // Generate a unique name for the file to avoid overwriting
        $imageFileName = uniqid() . '_' . $_FILES['image']['name'];

        // The destination path to move the uploaded file to the 'article_photos' directory
        $destinationFilePath = $_SERVER['DOCUMENT_ROOT'] . '/publics/user_photos/' . $imageFileName;
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

    if (empty($nip)) {
        $errors['nip'] = "NIP is required";
    }
    if (empty($name)) {
        $errors['name'] = "Name is required";
    }
    if (empty($mail)) {
        $errors['mail'] = "Email is required";
    }
    if (empty($password)) {
        $errors['password'] = "Password is required";
    }
    if (empty($alamat)) {
        $errors['alamat'] = "Alamat is required";
    }

    if (empty($errors)) {
        $database->query("INSERT INTO users(`nip`, `name`, `email`, `password`, `alamat`, `image_path`, `isAdmin`) 
        VALUES (?,?,?,?,?,?,?)", [$nip, $name, $mail, sha1($password), $alamat, $image, 1]);

        header("Location: /admin/dashboard");
    }
}

require("resources/views/Admin/Auth/register.view.php");
