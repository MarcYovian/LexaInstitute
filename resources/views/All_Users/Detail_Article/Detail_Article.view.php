<?php require('resources/views/partials/header.php') ?>

<?php require('resources/views/partials/nav.php') ?>

<!-- ARTICLE START -->
<article id="article">
  <div id="article-container"></div>
</article>
<!-- ARTICLE END -->

<hr />
<!-- COMMENT LIST START -->
<div class="comment-container" id="comment-container">
  <h3 class="comment-title">COMMENTS</h3>
  <div id="comment-list"></div>
</div>
<!-- COMMENT LIST END -->

<!-- FORM START -->
<div class="form-comments" id="form-comments">
  <h4>LEAVE YOUR COMMENT HERE!!!</h4>
  <form id="comment-form">
    <div class="input-area">
      <input type="text" id="name-input" placeholder="Nama" required />
      <input type="email" id="email-input" placeholder="Email" required />
    </div>
    <textarea id="comment-input" placeholder="Komentar" cols="30" rows="10" required></textarea>
    <button type="submit">Kirim Komentar</button>
  </form>
</div>
<!-- FORM END -->


<?php require('resources/views/partials/footer.php') ?>