document.getElementById("cardNumber").addEventListener("input", function (e) {
  let value = e.target.value.replace(/\D/g, "");
  value = value.substring(0, 16);
  value = value.replace(/(\d{4})(?=\d)/g, "$1 ");
  e.target.value = value;
});
document.getElementById("expiration").addEventListener("input", function (e) {
  let value = e.target.value.replace(/\D/g, "");
  value = value.substring(0, 4);
  value = value.replace(/(\d{2})(\d{2})/, "$1 / $2");
  e.target.value = value;
});

document.getElementById("cvc").addEventListener("input", function (e) {
  let value = e.target.value.replace(/\D/g, "");
  value = value.substring(0, 3);
  e.target.value = value;
});
