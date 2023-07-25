<?php require('resources/views/partials/header.php') ?>

<?php require('resources/views/partials/nav.php') ?>
<main>
    <?php
    $date = date("d F Y", strtotime($post['updated_at']));
    ?>
    <div class="bg-root">
        <div class="text-center">
            <h1 class="text-light pt-5 pb-2">
                <?= $post['title'] ?>
            </h1>
            <p class="text-light pb-5">
                <?= $date ?> / <?= $post['tagline'] ?>
            </p>
        </div>
    </div>
    <div class="container px-7 py-3 text-center">
        <div class="mb-2">
            <img src="/publics/article_photos/<?= $post['image_path'] ?>" alt="<?= $post['title'] ?>" class="rounded" style="max-width: 400px;">
        </div>
        <div class="mb-2">
            <p><?= $post['content'] ?></p>
        </div>
        <div class="mb-2">
            <h1 class="mb-3">Article Category</h1>
            <div>
                <a href="#" class="badge rounded-pill text-bg-primary me-1 text-decoration-none px-3 py-2" role="button"> achievements </a>
                <a href="#" class="badge rounded-pill text-bg-primary me-1 text-decoration-none px-3 py-2" role="button"> Research </a>
                <a href="#" class="badge rounded-pill text-bg-primary me-1 text-decoration-none px-3 py-2" role="button"> Student Exchange </a>
                <a href="#" class="badge rounded-pill text-bg-primary me-1 text-decoration-none px-3 py-2" role="button"> Teaching Assistant Program </a>
            </div>
        </div>
    </div>
</main>

<?php require('resources/views/partials/footer.php') ?>
