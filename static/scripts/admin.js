const inputAuthorPhoto = document.getElementById("author-photo");
const authorPhotoView = document.getElementById("upload-preview__author-photo"); // Здесь был изменен ID
const inputHeroPhoto = document.getElementById("hero-photo");
const heroPhotoView = document.getElementById("upload-preview__hero-photo");
const inputHeroSmallPhoto = document.getElementById("hero-photo--small");
const heroPhotoSmallView = document.getElementById(
  "upload-preview__hero-photo--small"
);

inputAuthorPhoto.addEventListener("change", function () {
  uploadImage(inputAuthorPhoto, authorPhotoView);
});

inputHeroPhoto.addEventListener("change", function () {
  uploadImage(inputHeroPhoto, heroPhotoView);
});

inputHeroSmallPhoto.addEventListener("change", function () {
  uploadImage(inputHeroSmallPhoto, heroPhotoSmallView);
});

function uploadImage(inputPhoto, PhotoView) {
  let imgLink = URL.createObjectURL(inputPhoto.files[0]);
  PhotoView.style.backgroundImage = `url(${imgLink})`;
}
