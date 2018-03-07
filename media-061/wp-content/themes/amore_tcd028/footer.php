<?php
$options = get_desing_plus_option();

  $category = get_category( get_query_var( 'cat' ) );
  $cat_id = $category->cat_ID;

  if( $cat_id ){
    $cat_id = $cat_id;
  } else {
    $cat_id = 'null';
  }

?>
<div class="feed_section">
<div class="container">
<?php 
	
  do_shortcode( '[sc_recommend_feed url="'.get_the_permalink().'"]');
 ?>
 </div>
 </div>
<div id="footer" style="background:#c81423">
  <div class="container" style="padding-bottom:10px; padding-top:10px;">
    <div class="row hidden-xs">
      <div class="col-xs-60 col-xs-offset-30 text-center">
        <?php if($options['footer_btn_headline']): ?>
        <div class="button button-green romaji"><a href="<?php echo $options['footer_btn_url']; ?>" style="padding: 10px 30px;"><?php echo $options['footer_btn_headline']; ?></a></div>
      <?php endif; ?>
      </div>
      <div class="col-xs-30 text-right">
        <?php if($options['facebook_url']): ?><a href="<?php echo $options['facebook_url']; ?>"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" class="social-icon"></a><?php endif; ?>
        <?php if($options['twitter_url']): ?><a href="<?php echo $options['twitter_url']; ?>"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" class="social-icon"></a><?php endif; ?>
        <div class="scrolltotop">
          <a href="#verytop">ページのトップへ</a>
        </div>
      </div>
    </div>

    <div class="row visible-xs">
      <div class="col-xs-120 text-center" style="margin-top:10px">
        <?php if($options['footer_btn_headline']): ?>
          <div class="button button-green romaji">
            <a style="width:100%" href="<?php echo $options['footer_btn_url']; ?>"><?php echo $options['footer_btn_headline']; ?></a>
            <span class="button-arrow fa fa-chevron-right" style="color:white"></span>
          </div>
        <?php endif; ?>
      </div>
      <div class="col-xs-120 text-center" style="margin-top:10px; margin-bottom:10px">
        <?php if($options['facebook_url']): ?><a href="<?php echo $options['facebook_url']; ?>"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" class="social-icon" style="margin-right:20px"></a><?php endif; ?>
        <?php if($options['twitter_url']): ?><a href="<?php echo $options['twitter_url']; ?>"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" class="social-icon" style="margin-right:20px"></a><?php endif; ?>
        <!-- <?php if($options['show_rss']): ?><a class="target_blank" href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/rss.png" class="social-icon" style="margin-right:20px"></a><?php endif; ?> -->
        <div class="scrolltotop">
          <a href="#verytop">ページのトップへ</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php if(is_mobile()){ ?>
  <?php if($options['mobile_ad_code3']||$options['mobile_ad_code3']) { ?>
  <div class="col-xs-120 mobile-fixed-banner">
    <?php
      if ($options['mobile_ad_code3']) {
       echo $options['mobile_ad_code3'];
      }else{
       echo '<a href="'; esc_attr_e( $options['mobile_ad_url3'] ); echo '" class="target_blank"><img src="'; esc_attr_e( $options['mobile_ad_image3'] ); echo '" alt="" title=""></a>';
      }; 
    ?>
  </div>
  <?php }; ?>
<?php }; ?>

