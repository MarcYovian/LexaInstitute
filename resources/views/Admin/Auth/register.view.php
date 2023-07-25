<?php require('resources/views/Admin/partials/header.php') ?>

<main class="container-fluid">
    <div class="row">
        <?php require('resources/views/Admin/partials/sidebar.php') ?>
        <main class="col-md-9 col-lg-10 px-md-4">
            <div class="container px-5">
                <h1 class="title fw-bold">CREATE USER ACCOUNT</h1>
                <form action="/admin/register" method="POST" class="" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nip" class="form-label">
                            Nomor Identitas Pegawai Negeri Sipil (NIP)
                        </label>
                        <input type="text" maxlength="10" class="form-control" name="nip" id="nip">

                        <?php if (isset($errors['nip'])) : ?>
                            <div class="text-danger"><?= $errors['nip'] ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">

                        <?php if (isset($errors['name'])) : ?>
                            <div class="text-danger"><?= $errors['name'] ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="mail" class="form-label">Email</label>
                        <input type="text" class="form-control" id="mail" name="mail">

                        <?php if (isset($errors['mail'])) : ?>
                            <div class="text-danger"><?= $errors['mail'] ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">

                        <?php if (isset($errors['password'])) : ?>
                            <div class="text-danger"><?= $errors['password'] ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">

                        <?php if (isset($errors['alamat'])) : ?>
                            <div class="text-danger"><?= $errors['alamat'] ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image User Photo</label>
                        <input type="file" class="form-control" aria-label="file example" accept=".png, .jpg, .jpeg" id="image" name="image">
                        <?php if (isset($errors['image'])) : ?>
                            <div class="text-danger"><?= $errors['image'] ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a href="/admin/dashboard" class="btn btn-primary" role="button">Cancel</a>
                    </div>
                </form>
            </div>
        </main>
    </div>
</main>

<?php require('resources/views/Admin/partials/footer.php') ?>