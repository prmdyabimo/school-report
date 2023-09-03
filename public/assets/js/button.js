// REGISTER
const formsRegister = document.querySelectorAll("#form_register");
const btnsRegister = document.querySelectorAll("#btn_register");

if (formsRegister) {
  btnsRegister.forEach((btnRegister, index) => {
    btnRegister.addEventListener("click", function (e) {
      e.preventDefault();

      Swal.fire({
        title: "Are you sure you want to register?",
        text: "Your data will be saved",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes!",
      }).then((result) => {
        if (result.isConfirmed) {
          const form = formsRegister[index];
          if (form instanceof HTMLFormElement) {
            form.submit();
          } else {
            console.error(
              `formsRegister[${index}] is not a valid form element.`
            );
          }
        }
      });
    });
  });
}
