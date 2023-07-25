<?php

$title = "Lexa Institute | Login";

// dd($database);

if (isset($_POST['submit'])) {
    $nip = htmlentities(strip_tags(trim($_POST["nip"])));
    $password = htmlentities(strip_tags(trim($_POST["password"])));

    $error_message = "";
    if (empty($nip) || empty($password)) {
        $error_message .= "NIP or Password is required";
    }

    // $nip = mysqli_real_escape_string($connection, $nip);
    // $password = mysqli_real_escape_string($connection, $password);

    $password_sha1 = sha1($password);

    $user = $database->query("select * from users where nip = ? and password = ?", [$nip, $password_sha1])->fetch();

    if ($user) {
        $_SESSION['nip'] = $nip;
        header("Location: /admin/dashboard");
        exit();
    } else {
        $error_message = "NIP or Password is incorrect";
    }
} else {
    $email = "";
    $password = "";
    $error_message = "";
}

// $error_message = [];

require "resources/views/Admin/Auth/Login.view.php";
