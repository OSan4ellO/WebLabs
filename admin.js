let showPasswordIcon = document.getElementById("password__button");
let passwordInput = document.getElementById("passwordInput");

showPasswordIcon.onclick = function () {
  if (passwordInput.type == "password") {
    passwordInput.type = "text";
    showPasswordIcon.src = "static/images/eye.svg";
  } else {
    passwordInput.type = "password";
    showPasswordIcon.src = "static/images/eye-off.svg";
  }
};
