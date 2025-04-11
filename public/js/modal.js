document.addEventListener("DOMContentLoaded", function () {
  // Referencias a los modales
  const registerModal = document.getElementById("registerModal");
  const loginModal = document.getElementById("loginModal");
  const vehicleModal = document.getElementById("vehicleModal");
  const addVehicleModal = document.getElementById("addVehicleModal");
  const profileModal = document.getElementById("profileModal");
  const cardsModal = document.getElementById("cardsModal");

  const cards = document.querySelectorAll(".selectable-card");

  // Datos de cada tarjeta
  const cardData = {
      1: { bgColor: "bg-red-500", chip: true, name: "Card 1", theme: "Tema Rojo", type: "Tipo A" },
      2: { bgColor: "bg-blue-500", chip: false, name: "Card 2", theme: "Tema Azul", type: "Tipo B" },
      3: { bgColor: "bg-green-500", chip: true, name: "Card 3", theme: "Tema Verde", type: "Tipo C" },
  };

  // Contenedor principal donde se muestra la tarjeta seleccionada
  const cardDisplay = document.querySelector(".main-card");

  // Función para manejar la selección de tarjetas
  if (cards.length > 0) {
      cards.forEach((card) => {
          card.addEventListener("click", function () {
              // Deseleccionar todas las tarjetas
              cards.forEach((c) => c.classList.remove("selected"));

              // Seleccionar la tarjeta actual
              card.classList.add("selected");

              // Obtener el ID de la tarjeta seleccionada
              const cardId = card.getAttribute("data-card-id");
              console.log("Tarjeta seleccionada:", cardId);

              const data = cardData[cardId];
              if (!data || !cardDisplay) return;

              const cardElement = cardDisplay.querySelector('.rounded-xl');
              if (!cardElement) return;

              // Resetear clases base
              cardElement.className = 'rounded-xl p-6 h-48 w-full shadow-lg relative overflow-hidden';

              // Aplicar color de fondo
              cardElement.classList.add(data.bgColor);

              // Actualizar textos
              cardElement.querySelector('.text-2xl.font-bold').textContent = data.name;
              cardElement.querySelector('.text-sm').textContent = data.theme;
              cardElement.querySelector('.absolute.bottom-4.right-4 .text-2xl.font-bold').textContent = data.type;

              // Mostrar/ocultar chip
              const chip = cardElement.querySelector('.card-chip');
              if (chip) {
                  chip.classList.toggle('hidden', !data.chip);
              }
          });
      });
  } else {
      console.warn("No se encontraron tarjetas con la clase 'selectable-card'.");
  }

  // Botones para abrir modales
  const openRegisterBtn = document.getElementById("openRegisterModal");
  const openLoginBtn = document.getElementById("openLoginModal");
  const openVehicleBtn = document.getElementById("openVehicleModal");
  const openAddVehicleBtn = document.getElementById("openAddVehicleModal");
  const openProfileButton = document.getElementById("openProfileModal");
  const openCardsButton = document.getElementById("openCardsModal");

  // Botones para cerrar modales
  const closeRegisterBtns = registerModal?.querySelectorAll(".modal-close");
  const closeLoginBtns = loginModal?.querySelectorAll(".modal-close");
  const closeVehicleBtns = vehicleModal?.querySelectorAll(".modal-close");
  const closeAddVehicleBtns = addVehicleModal?.querySelectorAll(".modal-close");
  const closeProfileBtn = profileModal?.querySelector(".modal-close");
  const closeCardsButton = cardsModal?.querySelector(".modal-close");

  // Función para abrir un modal
  function openModal(modal) {
      if (modal) {
          console.log("Abriendo modal:", modal.id);
          modal.classList.remove("hidden");
          modal.classList.add("flex");
      }
  }

  // Función para cerrar un modal
  function closeModal(modal) {
      if (modal) {
          modal.classList.add("hidden");
          modal.classList.remove("flex");
      }
  }

  // Asignar eventos para abrir los modales
  openRegisterBtn?.addEventListener("click", () => {
      closeModal(loginModal);
      openModal(registerModal);
  });

  openLoginBtn?.addEventListener("click", () => {
      closeModal(registerModal);
      openModal(loginModal);
  });

  openVehicleBtn?.addEventListener("click", () => openModal(vehicleModal));
  openAddVehicleBtn?.addEventListener("click", () => {
      closeModal(vehicleModal);
      openModal(addVehicleModal);
  });

  openProfileButton?.addEventListener("click", () => {
      console.log("Botón de perfil clickeado");
      openModal(profileModal);
  });

  openCardsButton?.addEventListener("click", () => openModal(cardsModal));
  closeCardsButton?.addEventListener("click", () => closeModal(cardsModal));

  // Asignar eventos para cerrar los modales con la "X"
  closeRegisterBtns?.forEach(btn => btn.addEventListener("click", () => closeModal(registerModal)));
  closeLoginBtns?.forEach(btn => btn.addEventListener("click", () => closeModal(loginModal)));
  closeVehicleBtns?.forEach(btn => btn.addEventListener("click", () => closeModal(vehicleModal)));
  closeAddVehicleBtns?.forEach(btn => btn.addEventListener("click", () => closeModal(addVehicleModal)));
  closeProfileBtn?.addEventListener("click", () => closeModal(profileModal));

  // Cerrar modales al hacer clic fuera
  window.addEventListener("click", function (event) {
      if (vehicleModal && !vehicleModal.contains(event.target) && event.target !== openVehicleBtn) {
          closeModal(vehicleModal);
      }
      if (addVehicleModal && !addVehicleModal.contains(event.target) && event.target !== openAddVehicleBtn) {
          closeModal(addVehicleModal);
      }
      if (profileModal && !profileModal.contains(event.target) && event.target !== ProfileButton) {
          closeModal(profileModal);
      }
      if (registerModal && !registerModal.contains(event.target) && event.target !== openRegisterBtn) {
          closeModal(registerModal);
      }
      if (loginModal && !loginModal.contains(event.target) && event.target !== openLoginBtn) {
          closeModal(loginModal);
      }
  });

  // Cerrar modales con Escape
  window.addEventListener("keydown", function (event) {
      if (event.key === "Escape") {
          closeModal(profileModal);
          closeModal(vehicleModal);
          closeModal(addVehicleModal);
          closeModal(registerModal);
          closeModal(loginModal);
      }
  });
});
