<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <style>
        .bg-color {
            background-color: #028EF3;
        }

        .position-login {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card-login {
            margin: auto;
            width: 19rem;
            height: auto;
            background: linear-gradient(147deg, #290164 0%, #16062A 100%);
            border: none;
        }

        .title {
            color: #FFF;
            font-size: 23px;
            font-style: normal;
            font-weight: 380;
            line-height: normal;
        }
    </style>
</head>

<body class="bg-color">
    <div class="position-login">
        <div class="container">
            <div class="card text-center card-login">
                <div class="card-body">

                    <img src="/publics/img/LOGO 1.png" alt="Logo 1" width="65" height="65" class="d-inline-block align-text-top">

                    <h3 class="title">
                        LOGIN TO LEXA INSTITUTE
                    </h3>

                    <br>

                    <?php
                        if($error_message !== ""){
                            echo '<div class="alert alert-danger" role="alert">';
                            echo "$error_message";
                            echo '</div>';
                        }
                    ?>

                    <form action="/admin/login" method="POST">

                        <div class="mb-3">
                            <label for="nip" class="form-label text-white">NIP</label>
                            <input type="nip" class="form-control" id="nip" name="nip">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-white">Password</label>
                            <input type="password" class="form-control " id="password" name="password">
                        </div>
                        <div class="mb-3 mt-4">
                            <button type="submit" class="btn btn-warning" name="submit">Submit</button>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>