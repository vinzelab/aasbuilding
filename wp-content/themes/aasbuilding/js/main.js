$(document).ready(function(){
  //caroussel
  $('.carousel').carousel();

  //hamburger menu
  $('.hamburger-menu').click(function(){
    $('.hamburger-menu span').toggleClass('transform1');
    $('.collapse-menu').toggle();
  });

  // scroll effect
  $('a[href^="#"]').on('click',function (e) {
    e.preventDefault();

    var target = this.hash;
    var $target = $(target);

    $('html, body').stop().animate({
      'scrollTop': $target.offset().top
    }, 1000, 'swing', function () {
      window.location.hash = target;
    });
    $(".hamburger-menu span").css("background-color","#586aa5");
  });

  //scroll reveal

  // Changing the defaults
  window.sr = ScrollReveal({ reset: true });

  // Customizing a reveal set
  sr.reveal('#about,#map,#service,#contact', { duration: 1000 });

  //sticky header
  $(window).scroll(function(){
    if ($(window).scrollTop() >= 50) {
      $('.main-nav').addClass('fixed');
      $('.main-nav').removeClass('hide');
    }
    else {
      $('.main-nav').removeClass('fixed');
      $('.main-nav').addClass('hide');
    }
  });

  // change color of hamburger menu on scroll
  $(window).scroll(function(){
    if ($(window).scrollTop() <= 50) {
      $('.hamburger-menu span').css('background','white');
    }
    else {
      $('.hamburger-menu span').css('background','#586aa5');
    }
  });

});
