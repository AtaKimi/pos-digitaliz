// MODAL LOGIC
const modal = document.getElementById("modal");
const modalContent = document.getElementById("modal-content");
const menulist = document.getElementById("menulist");
const overlay = document.getElementById("overlay");
const openModalBtn = document.getElementById("open-modal-btn");
const closeModalBtn = document.getElementById("close-modal-btn");

function openModal() {
  modal.classList.remove("hidden");
  setTimeout(() => {
    modal.classList.remove("translate-y-[100%]");
    modal.classList.add("translate-y-0")
  }, 100);

  overlay.classList.remove("hidden");
}

function closeModal() {
  modal.classList.remove("translate-y-0")
  modal.classList.add("translate-y-[100%]");
  setTimeout(() => {
    modal.classList.add("hidden");
    overlay.classList.add("hidden");
  }, 300);
}

openModalBtn.addEventListener("click", openModal);
closeModalBtn.addEventListener("click", closeModal);
overlay.addEventListener("click", closeModal);

// BUTTON LOGIC
const buttons = document.getElementById('buttons').getElementsByTagName("button");
const count = document.getElementById('count');
const updateVisibility = () => {
  if (parseInt(count.textContent) < 1) {
    buttons[0].classList.remove('fade-out');
    buttons[0].classList.add('fade-in');
    buttons[0].classList.remove('hidden');
    buttons[1].classList.remove('flex');
    buttons[2].classList.remove('flex');
    buttons[1].classList.add('hidden');
    buttons[2].classList.add('hidden');
    document.getElementById('count').classList.add('hidden');
  } else if (parseInt(count.textContent) > 0) {
    buttons[0].classList.add('hidden');
    buttons[1].classList.add('flex');
    buttons[2].classList.add('flex');
    buttons[1].classList.remove('hidden');
    buttons[2].classList.remove('hidden');
    document.getElementById('count').classList.remove('hidden');
  }
}

// WHEN THE "TAMBAH" BUTTON CLICKED
buttons[0].addEventListener('click', () => {
  buttons[0].classList.add('fade-out');
  ++count.innerText;
  setTimeout(() => {
    updateVisibility();
    buttons[1].classList.add('fade-in');
    buttons[2].classList.add('fade-in');
  }, 500);
})

// WHEN THE '+' BUTTON CLICKED
buttons[1].addEventListener('click', () => {
  ++count.innerText;
})

// WHEN THE '-' BUTTON CLICKED
buttons[2].addEventListener('click', () => {
  --count.innerText;
  setTimeout(() => {
    updateVisibility();
  }, 500);
})