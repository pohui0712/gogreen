const loginBtn = document.getElementById("login-btn");
const closeBtnSignUp = document.getElementById("close-btn-sign-up");
const closeBtnOverlay = document.getElementById("close-btn-overlay");

function toggle() {
  var blurHeader = document.getElementById("blur-header");
  blurHeader.classList.toggle("active");

  var blurHomeContainer = document.getElementById("blur-homeContainer");
  blurHomeContainer.classList.toggle("active");

  var blurAboutPage = document.getElementById("blur-aboutPage");
  blurAboutPage.classList.toggle("active");

  var blurBenefitPage = document.getElementById("blur-benefitPage");
  blurBenefitPage.classList.toggle("active");

  var blurProgram = document.getElementById("blur-program");
  blurProgram.classList.toggle("active");

  var blurContact = document.getElementById("blur-contact");
  blurContact.classList.toggle("active");

  var blurFooter = document.getElementById("blur-footer");
  blurFooter.classList.toggle("active");

  var loginPage = document.getElementById("login-page");
  loginPage.classList.toggle("active");

  var nonScroll = document.getElementById("non-scroll");
  nonScroll.classList.toggle("active");
}

loginBtn.addEventListener("click", () => {
  toggle();
});
closeBtnSignUp.addEventListener("click", () => {
  toggle();
});
closeBtnOverlay.addEventListener("click", () => {
  toggle();
});
