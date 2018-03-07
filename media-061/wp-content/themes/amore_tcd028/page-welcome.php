<?php /* Template Name: Welcome Screen */ ?>

<?php
$options = get_desing_plus_option();
get_header(); ?>

<div id="site-cover"></div>
<section>
  <div class="slider heightasviewport has-background" data-order='0' data-parallax="scroll" data-image-src="<?php echo $options['slider_image1']; ?>"></div>
  <div class="slider heightasviewport has-background" data-order='1' data-parallax="scroll" data-image-src="<?php echo $options['slider_image2']; ?>"></div>
  <div class="slider heightasviewport has-background" data-order='2' data-parallax="scroll" data-image-src="<?php echo $options['slider_image3']; ?>"></div>

  <div id="topcover" class="topcover heightasviewport">
    <div class="text-center verticalcentersplash amore-welcome-center">
      <?php if($options['first_auto_br']): ?>
      <h2 class="first-h1"><?php echo nl2br($options['h1_text']); ?></h2>
      <?php else: ?>
      <h2 class="first-h1"><?php echo $options['h1_text']; ?></h2>
      <?php endif; ?>
    </div>
  </div>

  <div class="topcover heightasviewport" style="opacity:1;-ms-transform:translate(0px,0px);-webkit-transform:translate(0px,0px);transform:translate(0px,0px);"></div>

  <div id="top" class="heightasviewport" style="opacity:1; background:transparent">
    <a href="#third" class="animate"><div class="down-arrow bounce"><span class="fa fa-angle-down"></span></div></a>
  </div>
</section>

<!--お知らせ-->
<section>
  <div id="top_news" class="container">
  <div class="amore-section">
  <div class="clearfix"><h2>お知らせ</h2>
  <?php if(!wp_is_mobile()) { ?><a class="btn" href="http://www.seito-info.jp/archives/category/information" target="_blank">お知らせ一覧をみる</a><?php } ?></div>
  <?php echo do_shortcode('[sc_news_feed limit="4"]');?>
  <?php if(wp_is_mobile()) { ?><a class="btn" href="http://www.seito-info.jp/archives/category/information" target="_blank">お知らせ一覧をみる</a><?php } ?></div></div>
</section>

<section class="bg_g">
  <div id="fifth" class="container bnr_contents">
    <div class="row">
      <div class="col-xs-120 no-padding">

            <div class="row amore-section">
              <?php for ($i=1; $i <=3 ; $i++): ?>
                <?php if($options['fifth_banner_image'.$i]): ?>
              <div class="banner <?php if($i > 1) echo "col-sm-offset-3"; ?>">

                <a href="<?php echo $options['fifth_banner_url'.$i]; ?>"<?php if($options['fifth_banner_target'.$i]){echo ' target="_blank"';}; ?>>
                  <img src="<?php echo $options['fifth_banner_image'.$i]; ?>">
                </a>
              </div>
                <?php endif; ?>
              <?php endfor; ?>
            </div>

      </div>
    </div>
  </div>
</section>

<section>
  <div id="second">
     <div class="text-center amore-welcome-top">
       <div class="second-lead mb40">
        <?php if($options['bg_image1']): ?>
        <img src="<?php echo $options['bg_image1']; ?>" alt="<?php echo $options['second_leadcopy']; ?>" title="<?php echo $options['second_leadcopy']; ?>">
        <?php else: ?>
          <?php if($options['second_leadcopy']): ?>
        <h2><?php echo $options['second_leadcopy']; ?></h2>
          <?php endif; ?>
        <?php endif; ?>
       </div>
       <?php if($options['second_auto_br']): ?>
       <p class="second-body"><?php echo nl2br($options['sbc_text']); ?></p>
       <?php else: ?>
       <p class="second-body"><?php echo $options['sbc_text']; ?></p>
       <?php endif; ?>
       <?php if($options['bg_image8']): ?>
       <p class="second-img"><img src="<?php echo $options['bg_image8']; ?>" alt=""></p>
       <?php endif; ?>
     </div>
  </div>
</section>

