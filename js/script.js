const openButton = document.getElementById("add-flight-modal-open");
const closeButton = document.getElementById("add-flight-modal-close");
const modal = document.getElementById("add-flight-modal");

openButton.addEventListener("click", () => {
  modal.showModal();
});

closeButton.addEventListener("click", () => {
  modal.close();
});
