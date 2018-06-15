document.addEventListener("DOMContentLoaded", () => {

  // stars
  const stars = document.querySelectorAll('.starParent');
  stars.forEach((star) => {
    let s = new Star(star);
  });

  // menu
  const burger = document.querySelector('.navbar-burger');
  const navMenu = document.querySelector('.navbar-menu');
  burger.addEventListener('click', () => {
    burger.classList.toggle('clicked');
    navMenu.classList.toggle('clicked');
  });

  // pagination
  const projectsPagination = document.querySelectorAll('.projectsPag');
  const loader = document.querySelector('#projectsLoader');
  const cols = document.querySelector('#projects .columns');
  projectsPagination.forEach((proj, i) => {
    proj.addEventListener('click', e => {
      e.preventDefault();

      loader.children[1].innerHTML = `Loading Page ${i+1}`;
      // hide projects
      cols.classList.add("hidden");
      loader.style.display = "block";
      projectsPagination.forEach(link => link.classList.remove('is-current'));
      proj.classList.add('is-current');

      // do ajax here
    })
  });
  // switch
  const projectsSwitch = document.querySelector("#projectsSwitch input");
  projectsSwitch.addEventListener('click', e => {
    let currentSwitch = projectsSwitch.checked ? "Packages" : "Projects";
    cols.classList.add("hidden");
    loader.children[1].innerHTML = `Loading ${currentSwitch}`;
    loader.style.display = "block";
  });

  // navbar links
  const navLinks = document.querySelectorAll('.navbar-end .navbar-item');
  // set current link's class to active
  navLinks.forEach(link => {
    link.addEventListener('click', e => {
      // remove all link's active class
      e.preventDefault();
      document.querySelector(e.target.hash).scrollIntoView({
        behavior: 'smooth'
      });
      navLinks.forEach(link => link.classList.remove('active'));
      // set this link to be active
      e.target.classList.add('active');
    });

    link.href === window.location.href ? link.classList.add('active') : null;
  });
});




function randrange(x, y = 0, float = 0) {
  if (y === 0) {
    return float ? Math.random() * x : parseInt(Math.random() * x);
  } else {
    return float ? Math.random() * (y - x) + x : parseInt(Math.random() * (y - x) + x);
  }
}

class Star {
  // nuo virsaus iki 100vh
  constructor(star) {
    this.star = star;
    this.w = star.children[0].naturalWidth;
    this.h = star.children[0].naturalHeight;
    this.reset();
  }
  reset() {
    this.star.style = "";
    this.set('top', -this.h, 1);
    this.set('opacity', 1);
    this.set('width', 0.1 * document.body.clientWidth, 1);
    this.left = this.w + randrange(document.body.clientWidth * 0.5, document.body.clientWidth * 1.5, 1);
    this.set('left', this.left, 1);
    this.delay = randrange(.5, 2, 1);
    this.speed = randrange(8, 15, 1);
    this.animate();
  }
  set(prop, val, px = 0) {
    px === 1 ? val += "px" : null;
    this.star.style[prop] = val;
  }
  animate() {
    AniX.to(this.star, this.speed, {
      delay: this.delay,
      y: this.left + document.body.clientWidth * 0.1,
      x: -this.left - document.body.clientWidth * 0.1,
      opacity: 0,
      ease: AniX.ease.easeIn,
      onComplete: () => this.reset()
    })
  }
}

function genStarPos(star, last) {
  let w = star.children[0].naturalWidth;
  let h = star.children[0].naturalHeight;
  let starPosX = document.body.clientWidth + w;
  let starPosY = -1 * parseInt(Math.random() * 500 + h + last);
  console.log(starPosX, starPosY);

  star.style.width = parseInt(Math.random() * 100 + 100) + "px";
  star.style.display = "block";
  star.style.top = starPosY + "px";
  star.style.left = starPosX + "px";

  window.setTimeout(() => star.classList.toggle('active'), 100);
  return last;
}