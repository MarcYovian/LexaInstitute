<?php

if(!isset($_SESSION['nip'])){
    header("Location: /admin/login");
    exit();
}

header("Location: /admin/dashboard");
exit();