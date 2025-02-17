$(document).ready(function () {
  $("#loginForm").submit(function (event) {
    let email = $("#email").val();
    let senha = $("#senha").val();
    if (email === "" || senha === "") {
      alert("Preencha todos os campos!");
      event.preventDefault();
    }
  });
});
