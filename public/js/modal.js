/******/ (() => { // webpackBootstrap
/*!*******************************!*\
  !*** ./resources/js/modal.js ***!
  \*******************************/
document.addEventListener("DOMContentLoaded", function () {
  // Modal de Registro
  var registerModal = document.getElementById("registerModal");
  var openRegisterBtn = document.getElementById("openRegisterModal"); // Verifica que este botón exista en tu HTML
  var closeRegisterBtns = registerModal === null || registerModal === void 0 ? void 0 : registerModal.querySelectorAll(".modal-close");

  // Modal de Inicio de Sesión (si lo tienes)
  var loginModal = document.getElementById("loginModal"); // Verifica que este modal exista en tu HTML
  var openLoginBtn = document.getElementById("openLoginModal"); // Verifica que este botón exista en tu HTML
  var closeLoginBtns = loginModal === null || loginModal === void 0 ? void 0 : loginModal.querySelectorAll(".modal-close");

  // Función para abrir el modal de registro
  function openRegisterModal() {
    registerModal.classList.remove("hidden");
    registerModal.classList.add("flex");
  }

  // Función para cerrar el modal de registro
  function closeRegisterModal() {
    registerModal.classList.add("hidden");
    registerModal.classList.remove("flex");
  }

  // Función para abrir el modal de inicio de sesión
  function openLoginModal() {
    loginModal.classList.remove("hidden");
    loginModal.classList.add("flex");
  }

  // Función para cerrar el modal de inicio de sesión
  function closeLoginModal() {
    loginModal.classList.add("hidden");
    loginModal.classList.remove("flex");
  }

  // Abrir el modal de login al hacer clic en el botón correspondiente (si es que existe)
  if (openLoginBtn) {
    openLoginBtn.addEventListener("click", function () {
      closeRegisterModal(); // Cierra el modal de registro si está abierto
      openLoginModal(); // Abre el modal de login
    });
  }

  // Abrir el modal de registro al hacer clic en el botón correspondiente
  if (openRegisterBtn) {
    openRegisterBtn.addEventListener("click", function () {
      closeLoginModal(); // Cierra el modal de login si está abierto
      openRegisterModal(); // Abre el modal de registro
    });
  }

  // Cerrar los modales al hacer clic en los botones de cierre
  closeRegisterBtns === null || closeRegisterBtns === void 0 || closeRegisterBtns.forEach(function (btn) {
    return btn.addEventListener("click", closeRegisterModal);
  });
  closeLoginBtns === null || closeLoginBtns === void 0 || closeLoginBtns.forEach(function (btn) {
    return btn.addEventListener("click", closeLoginModal);
  });

  // Cerrar los modales al hacer clic fuera de ellos (en el fondo oscuro)
  window.addEventListener("click", function (event) {
    if (event.target === registerModal) {
      closeRegisterModal();
    }
    if (event.target === loginModal) {
      closeLoginModal();
    }
  });
});
/******/ })()
;