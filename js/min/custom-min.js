!function($){"use strict";$(document).ready(function(){$(".commentlist li").addClass("panel panel-default"),$(".comment-reply-link").addClass("btn btn-default"),$("select, input[type=text], input[type=email], input[type=password], textarea").addClass("form-control"),$("input[type=submit]").addClass("btn btn-primary")})}(jQuery),jQuery(document).ready(function($){$(".ed-datepicker input.form-control").focus(function(){$(".sbOptions").css("display","none")}),$(".ed-datepicker").datepicker({format:"dd/mm/yyyy",autoclose:!0,orientation:"top auto",todayBtn:"linked",todayHighlight:!0}),$(".dropdown").hover(function(){$(this).addClass("open")},function(){$(this).removeClass("open")}),jQuery(".fullscreenbanner").revolution({delay:5e3,startwidth:1170,startheight:745,fullWidth:"on",fullScreen:"off",hideCaptionAtLimit:"",dottedOverlay:"twoxtwo",navigationStyle:"preview4",fullScreenOffsetContainer:"",hideTimerBar:"on"});var a=$(".changeHeader .navbar-fixed-top");$(window).scroll(function(){var e=$(window).scrollTop();e>=1&&$(".navbar-default").hasClass("navbar-main")?a.addClass("lightHeader"):$(".navbar-default").hasClass("static-light")?a.addClass("lightHeader"):a.removeClass("lightHeader")}),$(".select-drop").selectbox(),$(".datepicker").datepicker({startDate:"dateToday",autoclose:!0}),$(document).ready(function($){$(".counter").counterUp({delay:10,time:2e3})}),jQuery(document).ready(function(){var a=20,e=300;$("#price-range").slider({range:!0,min:a,max:e,values:[a,e],slide:function(a,e){$("#price-amount-1").val("$"+e.values[0]),$("#price-amount-2").val("$"+e.values[1])}}),$("#price-amount-1").val("$"+$("#price-range").slider("values",0)),$("#price-amount-2").val("$"+$("#price-range").slider("values",1))});var e=$(".singlePackage .panel-heading i.fa");$(".singlePackage .panel-heading").click(function(){e.removeClass("fa-minus").addClass("fa-plus"),$(this).find("i.fa").removeClass("fa-plus").addClass("fa-minus")});var i=$(".accordionWrappar .panel-heading i.fa");$(".accordionWrappar .panel-heading").click(function(){i.removeClass("fa-minus").addClass("fa-plus"),$(this).find("i.fa").removeClass("fa-plus").addClass("fa-minus")});var n=$(".solidBgTitle .panel-heading i.fa");$(".solidBgTitle .panel-heading").click(function(){n.removeClass("fa-minus").addClass("fa-plus"),$(this).find("i.fa").removeClass("fa-plus").addClass("fa-minus")});var l=$(".accordionSolidTitle .panel-heading i.fa");$(".accordionSolidTitle .panel-heading").click(function(){l.removeClass("fa-arrow-circle-up").addClass("fa-arrow-circle-down"),$(this).find("i.fa").removeClass("fa-arrow-circle-down").addClass("fa-arrow-circle-up")});var o=$(".accordionSolidBar .panel-heading i.fa");$(".accordionSolidBar .panel-heading").click(function(){o.removeClass("fa-chevron-circle-up").addClass("fa-chevron-circle-down"),$(this).find("i.fa").removeClass("fa-chevron-circle-down").addClass("fa-chevron-circle-up")}),$(document).ready(function(){$(".accordionWrappar .panel-collapse, .accordionSolidTitle .panel-collapse, .accordionSolidBar .panel-collapse").on("show.bs.collapse",function(){$(this).siblings(".panel-heading").addClass("active"),$(this).addClass("active")}),$(".accordionWrappar .panel-collapse, .accordionSolidTitle .panel-collapse, .accordionSolidBar .panel-collapse").on("hide.bs.collapse",function(){$(this).siblings(".panel-heading").removeClass("active"),$(this).removeClass("active")})})});