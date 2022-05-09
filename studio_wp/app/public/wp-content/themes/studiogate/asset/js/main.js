'use strict';
// スムーズスクロール
{
  if ($(window).width() <= 768) {
    $(function(){
      $('.slider1').slick({
        autoplay: true, // 自動でスクロール
        autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
        speed: 5000, // スライドが流れる速度を設定
        cssEase: "linear", // スライドの流れ方を等速に設定
        slidesToShow: 3, // 表示するスライドの数
        swipe: false, // 操作による切り替えはさせない
        arrows: true, // 矢印非表示
        pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
        pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
      });
      $('.slider2').slick({
        autoplay: true, // 自動でスクロール
        autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
        speed: 5000, // スライドが流れる速度を設定
        cssEase: "linear", // スライドの流れ方を等速に設定
        slidesToShow: 3, // 表示するスライドの数
        swipe: false, // 操作による切り替えはさせない
        arrows: true, // 矢印非表示
        rtl: true,
        pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
        pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
      });
    });
  } else  {
    $(function(){
      $('.slider1').slick({
        autoplay: true, // 自動でスクロール
        autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
        speed: 5000, // スライドが流れる速度を設定
        cssEase: "linear", // スライドの流れ方を等速に設定
        slidesToShow: 2.5, // 表示するスライドの数
        swipe: false, // 操作による切り替えはさせない
        arrows:  true, // 矢印非表示
        pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
        vertical: true,
        pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
      });
      $('.slider2').slick({
        autoplay: true, // 自動でスクロール
        autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
        speed: 5000, // スライドが流れる速度を設定
        cssEase: "linear", // スライドの流れ方を等速に設定
        slidesToShow: 2.5, // 表示するスライドの数
        swipe: false, // 操作による切り替えはさせない
        arrows:  true, // 矢印非表示
        pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
        vertical: true,
        pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
      });
    });
  }
}

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
    document.getElementById('ham_menu'),
    document.getElementById('header'),
    document.getElementById('mask')
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

// スクロールアニメーション
{
  const animation = document.querySelectorAll('.js-animation');

  window.addEventListener('scroll', () => {
    fadeAnime(animation);
    if (window.innerWidth > 768) {
      randomIn();
    } else {
      slideIn();
    }
  });
}

const windowHeight = window.innerHeight;
const livers = document.getElementById('js-characters');
const characters = Array.from(livers.children);
const range = 1.4;

function fadeAnime(targets) {
  targets.forEach(target => {
    const targetHeight = target.getBoundingClientRect().top * range;
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
  let targetHeight = livers.getBoundingClientRect().top * range;
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
    let targetHeight = target.getBoundingClientRect().top * range;
    if (windowHeight >= targetHeight) {
        target.classList.add('active');
    }
  });
}