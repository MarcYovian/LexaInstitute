<?php require('resources/views/Admin/partials/header.php') ?>

<main>
    <div class="container px-5">
        <h1 class="title fw-bold">CREATE ARTICLE</h1>
        <form action="/admin/articles/create" method="POST" class="" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="article_title" class="form-label">Title</label>
                <input type="text" class="form-control" id="article_title" name="article_title">

                <?php if (isset($errors['article_title'])) : ?>
                    <div class="text-danger"><?= $errors['article_title'] ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="tagline" class="form-label">Tagline</label>
                <select class="form-select" aria-label="select example" id="tagline" name="tagline">
                    <option value="">Open this select menu</option>
                    <option value="achievements">Achievements</option>
                    <option value="research">Research</option>
                    <option value="student exchange">Student Exchange</option>
                    <option value="teaching assistant program">Teaching Assistant Program</option>
                </select>

                <?php if (isset($errors['tagline'])) : ?>
                    <div class="text-danger"><?= $errors['tagline'] ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="validationTextarea" class="form-label">Content</label>
                <textarea class="form-control" id="validationTextarea" name="article_content" rows="15"></textarea>

                <?php if (isset($errors['article_content'])) : ?>
                    <div class="text-danger"><?= $errors['article_content'] ?></div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" aria-label="file example" accept=".png, .jpg, .jpeg" id="image" name="image">
                <?php if (isset($errors['image'])) : ?>
                    <div class="text-danger"><?= $errors['image'] ?></div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Submit</button>
                <a href="/admin/articles" class="btn btn-primary" role="button">Cancel</a>
            </div>
        </form>
    </div>
</main>

<?php require('resources/views/Admin/partials/footer.php') ?>