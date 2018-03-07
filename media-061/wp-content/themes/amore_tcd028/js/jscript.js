jQuery(document).ready(function($){
  $(".navbar-toggle").click(function() {
    if ($(".navbar-collapse").hasClass("in")) {
         return $("body").removeClass("no-scroll");
     } else {
         return $("body").addClass("no-scroll");
     }
   });
  
   $(".parent_category > a").on('click',function() {
     if($(this).hasClass("active")) {
       $(this).removeClass("active");
       $(this).next().hide();
       return false;
     } else {
       $(this).addClass("active");
       $(this).next().show();
       return false;
     };
   });

  $("a").bind("focus",function(){if(this.blur)this.blur();});
  $("a.target_blank").attr("target","_blank");

  $(".styled_post_list1 > li:last-child").addClass("last");
  $('.footer_widget:nth-child(3n)').addClass('right_widget');
  $('#global_menu > ul > li:nth-child(9)').addClass('hide_menu');
  $('#global_menu > ul > li:nth-child(10)').addClass('hide_menu');
  $('#global_menu > ul > li:nth-child(11)').addClass('hide_menu');
  $('#global_menu > ul > li:nth-child(12)').addClass('hide_menu');

  jQuery.easing.easeOutExpo = function (x, t, b, c, d) {
   return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
  };

	var topBtn = $('#return_top');	
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
  topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 1000, 'easeOutExpo');
		return false;
  });

  $("#comment_area ol > li:even").addClass("even_comment");
  $("#comment_area ol > li:odd").addClass("odd_comment");
  $(".even_comment > .children > li").addClass("even_comment_children");
  $(".odd_comment > .children > li").addClass("odd_comment_children");
  $(".even_comment_children > .children > li").addClass("odd_comment_children");
  $(".odd_comment_children > .children > li").addClass("even_comment_children");
  $(".even_comment_children > .children > li").addClass("odd_comment_children");
  $(".odd_comment_children > .children > li").addClass("even_comment_children");

  $("#trackback_switch").click(function(){
    $("#comment_switch").removeClass("comment_switch_active");
    $(this).addClass("comment_switch_active");
    $("#comment_area").animate({opacity: 'hide'}, 0);
    $("#trackback_area").animate({opacity: 'show'}, 1000);
    return false;
  });

  $("#comment_switch").click(function(){
    $("#trackback_switch").removeClass("comment_switch_active");
    $(this).addClass("comment_switch_active");
    $("#trackback_area").animate({opacity: 'hide'}, 0);
    $("#comment_area").animate({opacity: 'show'}, 1000);
    return false;
  });


  $("#index_post_list_tab a").click(function() {
    $("#index_post_list_tab a").removeClass('active');
    $(this).addClass("active");
    return false;
  });

  $("#index_post_list_tab > li:first-child a").addClass("active");

   var index_post_list1 = $('#index_post_list1');
   var index_post_list2 = $('#index_post_list2');
   var index_post_list3 = $('#index_post_list3');

   var index_post_list_button1 = $('#index_post_list_button1 a');
   var index_post_list_button2 = $('#index_post_list_button2 a');
   var index_post_list_button3 = $('#index_post_list_button3 a');

   $('.index_post_list').hide();
   $('#index_post_list_wrap .index_post_list:first-child').show();

   index_post_list_button1.click(function () {
      index_post_list1.show();
      index_post_list2.hide();
      index_post_list3.hide();
   });

   index_post_list_button2.click(function () {
      index_post_list2.show();
      index_post_list1.hide();
      index_post_list3.hide();
   });

   index_post_list_button3.click(function () {
      index_post_list3.show();
      index_post_list1.hide();
      index_post_list2.hide();
   });

function mediaQueryClass(width) {

 if (width > 641) { //PC

   $("html").removeClass("mobile");
   $("html").addClass("pc");

   $(".menu_button").css("display","none");
   $("#global_menu").show();
   $("#global_menu ul ul").hide();

   $("#global_menu li").hover(function(){
     $(">ul:not(:animated)",this).slideDown("fast");
   }, function(){
     $(">ul",this).slideUp("fast");
   });

 } else { //ÉXÉ}Éz

   $("html").removeClass("pc");
   $("html").addClass("mobile");

   $("#global_menu li").off('hover');
   $("#global_menu ul ul").show();

   $(".menu_button").css("display", "block");

   $('.menu_button').off('click');

   if($(".menu_button").hasClass("active")) {
     $(".menu_button").removeClass("active")
   };

   $(".menu_button").on('click',function() {
     if($(this).hasClass("active")) {
       $(this).removeClass("active");
       $('#global_menu').hide();
       return false;
     } else {
       $(this).addClass("active");
       $('#global_menu').show();
       return false;
     };
   });

 };
};

function viewport() {
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
}

var ww = viewport().width;
var timer = false;

mediaQueryClass(ww);

$(window).bind("resize orientationchange", function() {

  if (timer !== false) {
    clearTimeout(timer);
  }
  timer = setTimeout(function() {
    var ww = viewport().width;
    mediaQueryClass(ww);
  }, 200);

})

});