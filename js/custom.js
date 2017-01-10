(function ($) {
  
  "use strict";

  $(document).ready(function() {

    // Comments
    $(".commentlist li").addClass("panel panel-default");
    $(".comment-reply-link").addClass("btn btn-default");
  
    // Forms
    $('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
    $('input[type=submit]').addClass('btn btn-primary');
    
    // You can put your own code in here

  });

}(jQuery));

jQuery(document).ready(function( $ ) {
//============================== ALL DROPDOWN ON HOVER =========================
  $('.dropdown').hover(function() {
    $(this).addClass('open');
  },
  function() {
    $(this).removeClass('open');
  });

//============================== Rs-Slider =========================
  jQuery('.fullscreenbanner').revolution({
   delay: 1,
   startwidth: 1170,
   startheight: 700,
   fullWidth: "on",
   fullScreen: "off",
   hideCaptionAtLimit: "",
   dottedOverlay: "twoxtwo",
   navigationType:"none",
   navigationStyle: "preview4",
   fullScreenOffsetContainer: "",
   hideTimerBar:"on"
  });

//============================== CHANGE HEADER ON MOUSE SCROLL =========================
  var header = $(".changeHeader .navbar-fixed-top");
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    
    if ((scroll >= 1) && ($(".navbar-default").hasClass("navbar-main")))
    {
      header.addClass("lightHeader");
    }
    else if ($(".navbar-default").hasClass("static-light"))
    {
      header.addClass("lightHeader");
    }  
    else {
      header.removeClass("lightHeader");
    }

  });

//============================== COUNTER-UP =========================
  // $(document).ready(function ($) {
  //   $('.counter').counterUp({
  //     delay: 10,
  //     time: 2000
  //   });
  // });

//============================== ACCORDION OR COLLAPSE ICON CHANGE =========================
  
  var allIcons = $(".singlePackage .panel-heading i.fa");
  $('.singlePackage .panel-heading').click(function(){
   allIcons.removeClass('fa-minus').addClass('fa-plus');
   $(this).find('i.fa').removeClass('fa-plus').addClass('fa-minus');
  });

  var allIconsOne = $(".accordionWrappar .panel-heading i.fa");
  $('.accordionWrappar .panel-heading').click(function(){
   allIconsOne.removeClass('fa-minus').addClass('fa-plus');
   $(this).find('i.fa').removeClass('fa-plus').addClass('fa-minus');
  });

  var allIconsExtra = $(".solidBgTitle .panel-heading i.fa");
  $('.solidBgTitle .panel-heading').click(function(){
   allIconsExtra.removeClass('fa-minus').addClass('fa-plus');
   $(this).find('i.fa').removeClass('fa-plus').addClass('fa-minus');
  });

  var allIconsTwo = $(".accordionSolidTitle .panel-heading i.fa");
  $('.accordionSolidTitle .panel-heading').click(function(){
   allIconsTwo.removeClass('fa-arrow-circle-up').addClass('fa-arrow-circle-down');
   $(this).find('i.fa').removeClass('fa-arrow-circle-down').addClass('fa-arrow-circle-up');
  });

  var allIconsThree = $(".accordionSolidBar .panel-heading i.fa");
  $('.accordionSolidBar .panel-heading').click(function(){
    allIconsThree.removeClass('fa-chevron-circle-up').addClass('fa-chevron-circle-down');
    $(this).find('i.fa').removeClass('fa-chevron-circle-down').addClass('fa-chevron-circle-up');
  });

//============================== SELECT OPEN ACCORDION ITEM TITLE ========================= 
  $(document).ready(function() {
    $('.accordionWrappar .panel-collapse, .accordionSolidTitle .panel-collapse, .accordionSolidBar .panel-collapse').on('show.bs.collapse', function () {
      $(this).siblings('.panel-heading').addClass('active');
      $(this).addClass('active');
    });

    $('.accordionWrappar .panel-collapse, .accordionSolidTitle .panel-collapse, .accordionSolidBar .panel-collapse').on('hide.bs.collapse', function () {
      $(this).siblings('.panel-heading').removeClass('active');
      $(this).removeClass('active');
    });
  });

});
