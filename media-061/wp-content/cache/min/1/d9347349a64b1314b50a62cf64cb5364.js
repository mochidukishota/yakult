!function(t,i,e,s){function o(i,e){headerHeight=jQuery('#header').outerHeight();var h=this;"object"==typeof e&&(delete e.refresh,delete e.render,t.extend(this,e)),this.$element=t(i),!this.imageSrc&&this.$element.is("img")&&(this.imageSrc=this.$element.attr("src"));var r=(this.position+"").toLowerCase().match(/\S+/g)||[];if(r.length<1&&r.push("center"),1==r.length&&r.push(r[0]),"top"!=r[0]&&"bottom"!=r[0]&&"left"!=r[1]&&"right"!=r[1]||(r=[r[1],r[0]]),this.positionX!=s&&(r[0]=this.positionX.toLowerCase()),this.positionY!=s&&(r[1]=this.positionY.toLowerCase()),h.positionX=r[0],h.positionY=r[1],"left"!=this.positionX&&"right"!=this.positionX&&(isNaN(parseInt(this.positionX))?this.positionX="center":this.positionX=parseInt(this.positionX)),"top"!=this.positionY&&"bottom"!=this.positionY&&(isNaN(parseInt(this.positionY))?this.positionY="center":this.positionY=parseInt(this.positionY)),this.position=this.positionX+(isNaN(this.positionX)?"":"px")+" "+this.positionY+(isNaN(this.positionY)?"":"px"),navigator.userAgent.match(/(iPod|iPhone|iPad)/))return this.imageSrc&&this.iosFix&&!this.$element.is("img")&&this.$element.css({backgroundImage:"url("+this.imageSrc+")",backgroundSize:"cover",backgroundPosition:this.position}),this;if(navigator.userAgent.match(/(Android)/))return this.imageSrc&&this.androidFix&&!this.$element.is("img")&&this.$element.css({backgroundImage:"url("+this.imageSrc+")",backgroundSize:"cover",backgroundPosition:this.position}),this;this.$mirror=t("<div />").prependTo("body");var a=this.$element.find(">.parallax-slider"),n=!1;0==a.length?this.$slider=t("<img />").prependTo(this.$mirror):(this.$slider=a.prependTo(this.$mirror),n=!0),this.$mirror.addClass("parallax-mirror").css({visibility:"hidden",zIndex:this.zIndex,position:"fixed",top:headerHeight,left:0,overflow:"hidden"}).attr("data-order",this.$element.attr("data-order")),this.$slider.addClass("parallax-slider").one("load",function(){h.naturalHeight&&h.naturalWidth||(h.naturalHeight=this.naturalHeight||this.height||1,h.naturalWidth=this.naturalWidth||this.width||1),h.aspectRatio=h.naturalWidth/h.naturalHeight,o.isSetup||o.setup(),o.sliders.push(h),o.isFresh=!1,o.requestRender();}),n||(this.$slider[0].src=this.imageSrc),(this.naturalHeight&&this.naturalWidth||this.$slider[0].complete||a.length>0)&&this.$slider.trigger("load");}
function h(s){return this.each(function(){var h=t(this),r="object"==typeof s&&s;this==i||this==e||h.is("body")?o.configure(r):h.data("px.parallax")?"object"==typeof s&&t.extend(h.data("px.parallax"),r):(r=t.extend({},h.data(),r),h.data("px.parallax",new o(this,r))),"string"==typeof s&&("destroy"==s?o.destroy(this):o[s]());});}
!function(){for(var t=0,e=["ms","moz","webkit","o"],s=0;s<e.length&&!i.requestAnimationFrame;++s)i.requestAnimationFrame=i[e[s]+"RequestAnimationFrame"],i.cancelAnimationFrame=i[e[s]+"CancelAnimationFrame"]||i[e[s]+"CancelRequestAnimationFrame"];i.requestAnimationFrame||(i.requestAnimationFrame=function(e){var s=new Date().getTime(),o=Math.max(0,16-(s-t)),h=i.setTimeout(function(){e(s+o);},o);return t=s+o,h;}),i.cancelAnimationFrame||(i.cancelAnimationFrame=function(t){clearTimeout(t);});}(),t.extend(o.prototype,{speed:.2,bleed:0,zIndex:-100,iosFix:!0,androidFix:!0,position:"center",overScrollFix:!1,refresh:function(){this.boxWidth=this.$element.outerWidth(),this.boxHeight=this.$element.outerHeight()+2*this.bleed,this.boxOffsetTop=this.$element.offset().top-this.bleed,this.boxOffsetLeft=this.$element.offset().left,this.boxOffsetBottom=this.boxOffsetTop+this.boxHeight;var t=o.winHeight,i=o.docHeight,e=Math.min(this.boxOffsetTop,i-t),s=Math.max(this.boxOffsetTop+this.boxHeight-t,0),h=this.boxHeight+(e-s)*(1-this.speed)|0,r=(this.boxOffsetTop-e)*(1-this.speed)|0;if(h*this.aspectRatio>=this.boxWidth){this.imageWidth=h*this.aspectRatio|0,this.imageHeight=h,this.offsetBaseTop=r;a=this.imageWidth-this.boxWidth;"left"==this.positionX?this.offsetLeft=0:"right"==this.positionX?this.offsetLeft=-a:isNaN(this.positionX)?this.offsetLeft=-a/2|0:this.offsetLeft=Math.max(this.positionX,-a);}else{this.imageWidth=this.boxWidth,this.imageHeight=this.boxWidth/this.aspectRatio|0,this.offsetLeft=0;var a=this.imageHeight-h;"top"==this.positionY?this.offsetBaseTop=r:"bottom"==this.positionY?this.offsetBaseTop=r-a:isNaN(this.positionY)?this.offsetBaseTop=r-a/2|0:this.offsetBaseTop=r+Math.max(this.positionY,-a);}},render:function(){var t=o.scrollTop,i=o.scrollLeft,e=this.overScrollFix?o.overScroll:0,s=t+o.winHeight;this.boxOffsetBottom>t&&this.boxOffsetTop<=s?(this.visibility="visible",this.mirrorTop=this.boxOffsetTop-t,this.mirrorLeft=this.boxOffsetLeft-i,this.offsetTop=this.offsetBaseTop-this.mirrorTop*(1-this.speed)):this.visibility="hidden",this.$mirror.css({transform:"translate3d(0px, 0px, 0px)",visibility:this.visibility,top:this.mirrorTop-e,left:this.mirrorLeft,height:this.boxHeight,width:this.boxWidth}),this.$slider.css({transform:"translate3d(0px, 0px, 0px)",position:"absolute",top:this.offsetTop,left:this.offsetLeft,height:this.imageHeight,width:this.imageWidth,maxWidth:"none"});}}),t.extend(o,{scrollTop:0,scrollLeft:0,winHeight:0,winWidth:0,docHeight:1<<30,docWidth:1<<30,sliders:[],isReady:!1,isFresh:!1,isBusy:!1,setup:function(){if(!this.isReady){var t=jQuery(e),s=jQuery(i),h=function(){o.winHeight=s.height(),o.winWidth=s.width(),o.docHeight=t.height(),o.docWidth=t.width();},r=function(){var t=s.scrollTop(),i=o.docHeight-o.winHeight,e=o.docWidth-o.winWidth;o.scrollTop=Math.max(0,Math.min(i,t)),o.scrollLeft=Math.max(0,Math.min(e,s.scrollLeft())),o.overScroll=Math.max(t-i,Math.min(t,0));};s.on("resize.px.parallax load.px.parallax",function(){h(),o.isFresh=!1,o.requestRender();}).on("scroll.px.parallax load.px.parallax",function(){r(),o.requestRender();}),h(),r(),jQuery(i).load(function(){setInterval(function(){h(),o.isFresh=!1,o.requestRender();},300);}),this.isReady=!0;}},configure:function(i){"object"==typeof i&&(delete i.refresh,delete i.render,t.extend(this.prototype,i));},refresh:function(){t.each(this.sliders,function(){this.refresh();}),this.isFresh=!0;},render:function(){this.isFresh||this.refresh(),t.each(this.sliders,function(){this.render();});},requestRender:function(){var t=this;this.isBusy||(this.isBusy=!0,i.requestAnimationFrame(function(){t.render(),t.isBusy=!1;}));},destroy:function(e){var s,h=t(e).data("px.parallax");for(h.$mirror.remove(),s=0;s<this.sliders.length;s+=1)this.sliders[s]==h&&this.sliders.splice(s,1);t(e).data("px.parallax",!1),0===this.sliders.length&&(t(i).off("scroll.px.parallax resize.px.parallax load.px.parallax"),this.isReady=!1,o.isSetup=!1);}});var r=t.fn.parallax;t.fn.parallax=h,t.fn.parallax.Constructor=o,t.fn.parallax.noConflict=function(){return t.fn.parallax=r,this;},t(e).on("ready.px.parallax.data-api",function(){t('[data-parallax="scroll"]').parallax();});}(jQuery,window,document);;jQuery(document).ready(function($){$(".navbar-toggle").click(function(){if($(".navbar-collapse").hasClass("in")){return $("body").removeClass("no-scroll");}else{return $("body").addClass("no-scroll");}});$(".parent_category > a").on('click',function(){if($(this).hasClass("active")){$(this).removeClass("active");$(this).next().hide();return false;}else{$(this).addClass("active");$(this).next().show();return false;};});$("a").bind("focus",function(){if(this.blur)this.blur();});$("a.target_blank").attr("target","_blank");$(".styled_post_list1 > li:last-child").addClass("last");$('.footer_widget:nth-child(3n)').addClass('right_widget');$('#global_menu > ul > li:nth-child(9)').addClass('hide_menu');$('#global_menu > ul > li:nth-child(10)').addClass('hide_menu');$('#global_menu > ul > li:nth-child(11)').addClass('hide_menu');$('#global_menu > ul > li:nth-child(12)').addClass('hide_menu');jQuery.easing.easeOutExpo=function(x,t,b,c,d){return(t==d)?b+c:c*(-Math.pow(2,-10*t/d)+1)+b;};var topBtn=$('#return_top');topBtn.hide();$(window).scroll(function(){if($(this).scrollTop()>100){topBtn.fadeIn();}else{topBtn.fadeOut();}});topBtn.click(function(){$('body,html').animate({scrollTop:0},1000,'easeOutExpo');return false;});$("#comment_area ol > li:even").addClass("even_comment");$("#comment_area ol > li:odd").addClass("odd_comment");$(".even_comment > .children > li").addClass("even_comment_children");$(".odd_comment > .children > li").addClass("odd_comment_children");$(".even_comment_children > .children > li").addClass("odd_comment_children");$(".odd_comment_children > .children > li").addClass("even_comment_children");$(".even_comment_children > .children > li").addClass("odd_comment_children");$(".odd_comment_children > .children > li").addClass("even_comment_children");$("#trackback_switch").click(function(){$("#comment_switch").removeClass("comment_switch_active");$(this).addClass("comment_switch_active");$("#comment_area").animate({opacity:'hide'},0);$("#trackback_area").animate({opacity:'show'},1000);return false;});$("#comment_switch").click(function(){$("#trackback_switch").removeClass("comment_switch_active");$(this).addClass("comment_switch_active");$("#trackback_area").animate({opacity:'hide'},0);$("#comment_area").animate({opacity:'show'},1000);return false;});$("#index_post_list_tab a").click(function(){$("#index_post_list_tab a").removeClass('active');$(this).addClass("active");return false;});$("#index_post_list_tab > li:first-child a").addClass("active");var index_post_list1=$('#index_post_list1');var index_post_list2=$('#index_post_list2');var index_post_list3=$('#index_post_list3');var index_post_list_button1=$('#index_post_list_button1 a');var index_post_list_button2=$('#index_post_list_button2 a');var index_post_list_button3=$('#index_post_list_button3 a');$('.index_post_list').hide();$('#index_post_list_wrap .index_post_list:first-child').show();index_post_list_button1.click(function(){index_post_list1.show();index_post_list2.hide();index_post_list3.hide();});index_post_list_button2.click(function(){index_post_list2.show();index_post_list1.hide();index_post_list3.hide();});index_post_list_button3.click(function(){index_post_list3.show();index_post_list1.hide();index_post_list2.hide();});function mediaQueryClass(width){if(width>641){$("html").removeClass("mobile");$("html").addClass("pc");$(".menu_button").css("display","none");$("#global_menu").show();$("#global_menu ul ul").hide();$("#global_menu li").hover(function(){$(">ul:not(:animated)",this).slideDown("fast");},function(){$(">ul",this).slideUp("fast");});}else{$("html").removeClass("pc");$("html").addClass("mobile");$("#global_menu li").off('hover');$("#global_menu ul ul").show();$(".menu_button").css("display","block");$('.menu_button').off('click');if($(".menu_button").hasClass("active")){$(".menu_button").removeClass("active")};$(".menu_button").on('click',function(){if($(this).hasClass("active")){$(this).removeClass("active");$('#global_menu').hide();return false;}else{$(this).addClass("active");$('#global_menu').show();return false;};});};};function viewport(){var e=window,a='inner';if(!('innerWidth'in window)){a='client';e=document.documentElement||document.body;}
return{width:e[a+'Width'],height:e[a+'Height']};}
var ww=viewport().width;var timer=false;mediaQueryClass(ww);$(window).bind("resize orientationchange",function(){if(timer!==false){clearTimeout(timer);}
timer=setTimeout(function(){var ww=viewport().width;mediaQueryClass(ww);},200);})});;if(window.addEventListener)
{window.addEventListener("load",syncerTelephoneLink,false);}
else
{window.attachEvent("onload",syncerTelephoneLink);}
function syncerTelephoneLink()
{var width=window.innerWidth;if(width>=640){return false;}
var elms=document.getElementsByClassName("syncer-tel");for(var i=0,l=elms.length;l>i;i++)
{var elm=elms[i];var number=elm.getAttribute("data-number");number=number.replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){return String.fromCharCode(s.charCodeAt(0)-0xFEE0);});number=number.replace(/ー|‐|－|―|₋|—/g,"-")
number=number.replace(/-/g,"")
if(number!=null)
{if(elm.tagName=="A")
{elm.href="tel:"+number;}
else
{var text=elm.innerHTML;elm.innerHTML='<a href="tel:'+number+'">'+text+'</a>';}}}};