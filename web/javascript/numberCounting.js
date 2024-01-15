function numberCounting() {
  let values = document.querySelectorAll(".num");
  let interval = 1000;

  values.forEach((value) => {
    let startValue = 0;
    let endValue = parseInt(value.getAttribute("data-value"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function () {
      startValue += 1;
      value.textContent = `${startValue}k`;
      if (startValue === endValue) {
        clearInterval(counter);
      }
    }, duration);
  });
}

var runFunction = false;

function myFunction() {
  var divFromTop = document.querySelector(".wrapper").offsetTop;
  var pageHeight = window.innerHeight;

  if (
    !runFunction &&
    (document.body.scrollTop > divFromTop - pageHeight ||
      document.documentElement.scrollTop > divFromTop - pageHeight)
  ) {
    numberCounting();
    runFunction = true;
  }
}

window.onscroll = function () {
  myFunction();
};
