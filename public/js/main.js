/*global $, jQuery, alert*/
$(document).ready(function() {

  'use strict';

  // ========================================================================= //
  //  //SMOOTH SCROLL
  // ========================================================================= //


  $(document).on("scroll", onScroll);

  $('a[href^="#"]').on('click', function(e) {
    e.preventDefault();
    $(document).off("scroll");

    $('a').each(function() {
      $(this).removeClass('active');
      if ($(window).width() < 768) {
        $('.nav-menu').slideUp();
      }
    });

    $(this).addClass('active');

    var target = this.hash,
        menu = target;

    target = $(target);
    $('html, body').stop().animate({
      'scrollTop': target.offset().top - 80
    }, 500, 'swing', function() {
      window.location.hash = target.selector;
      $(document).on("scroll", onScroll);
    });
  });


  function onScroll(event) {
    if ($('.home').length) {
      var scrollPos = $(document).scrollTop();
      $('nav ul li a').each(function() {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
      });
    }
  }

  // ========================================================================= //
  //  //NAVBAR SHOW - HIDE
  // ========================================================================= //


  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll > 200 ) {
      $("#main-nav, #main-nav-subpage").slideDown(700);
      $("#main-nav-subpage").removeClass('subpage-nav');
    } else {
      $("#main-nav").slideUp(700);
      $("#main-nav-subpage").hide();
      $("#main-nav-subpage").addClass('subpage-nav');
    }
  });

  // ========================================================================= //
  //  // RESPONSIVE MENU
  // ========================================================================= //

  $('.responsive').on('click', function(e) {
    $('.nav-menu').slideToggle();
  });

  // ========================================================================= //
  //  Typed Js
  // ========================================================================= //

  var typed = $(".typed");

  $(function() {
    typed.typed({
      strings: ["Oluwatosin Akinfolarin.", "An Author.", "A Developer.", "A Chess Player."],
      typeSpeed: 100,
      loop: true,
    });
  });


  // ========================================================================= //
  //  Owl Carousel Services
  // ========================================================================= //


  $('.services-carousel').owlCarousel({
      autoplay: true,
      loop: true,
      margin: 20,
      dots: true,
      nav: false,
      responsiveClass: true,
      responsive: { 0: { items: 1 }, 768: { items: 2 }, 900: { items: 4 } }
    });


  // ========================================================================= //
  //  Porfolio isotope and filter
  // ========================================================================= //


  var portfolioIsotope = $('.portfolio-container').isotope({
    itemSelector: '.portfolio-thumbnail',
    layoutMode: 'fitRows'
  });

  $('#portfolio-flters li').on( 'click', function() {
    $("#portfolio-flters li").removeClass('filter-active');
    $(this).addClass('filter-active');

    portfolioIsotope.isotope({ filter: $(this).data('filter') });
  });


  // ========================================================================= //
  //  magnificPopup
  // ========================================================================= //

  var magnifPopup = function() {
    $('.popup-img').magnificPopup({
      type: 'image',
      removalDelay: 300,
      mainClass: 'mfp-with-zoom',
      gallery: {
        enabled: true
      },
      zoom: {
        enabled: true, // By default it's false, so don't forget to enable it

        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function

        // The "opener" function should return the element from which popup will be zoomed in
        // and to which popup will be scaled down
        // By defailt it looks for an image tag:
        opener: function(openerElement) {
          // openerElement is the element on which popup was initialized, in this case its <a> tag
          // you don't need to add "opener" option if this code matches your needs, it's defailt one.
          return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
      }
    });
  };


  // Call the functions
  magnifPopup();


});


 //METHOD 2
 //REPLY
function displayReply(id){
  $("#id"+id).hide();
    $("#"+id).fadeIn();
 }


 function sendReply(id){
    var body = $("#body"+id).val();
    var comment_id = id;
    $("#"+id).hide();
    $("#id"+id).fadeIn();
    console.log(body);
    console.log(comment_id);

    //send to route
   $.ajax({
      url: "/replies.reply/"+comment_id+"/"+body,
      type: "GET",
      dataType:'html',
          success:function(data){
            location.reload();
             console.log(data);
          },
          error:function(error){
              console.log(error);
          }
  });
 }

 function abort(id){
   $("#"+id).hide();
   $("#id"+id).fadeIn(1000);
 }

function comment(id){
  var content = $("#commentable").val();
  var comment = {post_id:id,body:content};
  console.log(comment);
   $.ajax({
    url: "/commentable",
    type: "post",
   data:comment,
   headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
   dataType: "application/json",
      success:function(data){
      console.log(data);
      refresh();
      },
      error:function(error){
        console.log(error);
      }
  });
}

function refresh(){
  location.reload();
}

function sendReply(id){
  var content = $("#body"+id).val();
  var reply = {comment_id:id,body:content};

  $("#"+id).hide();
  $("#id"+id).fadeIn();

  console.log(reply);
  $.ajax({
    url: "/repliable",
    type: "post",
   data:reply,
   headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
   dataType: "application/json",
      success:function(data){
      console.log(data);
      refresh();
      },
      error:function(error){
        console.log(error);
      }
  });
}