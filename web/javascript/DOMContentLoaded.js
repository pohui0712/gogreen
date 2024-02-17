document.addEventListener("DOMContentLoaded", function () {
  var viewAccount = document.getElementById("view-account");
  var viewProgram = document.getElementById("view-program");
  var addProgram = document.getElementById("add-program");
  var joinedProgram = document.getElementById("joined-member");

  var accountTable = document.getElementById("account-table");
  var programTable = document.getElementById("program-table");
  var addingTable = document.getElementById("adding-table");
  var joinedTable = document.getElementById("joined-table");

  viewAccount.addEventListener("click", function () {
    accountTable.style.display = "block";
    programTable.style.display = "none";
    addingTable.style.display = "none";
    joinedTable.style.display = "none";
  });

  viewProgram.addEventListener("click", function () {
    accountTable.style.display = "none";
    programTable.style.display = "block";
    addingTable.style.display = "none";
    joinedTable.style.display = "none";
  });

  addProgram.addEventListener("click", function () {
    accountTable.style.display = "none";
    programTable.style.display = "none";
    addingTable.style.display = "block";
    joinedTable.style.display = "none";
  });

  joinedProgram.addEventListener("click", function () {
    accountTable.style.display = "none";
    programTable.style.display = "none";
    addingTable.style.display = "none";
    joinedTable.style.display = "block";
  });

  var urlParams = new URLSearchParams(window.location.search);
  var sortListValue = urlParams.get("sort-list");
  var showErr = urlParams.get("error");

  if (sortListValue) {
    accountTable.style.display = "none";
    programTable.style.display = "none";
    addingTable.style.display = "none";
    joinedTable.style.display = "block";
  }

  if (showErr) {
    accountTable.style.display = "none";
    programTable.style.display = "none";
    addingTable.style.display = "block";
    joinedTable.style.display = "none";
  }
});
