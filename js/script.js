const openButton = document.getElementById("add-flight-modal-open");
const addModal = document.getElementById("add-flight-modal");
openButton.addEventListener("click", () => {
  addModal.showModal();
});

window.addEventListener("click", (event) => {
  if (event.target === addModal) {
    addModal.close();
  }
});
const editButton = document.getElementById("edit-flight-modal-open");
const editModal = document.getElementById("edit-flight-modal");
editButton.addEventListener("click", () => {
  editModal.showModal();
});

window.addEventListener("click", (event) => {
  if (event.target === editModal) {
    editModal.close();
  }
});
