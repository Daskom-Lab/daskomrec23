// Data caas Start
const tambahCaasPopup = document.querySelector("#tambahCaas-popup");

const popupTambahCaas = document.querySelector("#popup-tambahCaas");
tambahCaasPopup.addEventListener("click", () => {
  popupTambahCaas.classList.remove("hidden");
  document.body.classList.add("overflow-hidden");
});

const closePopupTambahCaas = document.querySelector("#close-popupTambahCaas");
closePopupTambahCaas.addEventListener("click", () => {
  popupTambahCaas.classList.add("hidden");
  document.body.classList.remove("overflow-hidden");
});
