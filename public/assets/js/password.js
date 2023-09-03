const passwordInputs = document.querySelectorAll(".password");
const eyeIcons = document.querySelectorAll(".eyeIcon");
const eyeIconButtons = document.querySelectorAll(".eyeIconButton");

if (eyeIconButtons) {
  eyeIconButtons.forEach((button, index) => {
    const passwordInput = passwordInputs[index];
    const eyeIcon = eyeIcons[index];

    button.addEventListener("click", function () {
      if (passwordInput.getAttribute("type") === "password") {
        passwordInput.setAttribute("type", "text");
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
      } else {
        passwordInput.setAttribute("type", "password");
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
      }
    });
  });
}
