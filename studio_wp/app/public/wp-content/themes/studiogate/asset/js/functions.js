'use strict';

const windowHeight = window.innerHeight;
const livers = document.getElementById('characters');
const characters = Array.from(livers.children);

function fadeAnime(targets) {
  targets.forEach(target => {
    const targetHeight = target.getBoundingClientRect().top * 1.4;
    if (windowHeight > targetHeight) {
      if (window.innerWidth > 768) {
        target.classList.add('active');
      } else {
        target.classList.add('active_here');
      }
    }
  })
}

function randomIn() {
  let targetHeight = livers.getBoundingClientRect().top * 1.4;
  if (windowHeight > targetHeight) {
    let value = 0;
    while(characters.length > 0) {
      let randomNum = Math.floor(Math.random() * characters.length);
      characters[randomNum].classList.add('active');
      characters[randomNum].style.animationDelay = value + "s";
      value += 0.1;
      characters.splice(randomNum, 1);
    }
  }
}

function slideIn() {
  characters.forEach(target => {
    let targetHeight = target.getBoundingClientRect().top * 1.4;
    if (windowHeight >= targetHeight) {
        target.classList.add('active');
    }
  });
}