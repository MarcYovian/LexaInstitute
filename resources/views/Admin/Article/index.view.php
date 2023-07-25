<?php require('resources/views/Admin/partials/header.php') ?>

<main class="container-fluid">
    <div class="row">
        <?php require('resources/views/Admin/partials/sidebar.php') ?>
        <main class="col-md-9 col-lg-10 px-md-4">
            <div class="d-flex justify-content-between">
                <h3 class="my-3">Artikel</h3>
                <a href="/admin/articles/create" class="btn btn-primary my-3" role="button">Create Article</a>
            </div>
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
                                <p class="card-text"><?= $limitedContent." ..." ?></p>
                            </div>
                            <div class="card-body">
                                <a href="/admin/article/view?id=<?= $article['id'] ?>" class="btn btn-primary">View</a>
                                <a href="/admin/article/edit?id=<?= $article['id'] ?>" class="btn btn-secondary">Update</a>
                                <a href="/admin/article/delete?id=<?= $article['id'] ?>" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </main>
    </div>
</main>

<?php require('resources/views/Admin/partials/footer.php') ?>