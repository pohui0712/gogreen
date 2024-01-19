function numberCounting() {
  let values = document.querySelectorAll(".num");
  let interval = 100;

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

function myFunction() {
  let runFunction = false;
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
