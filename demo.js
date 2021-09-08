let c = document.getElementById("canvas");
let wrapper = document.getElementById("wrapper");
c.width = window.innerWidth;
c.height = window.innerHeight;
let ctx = c.getContext("2d");
let curPts = -100;
let lastPts = -100;

let gridSize = c.width > c.height ? 7 : 5;
gridSize = c.width / gridSize;

wrapper.addEventListener("mousemove", (evt) => {
  clear();
  x = evt.clientX || evt.pageX;
  y = evt.clientY || evt.pageY;

  gridpts = grid(x, y)

  lastPts = curPts;
  curPts = gridpts;

  ctx.fillStyle = "#ffffff30";
  ctx.fillRect(gridpts.x + 2, gridpts.y + 2, gridSize - 4, gridSize - 4);

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

let ang = 0

let loop = () => {
  //todo
};

//window.requestAnimationFrame(loop);