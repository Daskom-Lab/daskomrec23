// Pilih shift Start
const tambahPopup = document.querySelector("#tambah-popup");
const resetPopup = document.querySelector("#reset-popup");

const popupTambah = document.querySelector("#popup-tambah");
tambahPopup.addEventListener("click", () => {
  popupTambah.classList.remove("hidden");
  document.body.classList.add("overflow-hidden");
});

const closePopupTambah = document.querySelector("#close-popupTambah");
closePopupTambah.addEventListener("click", () => {
  popupTambah.classList.add("hidden");
  document.body.classList.remove("overflow-hidden");
});

const popupReset = document.querySelector("#popup-reset");
resetPopup.addEventListener("click", () => {
  popupReset.classList.remove("hidden");
  document.body.classList.add("overflow-hidden");
});

const closePopupReset = document.querySelector("#close-popupReset");
closePopupReset.addEventListener("click", () => {
  popupReset.classList.add("hidden");
  document.body.classList.remove("overflow-hidden");
});

// Pilih shift End

// reset plot start
const reset_plotPopup = document.querySelector("#resetPlot-popup");

const popupResetPlot = document.querySelector("#popup-resetPlot");
reset_plotPopup.addEventListener("click", () => {
  popupResetPlot.classList.remove("hidden");
  document.body.classList.add("overflow-hidden");
});

const closePopupResetPlot = document.querySelector("#close-popupResetPlot");
closePopupResetPlot.addEventListener("click", () => {
  popupResetPlot.classList.add("hidden");
  document.body.classList.remove("overflow-hidden");
});
// reset plot end


// edit shift Start
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
// edit shift end
