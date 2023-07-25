<?php require('resources/views/partials/header.php') ?>

<?php require('resources/views/partials/nav.php') ?>

<!-- ARTICLE START -->
<section class="article" id="article">
  <div id="article-container">
    <div class="row">
      <?php foreach ($results as $article) : ?>
        <?php
        // Assuming $article['content'] contains the full content of the article

        // Split the content into an array of words
        $words = str_word_count($article['content'], 1);

        // Get the first 10 words from the array
        $firstTenWords = array_slice($words, 0, 5);

        // Convert the array back to a string
        $limitedContent = implode(' ', $firstTenWords);
        ?>
        <div class="col-md-4 col-lg-4">
          <div class="card mb-3">
            <img src="/publics/article_photos/<?= $article['image_path'] ?>" class="card-img-top" alt="Article" style="max-width: 500px; max-height: 250px;">
            <div class="card-body">
              <h5 class="card-title"><?= $article['title'] ?></h5>
              <p class="card-text"><?= $limitedContent.'...' ?></p>
            </div>
            <div class="card-body">
              <a href="/blog/show?id=<?= $article['id'] ?>" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
<!-- ARTICLE END -->

<?php require('resources/views/partials/footer.php') ?>