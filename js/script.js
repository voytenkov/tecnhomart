var modalMap = document.querySelector(".modal-map");
var modalLogin = document.querySelector(".modal-login");
var modalMapButton = document.querySelector(".location-button");
var modalContactButton = document.querySelector(".about-button");
var modalClose = document.querySelector(".modal-close");
modalMapButton.addEventListener("click", function (evt) {
  "use strict";
  evt.preventDefault();
  modalMap.classList.add("modal-view");
});
modalContactButton.addEventListener("click", function (evt) {
  "use strict";
  evt.preventDefault();
  modalLogin.classList.add("modal-view");
});
modalClose.addEventListener("click", function (evt) {
  "use strict";
  evt.preventDefault();
  modalMap.classList.remove("modal-view");
});