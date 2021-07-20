const login = document.querySelector(".btn-login");
const register = document.querySelector(".btn-registrarse");

const removeHidden = function (clase) {
  document.querySelector(clase).classList.toggle("hidden");
};

document.addEventListener("click", function (e) {
  console.log(e.target);
  if (e.target.closest(".btn-login")) {
    removeHidden(".overlay-login");
  }
  if (e.target.closest(".btn-registrarse")) {
    removeHidden(".overlay-register");
  }
  if (e.target.closest(".cerrar")) {
    const { tipo } = e.target.dataset;
    removeHidden(tipo);
  }
});