<div class="hidden-xs" style="background:#fff">
  <div class="container amore-section" style="padding: 60px 0 50px;">
    <div class="row" style="color:white; width:740px; margin:0 auto;">
      <div class="col-xs-120 text-center romaji"><?php the_dp_footer_logo(); ?></div>
    </div>
    <?php
      $fm_count = 0;
      if(has_nav_menu('footer-menu-1')){$fm_count++;};
      if(has_nav_menu('footer-menu-2')){$fm_count++;};
      if(has_nav_menu('footer-menu-3')){$fm_count++;};
      if(has_nav_menu('footer-menu-4')){$fm_count++;};
    ?>
    <div class="row" style="color:white; width:<?php echo 180*$fm_count; ?>px; margin:0 auto;">

      <?php if(has_nav_menu('footer-menu-1')): ?>
      <div class="col-xs-<?php echo 120/$fm_count; ?> no-padding hidden-xs">
          <?php wp_nav_menu(
            array(
              'theme_location'    => 'footer-menu-1',
              'depth'             => 0,
              'container'         => 'div',
              'container_class'   => 'footer-menu collapse navbar-collapse',
              'menu_class'        => 'nav navbar-nav'
            )
          ); ?>
      </div>
      <?php endif; ?>
      <?php if(has_nav_menu('footer-menu-2')): ?>
      <div class="col-xs-<?php echo 120/$fm_count; ?> no-padding hidden-xs">
          <?php wp_nav_menu(
            array(
              'theme_location'    => 'footer-menu-2',
              'depth'             => 0,
              'container'         => 'div',
              'container_class'   => 'footer-menu collapse navbar-collapse',
              'menu_class'        => 'nav navbar-nav'
            )
          ); ?>
      </div>
      <?php endif; ?>
      <?php if(has_nav_menu('footer-menu-3')): ?>
      <div class="col-xs-<?php echo 120/$fm_count; ?> no-padding hidden-xs">
          <?php wp_nav_menu(
            array(
              'theme_location'    => 'footer-menu-3',
              'depth'             => 0,
              'container'         => 'div',
              'container_class'   => 'footer-menu collapse navbar-collapse',
              'menu_class'        => 'nav navbar-nav'
            )
          ); ?>
      </div>
      <?php endif; ?>
      <?php if(has_nav_menu('footer-menu-4')): ?>
      <div class="col-xs-<?php echo 120/$fm_count; ?> no-padding hidden-xs">
          <?php wp_nav_menu(
            array(
              'theme_location'    => 'footer-menu-4',
              'depth'             => 0,
              'container'         => 'div',
              'container_class'   => 'footer-menu collapse navbar-collapse',
              'menu_class'        => 'nav navbar-nav'
            )
          ); ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<div id="footer-copr" style="font-size:12px; background:#fff5f5;">
  <div class="container" style="padding-bottom:0px; padding:20px; color:#aaa;">
    <div class="row">
      <div class="col-sm-50 text-left hidden-xs">
        <?php if ($options['zipcode']) { ?><span class="footer-zipcode"><?php echo $options['zipcode']; ?></span><?php }; ?>
        <?php if ($options['map_address']) { ?><span class="footer-address"><?php echo $options['map_address']; ?></span><?php }; ?>
        <?php if ($options['phonenumber']) { ?><span class="footer-phone"><?php echo $options['phonenumber']; ?></span><?php }; ?>
      </div>
      <div class="col-sm-70 _3 text-right hidden-xs romaji">
        <span class="copyright"><?php _e('Copyright &copy;&nbsp; ', 'tcd-w'); ?><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> All Rights Reserved.</span>
      </div>
      <div class="col-sm-60 text-center visible-xs romaji">
        <span class="copyright"><?php _e('Copyright &copy;&nbsp; ', 'tcd-w'); ?><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> All Rights Reserved.</span>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

