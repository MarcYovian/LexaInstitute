// Simpan data artikel dalam bentuk array objek

import { articles } from "../../article/content/content.js";
  
  // Ambil elemen kontainer artikel dari HTML
  var articleContainer = document.getElementById('article-container');
  
  // Tampilkan semua artikel dalam card
  articles.forEach(function(article) {
    // Buat elemen card artikel
    var articleCard = document.createElement('div');
    articleCard.classList.add('article-card');

    // buat elemen tagline artikel
    var taglineElement = document.createElement('h6');
    taglineElement.textContent = article.tagline;

    //buat elemen image artikel
    var imageElement = document.createElement('img');
    imageElement.src = article.image;
    imageElement.alt = article.tagline;
  
    // Buat elemen judul artikel
    var titleElement = document.createElement('h2');
    titleElement.textContent = article.title;
  
    // Buat elemen konten artikel dengan batasan kata
    var contentElement = document.createElement('p');
    var contentWords = article.content.split(' ').slice(0, 20).join(' ');
    contentElement.textContent = contentWords + '...';
  
    // Buat elemen "Lanjutkan Membaca" sebagai tautan
    var continueReadingElement = document.createElement('a');
    continueReadingElement.textContent = 'Lanjutkan Membaca';
    continueReadingElement.href = 'detailArticle/article.html?id=' + article.id;
  
    // Tambahkan elemen judul, konten, dan "Lanjutkan Membaca" ke dalam card
    articleCard.appendChild(imageElement);
    articleCard.appendChild(titleElement);
    articleCard.appendChild(taglineElement);
    articleCard.appendChild(contentElement);
    articleCard.appendChild(continueReadingElement);
  
    // Tambahkan card ke dalam kontainer artikel
    articleContainer.appendChild(articleCard);
  });

// Tambahkan fungsi untuk menggulirkan halaman ke atas
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}

var backToTopBtn = document.getElementById('back-to-top-btn');

backToTopBtn.addEventListener('click', scrollToTop);

// Tambahkan event listener untuk mengatur tampilan tombol "Back to Top"
window.addEventListener('scroll', function() {
  if (window.pageYOffset > 200) {
    backToTopBtn.style.display = 'block';
  } else {
    backToTopBtn.style.display = 'none';
  }
});


  

