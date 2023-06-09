const openButton = document.getElementById("add-flight-modal-open");
const modal = document.getElementById("add-flight-modal");
openButton.addEventListener("click", () => {
  modal.showModal();
});

window.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.close();
  }
});
