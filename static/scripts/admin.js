const inputAuthorPhoto = document.getElementById("author-photo");
const authorPhotoView = document.getElementById("upload-preview__author-photo");
const authorPhotoPreView = document.getElementById("author-photo__card");
const inputHeroPhoto = document.getElementById("hero-photo");
const heroPhotoView = document.getElementById("upload-preview__hero-photo");
const inputHeroSmallPhoto = document.getElementById("hero-photo--small");
const heroPhotoSmallView = document.getElementById(
  "upload-preview__hero-photo--small"
);
const postPagePhoto = document.getElementById("post-page__photo");
const postCardPhoto = document.getElementById("card-page__photo");

function uploadImage(inputPhoto, photoView, photoPreview) {
  let imgLink = URL.createObjectURL(inputPhoto.files[0]);
  [photoView, photoPreview].forEach((element) => {
    element.style.backgroundImage = `url(${imgLink})`;
    element.style.backgroundSize = "cover";
  });
}

inputAuthorPhoto.addEventListener("change", function () {
  uploadImage(inputAuthorPhoto, authorPhotoView, authorPhotoPreView);
});

inputHeroPhoto.addEventListener("change", function () {
  uploadImage(inputHeroPhoto, heroPhotoView, postPagePhoto);
});

inputHeroSmallPhoto.addEventListener("change", function () {
  uploadImage(inputHeroSmallPhoto, heroPhotoSmallView, postCardPhoto);
});

// -------------------------------------------------------------

const titleInput = document.getElementById("title");
const titleOutput = document.getElementById("title-preview");
const descriptionInput = document.getElementById("description");
const descriptionOutput = document.getElementById("description-preview");
const authorNameInput = document.getElementById("author-name");
const authorNameOutput = document.getElementById("author-name-preview");
const dateInput = document.getElementById("date");
const dateOutput = document.getElementById("date-preview");
const subcontentInput = document.getElementById("subcontent__text");

function displayInput(placeInput, placeOutput) {
  placeOutput.textContent = placeInput.value;
}

function changeColor(placeInput) {
  const colorEmpty = "rgba(255, 255, 255, 1)";
  const colorFill = "rgb(247, 247, 247)";
  if (placeInput.value) {
    placeInput.style.backgroundColor = colorFill;
    placeInput.style.borderBottom = "1px solid rgba(46, 46, 46, 1)";
  } else {
    placeInput.style.backgroundColor = colorEmpty;
    placeInput.style.borderBottom = "1px solid rgba(232, 105, 97, 1)";
  }
}

titleInput.addEventListener("input", function () {
  displayInput(titleInput, titleOutput);
  changeColor(titleInput);
});

descriptionInput.addEventListener("input", function () {
  displayInput(descriptionInput, descriptionOutput);
  changeColor(descriptionInput);
});

authorNameInput.addEventListener("input", function () {
  displayInput(authorNameInput, authorNameOutput);
  changeColor(authorNameInput);
});

dateInput.addEventListener("input", function () {
  displayInput(dateInput, dateOutput);
  changeColor(dateInput);
});

subcontentInput.addEventListener("input", function () {
  changeColor(subcontentInput);
});
