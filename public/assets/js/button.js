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

// SAVE
const formsSave = document.querySelectorAll("#form_save");
const btnsSave = document.querySelectorAll("#btn_save");

if (formsSave) {
  btnsSave.forEach((btnSave, index) => {
    btnSave.addEventListener("click", function (e) {
      e.preventDefault();

      Swal.fire({
        title: "Are you sure you want to add data?",
        text: "The data will be saved",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Save!",
      }).then((result) => {
        if (result.isConfirmed) {
          const form = formsSave[index];
          if (form instanceof HTMLFormElement) {
            form.submit();
          } else {
            console.error(`formsSave[${index}] is not a valid form element.`);
          }
        }
      });
    });
  });
}

// EDIT
const formsEdit = document.querySelectorAll(".form_edit");
const btnsEdit = document.querySelectorAll(".btn_edit");

if (formsEdit) {
  btnsEdit.forEach((btnEdit, index) => {
    btnEdit.addEventListener("click", function (e) {
      e.preventDefault();

      Swal.fire({
        title: "Are you sure you want to change the data?",
        text: "Data will be changed",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Change!",
      }).then((result) => {
        if (result.isConfirmed) {
          const form = formsEdit[index];
          if (form instanceof HTMLFormElement) {
            form.submit();
          } else {
            console.error(`formsEdit[${index}] is not a valid form element.`);
          }
        }
      });
    });
  });
}

$(document).on("click", "#btn_delete", function (e) {
  e.preventDefault();
  var link = $(this).attr("href");
  Swal.fire({
    title: "Are you sure you want to delete the data?",
    text: "Data will be deleted permanently!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Delete!",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = link;
    }
  });
});

// LOGOUT
const btnsLogout = document.querySelectorAll("#btn_logout");

if (btnsLogout) {
  btnsLogout.forEach((btnLogout, index) => {
    btnLogout.addEventListener("click", function (e) {
      e.preventDefault();

      const href = this.getAttribute("href");

      Swal.fire({
        title: "Are you sure you want to leave?",
        text: "You will exit the dashboard page",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Exit!",
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = href;
          Swal.fire({
            icon: "success",
            title: "Success",
            text: "You have successfully logged out",
          });
        }
      });
    });
  });
}
