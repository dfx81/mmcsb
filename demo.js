let c = document.getElementById("canvas");
let content = document.getElementById("content");
let header = document.getElementById("header");
let footer = document.getElementById("footer");
c.width = window.innerWidth;
c.height = window.innerHeight;
let ctx = c.getContext("2d");

let curPts = -100;
let lastPts = -100;

let gridSize = c.width > c.height ? 7 : 5;
gridSize = c.width / gridSize;

content.addEventListener("mousemove", (evt) => {
  clear();
  x = evt.clientX || evt.pageX;
  y = evt.clientY || evt.pageY;

  gridpts = grid(x, y)

  lastPts = curPts;
  curPts = gridpts;

  ctx.fillStyle = "#ffffff30";
  ctx.fillRect(gridpts.x + 2, gridpts.y + 2, gridSize - 4, gridSize - 4);
});
header.addEventListener("mousemove", (evt) => {
  clear();
  x = evt.clientX || evt.pageX;
  y = evt.clientY || evt.pageY;

  gridpts = grid(x, y)

  lastPts = curPts;
  curPts = gridpts;

  ctx.fillStyle = "#ffffff30";
  ctx.fillRect(gridpts.x + 2, gridpts.y + 2, gridSize - 4, gridSize - 4);
});
footer.addEventListener("mousemove", (evt) => {
  clear();
  x = evt.clientX || evt.pageX;
  y = evt.clientY || evt.pageY;

  gridpts = grid(x, y)

  lastPts = curPts;
  curPts = gridpts;

  ctx.fillStyle = "#ffffff30";
  ctx.fillRect(gridpts.x + 2, gridpts.y + 2, gridSize - 4, gridSize - 4);
});

function clear() {
  ctx.clearRect(0, 0, c.width, c.height);
}

let grid = (x, y) => {
  let gridx = Math.floor(x / gridSize) * gridSize;
  let gridy = Math.floor(y / gridSize) * gridSize;

  return {x: gridx, y: gridy};
}

let loop = () => {
  window.requestAnimationFrame(loop);
};

window.requestAnimationFrame(loop);