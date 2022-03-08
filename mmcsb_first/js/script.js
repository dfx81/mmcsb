console.log(`
  - CREDITS -
  Project Manager: Irfan Zulkifli (https://panzer-kun.github.io)
  Artist: Adam Amir (https://www.instagram.com/adamamir_/)
  Developer: Danial Fitri (https://dfx-81.web.app)
  `);

let fade;

const load = () => {
  document.querySelector(".cover").classList.add("fade");
  fade = document.querySelectorAll(".fade-on-view");

  animate();
};

const animate = () => {
  window.requestAnimationFrame(animate);
  
  fade.forEach(function (element) {
    if (inView(element)) {
      element.classList.add('is-visible');
    }
  });
}

const inView = (item) => {
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
};

window.onload = load;