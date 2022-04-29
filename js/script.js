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

{
  const characters = Array.from(document.getElementById('characters').children);
  const target = document.getElementById('livers');
  const targetTop = target.getBoundingClientRect().top;
  let find = false;
  window.addEventListener('scroll', () => {
    const offset = window.pageYOffset;
    if (targetTop < offset) {
      find = true;
      if (find) {
        const num = Math.floor(Math.random() * characters.length);
        characters[num].classList.add('active');
      } 
    }
  });
}