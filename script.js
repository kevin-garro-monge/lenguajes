const startSection = document.querySelector(".inicio");
const mainSection = document.querySelector(".menu");
const login = document.querySelector(".btn-login");
const register = document.querySelector(".btn-registrarse");
const enterLogin = document.querySelector(".check-login");
const inputUser = document.querySelector(".input-user");
const inputPassword = document.querySelector(".input-password");
const createName = document.querySelector(".input-name");
const createSname = document.querySelector(".input-secondName");
const createPassword = document.querySelector(".input-nPassword");
const checkPassword = document.querySelector(".input-checkP");

const cuentas = [
  { user: "Juan", password: "123" },
  { user: "Moi", password: "321" },
];
const currentUser = [];

const removeHidden = function (clase, x = false) {
  if (document.querySelector(clase).classList.contains("hidden")) {
    document.querySelector(clase).classList.remove("hidden");
  } else {
    document.querySelector(clase).classList.add("hidden");
  }

  if (x === true) {
    document.querySelector(clase).classList.add("hidden");
  }
};

const loggedIn = () => {
  startSection.classList.add("hidden");
  mainSection.classList.remove("hidden");
};

///////////////////////////////////////////
//LOGIN
const enterAccount = () => {
  enterLogin.addEventListener("click", function (e) {
    const user = inputUser.value;

    const pass = inputPassword.value;

    if (user.trim() === "" || pass.trim() === "") return;

    const checkLogin = cuentas.filter((ele) => {
      if (ele.user === user && ele.password === pass) return ele;
    });
    // console.log(checkLogin);
    if (checkLogin.length === 1) {
      currentUser.push(checkLogin[0]);
      removeHidden(".overlay-login");
      loggedIn();
    }
  });
};

//check-register

document.addEventListener("click", function (e) {
  console.log(e.target);
  if (e.target.closest(".btn-login")) {
    removeHidden(".overlay-login");
    enterAccount();
  }
  if (e.target.closest(".btn-registrarse")) {
    removeHidden(".overlay-register");
  }
  if (e.target.closest(".cerrar")) {
    const { tipo } = e.target.dataset;
    removeHidden(tipo, true);
  }
});
