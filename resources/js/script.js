// Mengambil data Article dari file content.js
import { articles, comments } from '../../article/content/content.js';

// Mengambil ID artikel dari parameter URL
var urlParams = new URLSearchParams(window.location.search);
var articleId = urlParams.get('id');

// mencari artikel yang sesuai berdasarkan ID
var selectedArticle = articles.find(function(article) {
  return article.id == articleId;
});

// Mengambil elemen kontainer artikel dari HTML
var articleContainer = document.getElementById('article-container');
var commentForm = document.getElementById('comment-form');

// Menampilkan judul dan konten artikel

var articleInfo = document.createElement('div');
articleInfo.className = 'article-info';

var imageElement = document.createElement('img');
imageElement.src = '../'+ selectedArticle.image;
imageElement.alt = selectedArticle.tagline;

var titleElement = document.createElement('h2');
titleElement.textContent = selectedArticle.title;

var contentElement = document.createElement('p');
contentElement.innerHTML = selectedArticle.content;

// Menambahkan elemen judul dan konten ke dalam artikel info
articleInfo.appendChild(titleElement);
articleInfo.appendChild(imageElement);
articleInfo.appendChild(contentElement);

articleContainer.appendChild(articleInfo);

// Mendapatkan element list comment dari html
var commentList = document.getElementById('comment-list');

function displayComments(comments) {
  // Menghapus konten sebelumnya
  commentList.innerHTML = '';

  const filteredComments = comments.filter(comment => comment.idArticle === parseInt(articleId));

  // Loop melalui daftar komentar
  filteredComments.forEach(function(comment) {
    // Buat elemen untuk menampilkan komentar
    var commentElement = document.createElement('div');
    commentElement.classList.add('comment');

    var nameElement = document.createElement('h4');
    nameElement.innerHTML = comment.name + ' <span>' + comment.email + '</span>';

    var commentContentElement = document.createElement('p');
    commentContentElement.textContent = comment.content;

    // Tambahkan elemen komentar ke dalam elemen daftar komentar
    commentElement.appendChild(nameElement);
    commentElement.appendChild(commentContentElement);

    commentList.appendChild(commentElement);
  });
}

function addComment(name, email, comment) {

  // Mendapatkan ID komentar terakhir
  const lastCommentId = comments.length > 0 ? comments[comments.length - 1].id : 0;

  // Membuat objek komentar baru
  const newComment = {
    id: lastCommentId + 1,
    idArticle: parseInt(articleId),
    name: name,
    email: email,
    content: comment
  };

  // Menambahkan komentar baru ke dalam variabel comments
  comments.push(newComment);
  displayComments(comments);

}

displayComments(comments);

commentForm.addEventListener('submit', function(event) {
  event.preventDefault();

  // Mendapatkan nilai dari input form
  var nameInput = document.getElementById('name-input');
  var emailInput = document.getElementById('email-input');
  var commentInput = document.getElementById('comment-input');

  var name = nameInput.value;
  var email = emailInput.value;
  var comment = commentInput.value;

  // Menambahkan komentar
  addComment(name, email, comment);

  // Mengosongkan nilai input form
  nameInput.value = '';
  emailInput.value = '';
  commentInput.value = '';
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