<script type="text/javascript">
    
    var canLoad = true

    function page_ajax_get(){
      var page = jQuery('.paged').last().attr('data-paged') || 2;
      var cat = <?php echo $cat_id; ?>;
      var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';

      canLoad = false

      jQuery.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {"action": "load-filter", cat: cat, paged:page },
        success: function(response) {
          if(response.length > 100){
            var id = page - 1;
            id.toString();
            jQuery("#infiniscroll").html(jQuery("#infiniscroll").html() + response);
          } else {
            jQuery("#pagerlink").html("最終ページ")
            jQuery("#pagerbutton").attr("disabled", "disabled")
          }

          setTimeout(function(){ canLoad = true }, 2000)
        }
      })
    }
    
  jQuery(document).ready(function(){

    jQuery("#site-cover").fadeOut('slow');

    var cat = null
    var currentSlide = -1

    var fixStuff = function(){
      jQuery(".heightaswidth").each(function(){
        jQuery(this).css('height', jQuery(this).outerWidth())
      })

/* ここ削除 */
    
      jQuery(".verticalcenter").each(function(){
        var center = (jQuery(this).parent().width() / 2) - parseInt(jQuery(this).parent().css('padding-top'))
        //var size = jQuery(this).outerHeight() / 2
        var size = 13;
        jQuery(this).css('padding-top', center - size + 20)
      })

      jQuery(".verticalcentersplash").each(function(){
        var center = jQuery(window).height() / 2
        var size = jQuery(this).outerHeight() / 2
        jQuery(this).css('padding-top', center - size)
      })
    }

    // var nextSlide = function(){
    //   currentSlide++
  
    //   if(jQuery("[data-order='" + currentSlide + "']").length == 0) currentSlide = 0

    //   jQuery('.parallax-mirror[data-order]').fadeOut("slow");
    //   jQuery("[data-order='" + currentSlide + "']").fadeIn("slow");
    // }

    //   jQuery('.parallax-mirror[data-order]').hide();


    var nextSlide = function(){      
      currentSlide++
  
      if(jQuery("[data-order='" + currentSlide + "']").length == 0) currentSlide = 0

      <?php if( !is_mobile() ) : ?>
      // if( $( window ).width() > 767 ){
        jQuery('.parallax-mirror[data-order]').fadeOut("slow");
      // } else {
      <?php else : ?>
        jQuery('.slider').fadeOut("slow");
        // jQuery('.parallax-mirror[data-order]').fadeOut("slow");
      <?php endif; ?>
      // }
      
      jQuery("[data-order='" + currentSlide + "']").fadeIn("slow");
    }

      <?php if( !is_mobile() ) : ?>
      // if( $( window ).width() > 767 ){
        jQuery('.parallax-mirror[data-order]').hide();
      // } else {
      <?php else : ?>
        jQuery('.slider').hide()
        // jQuery('.parallax-mirror[data-order]').hide();
      <?php endif; ?>
      // }


      fixStuff();
      nextSlide();

     setInterval(nextSlide, 5000);


     setInterval(function(){
      jQuery(".fade-me-in").first().fadeIn().removeClass('fade-me-in');
     }, 200)



     jQuery(window).resize(function() {
      fixStuff();
     });




    if (jQuery("#telephone").length && jQuery("#logo").length) {
      jQuery("#telephone").css('left', jQuery("#logo").width() + 30)
    }

    jQuery('#topcover').addClass('topcover-visible')

    jQuery("a[href*=#]:not([href=#])").click(function(){
      if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){
        var e=jQuery(this.hash);
        if(e=e.length?e:jQuery("[name="+this.hash.slice(1)+"]"),e.length)return jQuery("html,body").animate({scrollTop:e.offset().top},1e3),!1
      }
    })

    jQuery(".menu-item, .menu-item a").click(function(){ })

    jQuery(window).scroll(function(){
      var center = jQuery(window).height() - 300

/*

      if(jQuery(window).scrollTop() > jQuery("#footer").offset().top - jQuery(window).height() && canLoad){
        page_ajax_get();
      }
*/

      jQuery('.invisibletexteffect').each(function(){
        var percentFromCenter = Math.abs(( (jQuery(this).offset().top + jQuery(this).outerHeight() / 2 ) - jQuery(document).scrollTop()) - center) / center

        if(percentFromCenter < 1)
          jQuery(this).removeClass('offsetted')
      })


    })
  })

  <?php if(is_front_page()) : ?>
  
    google.maps.event.addDomListener(window, 'load', function(){
      var geocoder = new google.maps.Geocoder();

      <?php if($options['map_address_LatLng']): ?>
      var markerPos = new google.maps.LatLng(<?php echo $options['map_address_LatLng']; ?>);
      geocoder.geocode({'address':<?php if($options['map_address_LatLng']) { echo "'" . $options['map_address_LatLng'] . "'"; } else { echo "'大阪'"; } ?>}, function(results, status) {
      <?php else: ?>
      geocoder.geocode({'address':<?php if($options['map_address']) { echo "'" . $options['map_address'] . "'"; } else { echo "'大阪'"; } ?>}, function(results, status) {
      <?php endif; ?>
        if (status == google.maps.GeocoderStatus.OK){
          var mapOptions = {
            center: results[0].geometry.location,
            zoom: 18,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            <?php if(is_mobile()){ echo "draggable: false"; } ?>
          }

　        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions)
          var marker = new google.maps.Marker({
              map: map,
              <?php if($options['map_address_LatLng']): ?>
              position: markerPos
              <?php else: ?>
              position: results[0].geometry.location
              <?php endif; ?>
          })
        }

      })
    })
    
  <?php endif; ?>
</script>

 <?php if(is_single()) { ?>
 <!-- facebook share button code -->
 <div id="fb-root"></div>
 <script>
 (function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));
 </script>
 <?php }; ?>

 <script>

 	jQuery('body.page-id-99 .amore-inner-container .table_box table').wrapAll('<div class="table-responsive"></div>');

 </script>

</body>
</html>