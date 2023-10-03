// MODAL LOGIC
const modal = document.getElementById("modal");
const overlay = document.getElementById("overlay");
const openModalBtn = document.getElementById("open-modal-btn");
const closeModalBtn = document.getElementById("close-modal-btn");

function openModal() {
    modal.classList.remove("hidden");
    overlay.classList.remove("hidden");
}

function openModalFlex() {
  modal.classList.add("flex")
}
function closeModal() {
    modal.classList.add("hidden");
    overlay.classList.add("hidden");
}

openModalBtn.addEventListener("click", openModal);
closeModalBtn.addEventListener("click", closeModal);
openModalBtn.addEventListener("click", openModalFlex);
overlay.addEventListener("click", closeModal);

// BUTTON LOGIC