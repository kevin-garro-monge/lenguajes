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

///////////////////////////////////////////
//LOGIN

//FUNCION PARA ENTRAR A LA CUENTA
const enterAccount = () => {
  enterLogin.addEventListener("click", function (e) {
    const user = inputUser.value;

    const pass = inputPassword.value;

    if (user.trim() === "" || pass.trim() === "") return;

    const checkLogin = cuentas.filter((ele) => {
      if (ele.user === user && ele.password === pass) return ele;
    });

    if (checkLogin.length === 1) {
      //Aqui se validan los datos si coinciden se agregan al array de checkLogin y si este tiene un tamaño igual a 1 significa que si se validaron
      currentUser.push(checkLogin[0]);
      //Redireccion a la otra pagina
      window.location.href = "./mainPage.html";
    }
  });
};

//FUNCION PARA QUE SE DESPLIEGUE EL LOGIN Y REGISTRO

document.addEventListener("click", function (e) {
  console.log(e.target);
  if (e.target.closest(".btn-login")) {
    removeHidden(".overlay-login");
    // enterAccount();
  }
  if (e.target.closest(".btn-registrarse")) {
    removeHidden(".overlay-register");
  }
  if (e.target.closest(".cerrar")) {
    const { tipo } = e.target.dataset;
    removeHidden(tipo, true);
  }
});
