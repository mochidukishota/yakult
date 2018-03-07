<?php /* Template Name: 一覧ページ */ ?>

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
          <!--ここからテンプレ-->
          <div class="list_bnr">
          <?php if (get_field('box01_img')) { ?>
          <a href="<?php the_field('box01_link'); ?>" target="_blank"><img src="<?php $image = get_field('box01_img'); echo $image['sizes']['large']; ?>" alt="" /></a>
          <?php } ?>

          <?php if (get_field('box02_img')) { ?>
          <a href="<?php the_field('box02_link'); ?>" target="_blank"><img src="<?php $image = get_field('box02_img'); echo $image['sizes']['large']; ?>" alt="" /></a>
          <?php } ?>

          <?php if (get_field('box03_img')) { ?>
          <a href="<?php the_field('box03_link'); ?>" target="_blank"><img src="<?php $image = get_field('box03_img'); echo $image['sizes']['large']; ?>" alt="" /></a>
          <?php } ?>

          <?php if (get_field('box04_img')) { ?>
          <a href="<?php the_field('box04_link'); ?>" target="_blank"><img src="<?php $image = get_field('box04_img'); echo $image['sizes']['large']; ?>" alt="" /></a>
          <?php } ?>

          <?php if (get_field('box05_img')) { ?>
          <a href="<?php the_field('box05_link'); ?>" target="_blank"><img src="<?php $image = get_field('box05_img'); echo $image['sizes']['large']; ?>" alt="" /></a>
          <?php } ?>

          <?php if (get_field('box06_img')) { ?>
          <a href="<?php the_field('box06_link'); ?>" target="_blank"><img src="<?php $image = get_field('box06_img'); echo $image['sizes']['large']; ?>" alt="" /></a>
          <?php } ?>

          <?php if (get_field('box07_img')) { ?>
          <a href="<?php the_field('box07_link'); ?>" target="_blank"><img src="<?php $image = get_field('box07_img'); echo $image['sizes']['large']; ?>" alt="" /></a>
          <?php } ?>

          <?php if (get_field('box08_img')) { ?>
          <a href="<?php the_field('box08_link'); ?>" target="_blank"><img src="<?php $image = get_field('box08_img'); echo $image['sizes']['large']; ?>" alt="" /></a>
          <?php } ?>

          <?php if (get_field('box09_img')) { ?>
          <a href="<?php the_field('box09_link'); ?>" target="_blank"><img src="<?php $image = get_field('box09_img'); echo $image['sizes']['large']; ?>" alt="" /></a>
          <?php } ?>
          <!--/ここまで--></div>
          <div class="row article"><?php the_content(); ?></div>
      </div>
    </div>
  </div>
<?php endwhile; ?>

<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>