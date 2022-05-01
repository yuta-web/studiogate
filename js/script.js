'use strict';

// スムーズスクロール
{ 
  const ssItems = document.querySelectorAll('a[href^="#"]');

  ssItems.forEach(function(ssItem) {
    ssItem.addEventListener('click', (e) => {
      e.preventDefault();

      let href =ssItem.getAttribute('href');
      let target = document.getElementById(href.replace('#', ''));
      const header = document.querySelector('header').offsetHeight;
      const elem = target.getBoundingClientRect().top;
      const offset  = window.pageYOffset;
      const position = elem + offset - header;
      
      window.scrollTo({
        top: position,
        behavior: "smooth",
      });
    });
  });
}

// ハンバーガーメニュー
{
  const clickItems = [
    document.getElementById("ham_menu"),
    document.getElementById("header"),
    document.getElementById("mask"),
  ];

  clickItems.forEach(function(item) {
    item.addEventListener('click', () =>{
      clickItems.forEach(function(item) {
        item.classList.toggle('active');
      });
      const ham = Array.from(clickItems[0].children);
      ham.forEach(hamItem => {
        hamItem.classList.toggle('active');
      })
    });
  });
}

// livers
{
  const livers = document.getElementById('characters');
  const characters = Array.from(livers.children);

  function randomIn() {
    let value = 0;
    while(characters.length > 0) {
      let randomNum = Math.floor(Math.random() * characters.length);
      characters[randomNum].classList.add('active');
      characters[randomNum].style.animationDelay = value + "s";
      value += 0.3;
      characters.splice(randomNum, 1);
    }
  }

  let wh = window.innerHeight / 1.5;
  console.log(wh);
  window.addEventListener('scroll', () => {
    if (window.innerWidth < 768) {
      characters.forEach(character => {
        let charaTop = character.getBoundingClientRect().top;
        console.log(charaTop);
        if (wh >= charaTop) {
          // if (window.innerWidth < 768) {
            character.classList.add('active');
          // }
        }
      });
    } else {
      let liversTop = livers.getBoundingClientRect().top;
      let winHeight = window.innerHeight / 3;
      if (winHeight > liversTop) {
        randomIn();
      }
    }
  })

  // window.addEventListener('scroll', () => {
  //   let winHeight = window.innerHeight / 3;
  //   if (winHeight > liversTop) {
  //     if (window.innerWidth > 768) {
  //       randomIn();
  //     }
  //   }
  // });
}

// about
{
  function fadeIn() {
    const targets = document.querySelectorAll('.p-about__detail');
    const windouHeight = window.innerHeight / 4 * 3;
    targets.forEach(target => {
      let targetTop = target.getBoundingClientRect().top;
      if(targetTop < windouHeight) {
        if (window.innerWidth < 768) {
          target.classList.add('active_here');
        } else {
          target.classList.add('active');
        }
      }
    });
  }

  window.addEventListener('scroll', () => {
    fadeIn();
  });
}

// service
{
  const services = document.querySelectorAll('.p-service__box');
  const winHei = window.innerHeight / 4 * 3;

  window.addEventListener('scroll', () => {
    services.forEach(service => {
      const serviceTop = service.getBoundingClientRect().top;
      if (winHei > serviceTop) {
        if (window.innerWidth < 768) {
          service.classList.add('active_here');
        } else {
          service.classList.add('active');
        }
      }
    });
  });
}

// voice
{
  const voices = document.querySelectorAll('.p-voice__area');
  const wh = window.innerHeight / 4 * 3;

  window.addEventListener('scroll', () => {
    voices.forEach(voice => {
      const voiceTop = voice.getBoundingClientRect().top;
      if (wh > voiceTop) {
        voice.classList.add('active');
      }
    })
  }); 
}
