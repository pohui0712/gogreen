const signUpButton = document.getElementById('signUp')
const signInButton = document.getElementById('signIn')
const container = document.getElementById('container')
const loginBtn = document.getElementById('login-btn')
const closeBtnSignUp = document.getElementById('close-btn-sign-up')
const closeBtnOverlay = document.getElementById('close-btn-overlay')



signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active")
})

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active")
})

loginBtn.addEventListener('click', () => {
    document.getElementById("login-page").style.display = "flex";
})

closeBtnSignUp.addEventListener('click', () => {
    document.getElementById("login-page").style.display = "none";

})

closeBtnOverlay.addEventListener('click', () => {
    document.getElementById("login-page").style.display = "none";

})
