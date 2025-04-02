document.addEventListener("DOMContentLoaded", function () {
    // Modal de Registro
    const registerModal = document.getElementById("registerModal");
    const openRegisterBtn = document.getElementById("openRegisterModal");
    const closeRegisterBtns = registerModal?.querySelectorAll(".modal-close");

    // Modal de Inicio de Sesión
    const loginModal = document.getElementById("loginModal");
    const openLoginBtn = document.getElementById("openLoginModal");
    const closeLoginBtns = loginModal?.querySelectorAll(".modal-close");

    // Modal de Vehículos
    const vehicleModal = document.getElementById("vehicleModal");
    const openVehicleBtn = document.getElementById("openVehicleModal");
    const closeVehicleBtn = vehicleModal?.querySelector(".modal-close");

    console.log("Botón My Vehicle:", openVehicleBtn);
    console.log("Modal de vehículos:", vehicleModal);

    // Función para abrir un modal
    function openModal(modal) {
        if (modal) {
            modal.classList.remove("hidden");
            modal.classList.add("flex");
        } else {
            console.error("El modal no se encontró en el DOM.");
        }
    }

    // Función para cerrar un modal
    function closeModal(modal) {
        if (modal) {
            modal.classList.add("hidden");
            modal.classList.remove("flex");
        }
    }

    // Abrir el modal de registro
    if (openRegisterBtn) {
        openRegisterBtn.addEventListener("click", function () {
            closeModal(loginModal);
            openModal(registerModal);
        });
    }

    // Abrir el modal de inicio de sesión
    if (openLoginBtn) {
        openLoginBtn.addEventListener("click", function () {
            closeModal(registerModal);
            openModal(loginModal);
        });
    }

    // Abrir el modal de vehículos
    if (openVehicleBtn) {
        openVehicleBtn.addEventListener("click", function () {
            closeModal(registerModal);
            closeModal(loginModal);
            openModal(vehicleModal);
        });
    } else {
        console.error("El botón 'openVehicleBtn' no se encontró en el DOM.");
    }

    // Cerrar los modales al hacer clic en la "X"
    closeRegisterBtns?.forEach(btn => btn.addEventListener("click", () => closeModal(registerModal)));
    closeLoginBtns?.forEach(btn => btn.addEventListener("click", () => closeModal(loginModal)));
    closeVehicleBtn?.addEventListener("click", () => closeModal(vehicleModal));

    // Cerrar los modales al hacer clic fuera de ellos
    window.addEventListener("click", function (event) {
        if (event.target === registerModal) closeModal(registerModal);
        if (event.target === loginModal) closeModal(loginModal);
        if (event.target === vehicleModal) closeModal(vehicleModal);
    });
});