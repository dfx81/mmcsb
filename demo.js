let c = document.getElementById("canvas");
let body = document.getElementById("body");
let wrapper = document.getElementById("wrapper");
let overlay = document.getElementById("overlay");
let slides = document.getElementsByClassName("slides");
let slidePg = document.getElementsByClassName("slide-pg");
c.width = window.innerWidth;
c.height = window.innerHeight;
let scale = Math.max(c.width / overlay.width, c.height / overlay.height);
console.log(overlay.width + " : " + overlay.height);
//overlay.width = window.innerWidth;
//overlay.height = window.innerHeight;
//console.log(overlay.width + " : " + overlay.height);
let ctx = c.getContext("2d");
let loaded = false;
let curSlide = 0;

slides[curSlide].style.visibility = "visible";
slides[curSlide].style.opacity = "1";
slidePg[curSlide].src = "./res/fill.png"
//slides[curSlide].style.position = "relative";

let gridSize = c.width > c.height ? 7 : 5;
gridSize = c.width / gridSize;

overlay.addEventListener("load", (evt) => {
  loaded = true;
});

window.addEventListener("resize", (evt) => {
  c.width = window.innerWidth;
  c.height = window.innerHeight;
  gridSize = c.width > c.height ? 7 : 5;
  gridSize = c.width / gridSize;
  scale = Math.max(c.width / overlay.width, c.height / overlay.height);
});

body.addEventListener("mousemove", (evt) => {
  clear();
  x = evt.clientX || evt.pageX;
  y = evt.clientY || evt.pageY;

  gridpts = grid(x, y)

  ctx.globalCompositeOperation = "source-over";

  //ctx.fillStyle = "#ffffff30";
  //ctx.fillRect(gridpts.x + 2, gridpts.y + 2, gridSize - 4, gridSize - 4);

  let grdRad = ctx.createRadialGradient(x, y, gridSize / 4, x, y, gridSize / 2);

  grdRad.addColorStop(0, "rgba(247, 247, 247, 1)");
  grdRad.addColorStop(1, "rgba(247, 247, 247, 0)");
  ctx.fillStyle = grdRad;
  ctx.fillRect(x - gridSize / 2, y - gridSize / 2, gridSize, gridSize);

  ctx.globalCompositeOperation = "source-in";

  ctx.drawImage(overlay, (c.width / 2) - (overlay.width / 2) * scale,
    (c.height / 2) - (overlay.height / 2) * scale,
    overlay.width * scale, overlay.height * scale);

  let ang = x / window.innerWidth - 0.5;
  ang = ang * 5;
  wrapper.style.transform = "rotate3d(0, 1, 0, " + ang + "deg)";
});

wrapper.addEventListener("mouseleave", (evt) => {
  wrapper.style.transform = "none";
  clear();
});

function clear() {
  ctx.clearRect(0, 0, c.width, c.height);
}

let grid = (x, y) => {
  let gridx = Math.floor(x / gridSize) * gridSize;
  let gridy = Math.floor(y / gridSize) * gridSize;

  return {x: gridx, y: gridy};
}

let frames = 0;

let loop = () => {
  frames++;

  if (frames >= 500) {
    frames -= 500;
    slides[curSlide].style.visibility = "hidden";
    slides[curSlide].style.opacity = "0";
    //slides[curSlide].style.position = "absolute";
    slidePg[curSlide].src = "./res/empty.png"
    curSlide = ++curSlide >= slides.length ? 0 : curSlide;
    slides[curSlide].style.visibility = "visible";
    slides[curSlide].style.opacity = "1";
    slidePg[curSlide].src = "./res/fill.png"
    //slides[curSlide].style.position = "relative";
  }

  window.requestAnimationFrame(loop);
};

function changeSlide(dir) {
  frames = 0;
  slides[curSlide].style.visibility = "hidden";
  slides[curSlide].style.opacity = "0";
  slidePg[curSlide].src = "./res/empty.png"
  curSlide += dir;
  if (curSlide >= slides.length) curSlide = 0;
  else if (curSlide < 0) curSlide = slides.length - 1;
  slides[curSlide].style.visibility = "visible";
  slides[curSlide].style.opacity = "1";
  slidePg[curSlide].src = "./res/fill.png"
}

window.requestAnimationFrame(loop);