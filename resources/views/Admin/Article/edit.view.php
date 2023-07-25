<?php require('resources/views/Admin/partials/header.php') ?>

<main>
    <div class="container px-5">
        <h1 class="title fw-bold">UPDATE ARTICLE</h1>
        <form action="/admin/article/update" method="POST" class="" enctype="multipart/form-data">
            <!-- <input type="hidden" name="_method" value="PATCH"> -->
            <input type="hidden" name="id" value="<?= $article['id'] ?>">
            <div class="mb-3">
                <label for="article_title" class="form-label">Title</label>
                <input type="text" class="form-control" id="article_title" name="article_title" value="<?= $article['title'] ?>">

                <?php if (isset($errors['article_title'])) : ?>
                    <div class="text-danger"><?= $errors['article_title'] ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="tagline" class="form-label">Tagline</label>
                <select class="form-select " aria-label="select example" id="tagline" name="tagline">
                    <option value="" selected>Open this select menu</option>
                    <option value="achievements" <?php if ($article['tagline'] === 'achievements') echo 'selected'; ?>>Achievements</option>
                    <option value="research" <?php if ($article['tagline'] === 'research') echo 'selected'; ?>>Research</option>
                    <option value="student exchange" <?php if ($article['tagline'] === 'student exchange') echo 'selected'; ?>>Student Exchange</option>
                    <option value="teaching assistant program" <?php if ($article['tagline'] === 'teaching assistant program') echo 'selected'; ?>>Teaching Assistant Program</option>
                </select>

                <?php if (isset($errors['tagline'])) : ?>
                    <div class="text-danger"><?= $errors['tagline'] ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="validationTextarea" class="form-label">Content</label>
                <textarea class="form-control" id="validationTextarea" name="article_content" rows="15"> <?= $article['content'] ?> </textarea>

                <?php if (isset($errors['article_content'])) : ?>
                    <div class="text-danger"><?= $errors['article_content'] ?></div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" aria-label="file example" accept=".png, .jpg, .jpeg" id="image" name="image" onchange="previewImage()">
                <?php if (isset($errors['image'])) : ?>
                    <div class="text-danger"><?= $errors['image'] ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <img id="preview-image-before-upload" src="/publics/article_photos/<?= $article['image_path'] ?>" alt="preview image" style="max-height: 250px;">
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Submit</button>
                <a href="/admin/articles" class="btn btn-primary" role="button">Cancel</a>
            </div>
        </form>
    </div>
</main>

<script>
    function previewImage() {
        var preview = document.querySelector('#preview-image-before-upload');
        var file = document.querySelector('#image').files[0];
        var reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "publics/article_photos/<?= $article['image_path'] ?>";
        }
    }
</script>

<?php require('resources/views/Admin/partials/footer.php') ?>