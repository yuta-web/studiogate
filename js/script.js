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

// contact
// {
//   const blinkingImg =  document.querySelector('.p-contact__btn__area > img');

//   window.addEventListener('load', () => {
    
//   });
// }