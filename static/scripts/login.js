let userData = {
  email: "",
  password: "",
};
const showPasswordIcon = document.getElementById("password__button");
const passwordInput = document.getElementById("passwordInput");
const emailInput = document.getElementById("emailInput");
const buttonSubmit = document.getElementById("submit");
const errorMessage = document.getElementById("error");
const errorText = document.getElementById("error__status");
const personalData = document.getElementById("personalData");

function emailErrorHandler() {
  const emailSubError = document.getElementById("email__require");
  if (!emailInput.value) {
    changeColor(emailInput, false);
    emailSubError.textContent = "Email is required.";
    emailSubError.classList.remove("status__off");
    return false;
  } else {
    if (validateEmail(emailInput.value)) {
      changeColor(emailInput, true);
      emailSubError.classList.add("status__off");
      userData.email = emailInput.value;
      return true;
    } else {
      changeColor(emailInput, false);
      emailSubError.classList.remove("status__off");
      emailSubError.textContent =
        "Incorrect email format. Correct format is ****@**.***";
      return false;
    }
  }
}

function passwordErrorHandler() {
  const passwordSubError = document.getElementById("password__require");
  if (!passwordInput.value) {
    changeColor(passwordInput, false);
    passwordSubError.textContent = "Password is required.";
    passwordSubError.classList.remove("status__off");
    return false;
  } else {
    if (validatePassword(passwordInput.value)) {
      changeColor(passwordInput, true);
      passwordSubError.classList.add("status__off");
      userData.password = passwordInput.value;
      return true;
    } else {
      changeColor(passwordInput, false);
      passwordSubError.classList.remove("status__off");
      passwordSubError.textContent =
        "Invalid password format. Must be at least 5 characters";
      return false;
    }
  }
}

function errorAnimation(bol) {
  if (bol == false) {
    if (
      errorMessage.style.display == "none" ||
      errorMessage.classList.contains("error__hidden")
    ) {
      errorMessage.style.display = "flex";
      errorText.textContent = "A-Ah! Check all fields,";
      setTimeout(function () {
        errorMessage.classList.remove("error__hidden");
        errorMessage.classList.add("error__expanded");
      }, 10);
      setTimeout(function () {
        errorText.classList.remove("status__off");
      }, 20);
    }
  } else if (bol == true) {
    {
      if (emailErrorHandler() && passwordErrorHandler()) {
        errorMessage.classList.remove("error__expanded");
        errorMessage.classList.add("error__hidden");
        setTimeout(function () {
          errorMessage.style.display = "none";
        }, 300);
        setTimeout(function () {
          errorText.classList.add("status__off");
        }, 75);
      }
    }
  }
}

function validateEmail(email) {
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regex.test(email);
}

function validatePassword(password) {
  return password.length >= 5;
}

function changeColor(placeInput, bol) {
  if (bol) {
    placeInput.classList.add("status__fill");
    placeInput.classList.remove("status__empty");
  } else {
    placeInput.classList.add("status__empty");
    placeInput.classList.remove("status__fill");
  }
}

personalData.addEventListener("submit", function (event) {
  event.preventDefault();
  emailErrorHandler();
  passwordErrorHandler();
  if (emailErrorHandler() && passwordErrorHandler()) {
    errorAnimation(true);
    sendUserData();
  } else {
    errorAnimation(false);
  }
});

showPasswordIcon.addEventListener("click", function () {
  if (passwordInput.type == "password") {
    passwordInput.type = "text";
    showPasswordIcon.src = "static/images/eye.svg";
  } else {
    passwordInput.type = "password";
    showPasswordIcon.src = "static/images/eye-off.svg";
  }
});

emailInput.addEventListener("input", function () {
  if (emailInput.value) {
    changeColor(emailInput, true);
  } else {
    changeColor(emailInput, false);
  }
});

passwordInput.addEventListener("input", function () {
  if (passwordInput.value) {
    changeColor(passwordInput, true);
  } else {
    changeColor(passwordInput, false);
  }
});

function sendUserData() {
  const json = JSON.stringify(userData);
  fetch("http://localhost:8080/api", {
    method: "POST",
    body: json,
  })
    .then(function (response) {
      //
      console.log("ok");
    })
    .catch(function (error) {
      console.log("error");
      //...
    });
}
