<?php require('resources/views/Admin/partials/header.php') ?>

<main class="container-fluid">
    <div class="row">
        <?php require('resources/views/Admin/partials/sidebar.php') ?>
        <main class="col-md-9 col-lg-10 px-md-4">
            <h3 class="mt-3">Dasboard</h3>
            <div class="row">
                <div class="col-md-7 col-lg-7">
                    <div class="p-3 rounded col-md-12">
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="/publics/user_photos/<?= $user['image_path'] ?>" class="img-thumbnail" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-8 py-3">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3">
                                        <h6 class="mb-0">NIP</h6>
                                    </div>
                                    <div class="col-md-9 col-lg-9">
                                        <h6 class="mb-0">: <?= $user['nip'] ?></h6>
                                    </div>
                                </div>

                                <hr class="my-3">

                                <div class="row">
                                    <div class="col-md-3 col-lg-3">
                                        <h6 class="mb-0">Nama Lengkap</h6>
                                    </div>
                                    <div class="col-md-9 col-lg-9">
                                        <h6 class="mb-0">: <?= $user['name'] ?></h6>
                                    </div>
                                </div>

                                <hr class="my-3">

                                <div class="row">
                                    <div class="col-md-3 col-lg-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-md-9 col-lg-9">
                                        <h6 class="mb-0">: <?= $user['email'] ?></h6>
                                    </div>
                                </div>

                                <hr class="my-3">

                                <div class="row">
                                    <div class="col-md-3 col-lg-3">
                                        <h6 class="mb-0">Alamat</h6>
                                    </div>
                                    <div class="col-md-9 col-lg-9">
                                        <h6 class="mb-0">: <?= $user['alamat'] ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 p-3">
                    <div class="col">
                        <div class="card mb-3 text-bg-primary" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-newspaper fa-4x"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Artikel</h5>
                                        <p class="card-text"><small><?= $numArticles ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="mt-3">Artikel</h3>
            <div class="row">
                <?php foreach ($articles as $article) : ?>
                    <?php
                    // Assuming $article['content'] contains the full content of the article

                    // Split the content into an array of words
                    $words = str_word_count($article['content'], 1);

                    // Get the first 10 words from the array
                    $firstTenWords = array_slice($words, 0, 10);

                    // Convert the array back to a string
                    $limitedContent = implode(' ', $firstTenWords);
                    ?>
                    <div class="col-md-4 col-lg-4">
                        <div class="card mb-3">
                            <img src="/publics/article_photos/<?= $article['image_path'] ?>" class="card-img-top" alt="Article" style="max-width: 500px; max-height: 250px;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $article['title'] ?></h5>
                                <p class="card-text"><?= $limitedContent. " ..." ?></p>
                            </div>
                            <div class="card-body">
                                <a href="/admin/article/view?id=<?= $article['id'] ?>" class="btn btn-primary">View</a>
                                <a href="/admin/article/edit?id=<?= $article['id'] ?>" class="btn btn-secondary">Update</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

        </main>
    </div>
</main>

<?php require('resources/views/Admin/partials/footer.php') ?>