<section>
  <div class="amore-divider romaji" data-parallax="scroll" data-speed="0.6" data-image-src="<?php echo $options['bg_image2']; ?>">
    <div class="container">
      <div class="row">
        <div class="col-xs-120 no-padding">
          <h2 class="invisibletexteffect animate offsetted top-headline third_headline"><?php echo $options['third_headline'];?></h2>
        </div>
      </div>
    </div>
  </div>

  <div id="third" class="container">
    <div class="row">
      <div class="col-xs-120 no-padding">
        <div class="row amore-section">
          <?php for($i=1; $i<=3; $i++): ?>
            <?php if ($options['third_banner_image'.$i]): ?>
          <div class="col-sm-40 text-center">
            <div style="background-image:url(<?php echo $options['third_banner_image'.$i]; ?>); width:70%" class="img-circle square-80 heightaswidth mb20 circle-banner">
              <a class="no-decoration" href="<?php echo $options['third_banner_url'.$i]; ?>"<?php if($options['third_banner_target'.$i]){echo ' target="_blank"';}; ?>><div class="cover text-center">
                <h3 class="verticalcenter"><?php echo $options['third_banner_headline'.$i]; ?></h3>
              </div></a>
            </div>
            <h4 class="text-center third-banner-headline mb20"><?php echo $options['third_banner_headline'.$i]; ?></h4>
            <p class="text-justify third-banner-body"><?php echo $options['third_banner_copy'.$i]; ?></p>
            <div class="button romaji"><a href="<?php echo $options['third_banner_url'.$i]; ?>"<?php if($options['third_banner_target'.$i]){echo ' target="_blank"';}; ?>>READ MORE</a></div>
            <div class="visible-xs mb40"></div>
          </div>
            <?php endif; ?>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="amore-divider romaji" data-parallax="scroll" data-speed="0.6" data-image-src="<?php echo $options['bg_image3']; ?>">
    <div class="container">
      <div class="row">
        <div class="col-xs-120 no-padding">
          <h2 class="invisibletexteffect animate offsetted top-headline fourth_headline"><?php echo $options['fourth_headline'];?></h2>
        </div>
      </div>
    </div>
  </div>

  <div id="fourth" class="container">
    <div class="row">
      <div class="col-xs-120 no-padding amore-section">
        <h3 class="lead romaji top-headline2 mb50"><?php echo $options['fourth_headline2'];?></h3>
        <div class="row">
         <?php echo do_shortcode('[sc_event_feed limit="4"]');?>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="amore-divider romaji" data-parallax="scroll" data-speed="0.6" data-image-src="<?php echo $options['bg_image4']; ?>">
    <div class="container">
      <div class="row">
        <div class="col-xs-120 no-padding">
          <h2 class="invisibletexteffect animate offsetted top-headline fifth_headline"><?php echo $options['fifth_headline'];?></h2>
        </div>
      </div>
    </div>
  </div>

  <div id="fifth" class="container">
    <div class="row feed_section">
      <div class="col-xs-120 no-padding amore-section">
           <div class="row" style="padding-right:15px">
           <?php echo do_shortcode('[sc_blog01_feed limit="3"]');?>
           </div>
      </div>
    </div>
  </div>
</section>

<section class="bg_g">
  <div id="fifth" class="container bnr_contents">
    <div class="row">
      <div class="col-xs-120 no-padding">

            <div class="row amore-section">
              <?php for ($i=1; $i <=3 ; $i++): ?>
                <?php if($options['fifth_banner_image'.$i]): ?>
              <div class="banner <?php if($i > 1) echo "col-sm-offset-3"; ?>">

                <a href="<?php echo $options['fifth_banner_url'.$i]; ?>"<?php if($options['fifth_banner_target'.$i]){echo ' target="_blank"';}; ?>>
                  <img src="<?php echo $options['fifth_banner_image'.$i]; ?>">
                </a>
              </div>
                <?php endif; ?>
              <?php endfor; ?>
            </div>

      </div>
    </div>
  </div>
</section>


<section>
  <div id="sixth" class="has-background" style="background-image:url(<?php echo $options['bg_image5']; ?>)">
    <div class="container" style="overflow-x:hidden">
      <div class="row amore-section">

        <div class="col-xs-120 no-padding-mobile">
          <div class="row map-wrap-dark">

            <div class="<?php if($options['show_map']){ echo "col-sm-60"; } else { echo "col-sm-120"; } ?> no-left-padding no-padding-mobile" style="line-height:30px;">
              <?php if($options['sixth_auto_br']): ?>
                <?php echo nl2br($options['sixth_text']); ?>
              <?php else: ?>
                <?php echo $options['sixth_text']; ?>
              <?php endif; ?>
            </div>

            <?php if($options['show_map']) : ?>
              <div class="visible-xs mb40"></div>
              <div class="col-sm-60 no-right-padding no-padding-mobile">
                <div id="map-canvas" style="width:100%; height:480px; border:4px solid white; border-radius:2px;"></div>
              </div>
            <?php endif; ?>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>

</div>

<script>
 jQuery('.heightasviewport').css('height', jQuery(window).height())
</script>

<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>