<!-- FOOTER START -->
<footer>
  <div class="container">
    <div class="content__footer">
      <div class="profil">
        <div class="logo__area">
          <img src="/publics/img/LOGO 1.png" alt="" />
          <span class="logo__name">LEXA INSTITUTE</span>
        </div>
        <div class="desc__area">
          <p>
            At Lexa University, we understand the importance of staying
            ahead of innovation and artificial intelligence (AI). We are
            committed to creating an exhilarating learning environment that
            enriches and prepares our students to become highly skilled AI
            Engineers, Data Scientists, and Web and App Developers.
          </p>
        </div>
        <div class="social__media">
          <a href="https://www.instagram.com/lexa_institute/"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-discord"></i></a>
          <a href="#"><i class="fa-brands fa-tiktok"></i></a>
        </div>
      </div>
      <div class="service__area">
        <ul class="service__header">
          <li class="service__name">Services</li>
          <li><a href="/#graduate">IT Engineer</a></li>
          <li><a href="/about#courses">Program</a></li>
          <li><a href="/aboutUs/aboutus.html">About Us</a></li>
          <li><a href="/blog">Article</a></li>
        </ul>
        <ul class="service__header">
          <li class="service__name">Useful Links</li>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/blog">Article</a></li>
        </ul>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="copy__right">
        <i class="fa-regular fa-copyright"></i>
        <span>2023 LEXA INSTITUTE</span>
      </div>
      <div class="tou">
        <a href="#">Term of Use</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Cookie</a>
      </div>
    </div>
  </div>
</footer>
<!-- FOOTER END -->

<button id="back-to-top-btn">
  <i class="fas fa-arrow-up"></i>
</button>
<!-- My Script -->
<script src="https://kit.fontawesome.com/aa3910db9c.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script>
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  }

  var backToTopBtn = document.getElementById("back-to-top-btn");

  backToTopBtn.addEventListener("click", scrollToTop);

  // Tambahkan event listener untuk mengatur tampilan tombol "Back to Top"
  window.addEventListener("scroll", function() {
    if (window.pageYOffset > 200) {
      backToTopBtn.style.display = "block";
    } else {
      backToTopBtn.style.display = "none";
    }
  });
</script>
<script src="<?= $js ?>"></script>
</body>

</html>