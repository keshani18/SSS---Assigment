const imageSlides = document.querySelectorAll(".slider-images");
var i = 1;

function changeWelcomeText() {
  const welcomeTitle = document.querySelector(".welcome-title");

  switch (i) {
    case 1:
      welcomeTitle.innerHTML = "Welcome to Cyber Security Training and Awarness program";
      break;

    case 2:
      welcomeTitle.innerHTML = "Discover the latest tools, techniques, and best practices";
      break;

    case 3:
      welcomeTitle.innerHTML = "Stay one step ahead of cyber threats";
      break;

    default:
      console.log(i);
  }
}

function changeSlides() {
  if (i == imageSlides.length) {
    i = 1;
    imageSlides[imageSlides.length - 1].classList.remove("show-slide");
    imageSlides[i - 1].classList.add("show-slide");
  } else {
    imageSlides[i - 1].classList.remove("show-slide");
    imageSlides[i].classList.add("show-slide");

    i++;
  }

  changeWelcomeText();
}

setInterval(changeSlides, 10000);

function showContenetonScroll() {
  const elementsToShow = document.querySelectorAll(".scroll-anim-divs");

  elementsToShow.forEach((e) => {
    const lengthToElement = e.getBoundingClientRect().top;
    const windowHeight = window.innerHeight / 2;

    if (lengthToElement < windowHeight) {
      e.classList.add("scroll-show");
    }
  });
}

window.addEventListener("scroll", showContenetonScroll);

function displayCopyYear() {
  const copyrightsYear = document.querySelector(".copy-year");

  const date = new Date();
  const year = date.getFullYear();

  copyrightsYear.innerHTML = year;
}

displayCopyYear();
