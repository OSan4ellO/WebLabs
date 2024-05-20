const inputAuthorPhoto = document.getElementById("author-photo");
const authorPhotoView = document.getElementById("upload-preview__author-photo"); // Здесь был изменен ID
const inputHeroPhoto = document.getElementById("hero-photo");
const heroPhotoView = document.getElementById("upload-preview__hero-photo");
const inputHeroSmallPhoto = document.getElementById("hero-photo--small");
const heroSmallPhotoView = document.getElementById(
  "upload-preview__hero-photo--small"
);

inputAuthorPhoto.addEventListener("change", function () {
  uploadAuthorImage();
});

inputHeroPhoto.addEventListener("change", function () {
  uploadHeroImage();
});

inputHeroSmallPhoto.addEventListener("change", function () {
  uploadSmallHeroImage();
});

function uploadAuthorImage() {
  let imgLink = URL.createObjectURL(inputAuthorPhoto.files[0]);
  authorPhotoView.style.backgroundImage = `url(${imgLink})`;
}

function uploadHeroImage() {
  let imgLink = URL.createObjectURL(inputHeroPhoto.files[0]);
  heroPhotoView.style.backgroundImage = `url(${imgLink})`;
}

function uploadSmallHeroImage() {
  let imgLink = URL.createObjectURL(inputHeroSmallPhoto.files[0]);
  heroSmallPhotoView.style.backgroundImage = `url(${imgLink})`;
}
