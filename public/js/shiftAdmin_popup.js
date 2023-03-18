// Pilih shift Start
const editShiftPopup = document.querySelector("#editShift-popup");

const popupEditShift = document.querySelector("#popup-editShift");
editShift.addEventListener("click", () => {
  popupEditShift.classList.remove("hidden");
  document.body.classList.add("overflow-hidden");
});

const closeeditShift = document.querySelector("#close-popupEditShift");
closeeditShift.addEventListener("click", () => {
  popupEditShift.classList.add("hidden");
  document.body.classList.remove("overflow-hidden");
});
