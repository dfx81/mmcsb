let canvas = document.querySelector("canvas");
let body = document.querySelector("body");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
let ctx = canvas.getContext("2d");
let fadeElms = document.querySelectorAll(".fade-on-view");

body.addEventListener("mousemove", cursor);
body.addEventListener("touchmove", cursor);
body.addEventListener("touchend", cursorReset);
body.addEventListener("mouseleave", cursorReset);

window.onresize = resize;

let point = {
  x: -100,
  y: -100
};

function cursor(evt) {
  clear();

  point.x = (evt.type == "mousemove") ? evt.pageX : evt.touches[0].pageX;
  point.y = (evt.type == "mousemove") ? evt.pageY : evt.touches[0].pageY;
}

function cursorReset() {
  point.x = -100;
  point.y = -100;
}

function resize() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
}

function clear() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
}

function animate() {
  window.requestAnimationFrame(animate);
  clear();

  ctx.strokeStyle = "rgba(255, 255, 255, 1)";

  ctx.beginPath();
  ctx.arc(point.x, point.y, 16, 0, 2 * Math.PI);
  ctx.stroke();

  ctx.fillStyle = "rgba(255, 255, 255, 1)";
  ctx.beginPath();
  ctx.arc(point.x, point.y, 2, 0, 2 * Math.PI);
  ctx.fill();

  ctx.strokeStyle = "rgba(0, 0, 0, 1)";

  ctx.beginPath();
  ctx.arc(point.x, point.y, 15, 0, 2 * Math.PI);
  ctx.stroke();

  ctx.fillStyle = "rgba(0, 0, 0, 1)";
  ctx.beginPath();
  ctx.arc(point.x, point.y, 1, 0, 2 * Math.PI);
  ctx.fill();

  fadeElms.forEach(function (element) {
    if (inView(element)) {
      element.classList.add('is-visible');
    }
  });
}

animate();

function inView(item) {
  let rect = item.getBoundingClientRect();

  return (
    (rect.top <= 0
      && rect.bottom >= 0)
    ||
    (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.top <= (window.innerHeight || document.documentElement.clientHeight))
    ||
    (rect.top >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
  );
}