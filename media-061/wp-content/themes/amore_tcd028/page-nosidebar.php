<?php /* Template Name: Page no sidebar */ ?>

<?php

get_header('no-sidebar'); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php
    $thumbnail_id = get_post_thumbnail_id();
    $eye_img = wp_get_attachment_image_src($thumbnail_id, 'full');
  ?>
  <div class="amore-divider romaji" data-parallax="scroll" data-image-src="<?php echo $eye_img[0]; ?>">
    <div class="container">
      <div class="row">
        <div class="col-xs-120 no-padding">
          <h2 class="top-headline" style="margin-top: 50px; margin-bottom: -20px;"><?php the_title(); ?></h2>
        </div>
      </div>
    </div>
  </div>

  <div class="container amore-inner-container">
    <div class="row">
      <div class="col-xs-120 no-padding single-page">
          <?php if($options['show_bread']) : ?>
            <header class="breadcrumb mb20">
              <a href="<?php echo home_url('/'); ?>"><span>トップページ</span></a>
              <span class="fa fa-chevron-right text-muted" style="font-size:10px">&nbsp;</span>
              <span><?php the_title(); ?></span>
            </header><!-- .entry-header -->
          <?php endif; ?>

          <?php if (get_field('r_bnr01')) { ?>
          <div id="fifth" class="container bnr_contents">
    <div class="row">
      <div class="col-xs-120 no-padding">
                <div class="banner ">
                <a href="<?php the_field('r_link01'); ?>" target="_blank">
                  <img src="<?php $image = get_field('r_bnr01'); echo $image['sizes']['large']; ?>" />
                </a>
              </div>
               <div class="banner col-sm-offset-3">

                <a href="<?php the_field('r_link02'); ?>" target="_blank">
                  <img src="<?php $image = get_field('r_bnr02'); echo $image['sizes']['large']; ?>" />
                </a>
              </div>
      </div>
    </div>
  </div><?php } ?>

          <div class="row article"><?php the_content(); ?></div>
      </div>
    </div>
  </div>
<?php endwhile; ?>

<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>