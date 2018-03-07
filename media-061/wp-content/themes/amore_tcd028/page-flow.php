<?php /* Template Name: フローページ */ ?>

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
          <?php if (get_field('flow01_img')) { ?>
          <div class="flow_box clearfix"><div class="fl_l"><?php if (get_field('flow01_ttl')) { ?><h3><?php the_field('flow01_ttl'); ?></h3><?php } ?>
          <p><?php the_field('flow01_txt'); ?></p></div>
          <div class="fl_r"><img src="<?php $image = get_field('flow01_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('flow01_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('flow02_img')) { ?>
          <div class="flow_box clearfix"><div class="fl_l"><?php if (get_field('flow02_ttl')) { ?><h3><?php the_field('flow02_ttl'); ?></h3><?php } ?>
          <p><?php the_field('flow02_txt'); ?></p></div>
          <div class="fl_r"><img src="<?php $image = get_field('flow02_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('flow02_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('flow03_img')) { ?>
          <div class="flow_box clearfix"><div class="fl_l"><?php if (get_field('flow03_ttl')) { ?><h3><?php the_field('flow03_ttl'); ?></h3><?php } ?>
          <p><?php the_field('flow03_txt'); ?></p></div>
          <div class="fl_r"><img src="<?php $image = get_field('flow03_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('flow03_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('flow04_img')) { ?>
          <div class="flow_box clearfix"><div class="fl_l"><?php if (get_field('flow04_ttl')) { ?><h3><?php the_field('flow04_ttl'); ?></h3><?php } ?>
          <p><?php the_field('flow04_txt'); ?></p></div>
          <div class="fl_r"><img src="<?php $image = get_field('flow04_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('flow04_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('flow05_img')) { ?>
          <div class="flow_box clearfix"><div class="fl_l"><?php if (get_field('flow05_ttl')) { ?><h3><?php the_field('flow05_ttl'); ?></h3><?php } ?>
          <p><?php the_field('flow05_txt'); ?></p></div>
          <div class="fl_r"><img src="<?php $image = get_field('flow05_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('flow05_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('flow06_img')) { ?>
          <div class="flow_box clearfix"><div class="fl_l"><?php if (get_field('flow06_ttl')) { ?><h3><?php the_field('flow06_ttl'); ?></h3><?php } ?>
          <p><?php the_field('flow06_txt'); ?></p></div>
          <div class="fl_r"><img src="<?php $image = get_field('flow06_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('flow06_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('flow07_img')) { ?>
          <div class="flow_box clearfix"><div class="fl_l"><?php if (get_field('flow07_ttl')) { ?><h3><?php the_field('flow07_ttl'); ?></h3><?php } ?>
          <p><?php the_field('flow07_txt'); ?></p></div>
          <div class="fl_r"><img src="<?php $image = get_field('flow07_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('flow07_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('flow08_img')) { ?>
          <div class="flow_box clearfix"><div class="fl_l"><?php if (get_field('flow08_ttl')) { ?><h3><?php the_field('flow08_ttl'); ?></h3><?php } ?>
          <p><?php the_field('flow08_txt'); ?></p></div>
          <div class="fl_r"><img src="<?php $image = get_field('flow08_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('flow08_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('flow09_img')) { ?>
          <div class="flow_box clearfix"><div class="fl_l"><?php if (get_field('flow09_ttl')) { ?><h3><?php the_field('flow09_ttl'); ?></h3><?php } ?>
          <p><?php the_field('flow09_txt'); ?></p></div>
          <div class="fl_r"><img src="<?php $image = get_field('flow09_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('flow09_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('flow10_img')) { ?>
          <div class="flow_lbox clearfix"><div class="fl_l"><?php if (get_field('flow10_ttl')) { ?><h3><?php the_field('flow10_ttl'); ?></h3><?php } ?>
          <p><?php the_field('flow10_txt'); ?></p></div>
          <div class="fl_r"><img src="<?php $image = get_field('flow10_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('flow10_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <!--/ここまで-->
          <div class="row article"><?php the_content(); ?>
          <?php if (get_field('bnr01')) { ?>
          <p></p>
          <ul class="bosyu_bnr"><li><a href="<?php the_field('link01'); ?>"><img src="<?php $image = get_field('bnr01'); echo $image['sizes']['large']; ?>" alt="" /></a></li>
          <li><a href="<?php the_field('link02'); ?>"><img src="<?php $image = get_field('bnr02'); echo $image['sizes']['large']; ?>" alt="" /></a></li>
          <li><a href="<?php the_field('link03'); ?>"><img src="<?php $image = get_field('bnr03'); echo $image['sizes']['large']; ?>" alt="" /></a></li>
          <li><a href="<?php the_field('link04'); ?>"><img src="<?php $image = get_field('bnr04'); echo $image['sizes']['large']; ?>" alt="" /></a></li>
          <li><a href="<?php the_field('link05'); ?>" target="_blank"><img src="<?php $image = get_field('bnr05'); echo $image['sizes']['large']; ?>" alt="" /></a></li></ul>
          <?php } ?></div>
      </div>
    </div>
  </div>
<?php endwhile; ?>

<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>