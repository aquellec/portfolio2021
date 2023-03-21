filterSelection("tous");

function filterSelection(filterName) {
  document.querySelectorAll(".work").forEach((e) => e.classList.remove("show"));

  let divToShow = null;

  if (filterName != "tous") {
    divToShow = document.querySelectorAll(`.${filterName}`);
    document.querySelectorAll(".filter")[0].classList.remove("active");
  } else {
    divToShow = document.querySelectorAll(".work");
  }

  divToShow.forEach((element) => {
    element.classList.add("show");
  });
}

const toggle = document.querySelector("#toggle");
const menu = document.querySelector("#header-menu");
let toggleClasses = toggle.classList;
let menuClasses = menu.classList;

toggle.addEventListener("click", function () {
  toggleClasses.toggle("active");
  menuClasses.toggle("active");
});

window.scrollTo(0, 0);

const registerVideo = () => {
  bound = document.querySelector(".scroll-bound");
  content = document.querySelector(".content");

  video = document.querySelector("video");
  const scrollVideo = () => {
    const rawPercentScrolled =
      -bound.getBoundingClientRect().top / (bound.scrollHeight / 2);
    const percentScrolled = Math.min(Math.max(rawPercentScrolled, 0), 1);

    video.currentTime = video.duration * percentScrolled;

    requestAnimationFrame(scrollVideo);
  };
  requestAnimationFrame(scrollVideo);
};

registerVideo();
