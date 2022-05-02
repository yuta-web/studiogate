'use strict';
// スムーズスクロール
{
  if ($(window).width() > 768) {
    $(function(){
      $('.slider1').slick({
        autoplay: true, // 自動でスクロール
        autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
        speed: 5000, // スライドが流れる速度を設定
        cssEase: "linear", // スライドの流れ方を等速に設定
        slidesToShow: 2, // 表示するスライドの数
        swipe: false, // 操作による切り替えはさせない
        arrows:  true, // 矢印非表示
        pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
        vertical: true,
        pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
        responsive: [
          {
            breakpoint: 750,
            settings: {
              slidesToShow: 2, // 画面幅750px以下でスライド3枚表示
            }
          }
        ]
      });
      $('.slider2').slick({
        autoplay: true, // 自動でスクロール
        autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
        speed: 5000, // スライドが流れる速度を設定
        cssEase: "linear", // スライドの流れ方を等速に設定
        slidesToShow: 2, // 表示するスライドの数
        swipe: false, // 操作による切り替えはさせない
        arrows:  true, // 矢印非表示
        rtl: true,
        vertical: true,
        pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
        pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
        responsive: [
          {
            breakpoint: 750,
            settings: {
              slidesToShow: 2, // 画面幅750px以下でスライド3枚表示
            }
          }
        ]
      });
    });
  } else {
    $(function(){
      $('.slider1').slick({
        autoplay: true, // 自動でスクロール
        autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
        speed: 5000, // スライドが流れる速度を設定
        cssEase: "linear", // スライドの流れ方を等速に設定
        slidesToShow: 2, // 表示するスライドの数
        swipe: false, // 操作による切り替えはさせない
        arrows:  true, // 矢印非表示
        pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
        pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
        responsive: [
          {
            breakpoint: 750,
            settings: {
              slidesToShow: 2, // 画面幅750px以下でスライド3枚表示
            }
          }
        ]
      });
      $('.slider2').slick({
        autoplay: true, // 自動でスクロール
        autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
        speed: 5000, // スライドが流れる速度を設定
        cssEase: "linear", // スライドの流れ方を等速に設定
        slidesToShow: 2, // 表示するスライドの数
        swipe: false, // 操作による切り替えはさせない
        arrows:  true, // 矢印非表示
        rtl: true,
        pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
        pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
        responsive: [
          {
            breakpoint: 750,
            settings: {
              slidesToShow: 2, // 画面幅750px以下でスライド3枚表示
            }
          }
        ]
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

// スクロールアニメーション
{
  const about = document.querySelectorAll('.p-about__detail');
  const services = document.querySelectorAll('.p-service__box');
  const voices = document.querySelectorAll('.p-voice__area');
  // const livers = document.getElementById('characters');

  window.addEventListener('scroll', () => {
    fadeAnime(about);
    fadeAnime(services);
    fadeAnime(voices);
    if (window.innerWidth > 768) {
      randomIn();
    } else {
      slideIn();
    }
  });
}