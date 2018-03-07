<?php /* Template Name: ノーマルページ */ ?>

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
          <?php if (get_field('box01_img')) { ?>
          <div class="box01 clearfix"><div class="fl_l"><?php if (get_field('box01_ttl')) { ?><h3><?php the_field('box01_ttl'); ?></h3><?php } ?>
          <p><?php the_field('box01_txt'); ?></p></div>
          <div class="fl_r"><img src="<?php $image = get_field('box01_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('box01_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('box02_img')) { ?>
          <div class="box02 clearfix"><div class="fl_r"><?php if (get_field('box02_ttl')) { ?><h3><?php the_field('box02_ttl'); ?></h3><?php } ?>
          <p><?php the_field('box02_txt'); ?></p></div>
          <div class="fl_l"><img src="<?php $image = get_field('box02_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('box02_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('box03_img')) { ?>
          <div class="box01 clearfix"><div class="fl_l"><?php if (get_field('box03_ttl')) { ?><h3><?php the_field('box03_ttl'); ?></h3><?php } ?>
          <p><?php the_field('box03_txt'); ?></p></div>
          <div class="fl_r"><img src="<?php $image = get_field('box03_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('box03_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('box04_img')) { ?>
          <div class="box02 clearfix"><div class="fl_r"><?php if (get_field('box04_ttl')) { ?><h3><?php the_field('box04_ttl'); ?></h3><?php } ?>
          <p><?php the_field('box04_txt'); ?></p></div>
          <div class="fl_l"><img src="<?php $image = get_field('box04_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('box04_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('box05_img')) { ?>
          <div class="box01 clearfix"><div class="fl_l"><?php if (get_field('box05_ttl')) { ?><h3><?php the_field('box05_ttl'); ?></h3><?php } ?>
          <p><?php the_field('box05_txt'); ?></p></div>
          <div class="fl_r"><img src="<?php $image = get_field('box05_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('box05_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('box06_img')) { ?>
          <div class="box02 clearfix"><div class="fl_r"><?php if (get_field('box06_ttl')) { ?><h3><?php the_field('box06_ttl'); ?></h3><?php } ?>
          <p><?php the_field('box06_txt'); ?></p></div>
          <div class="fl_l"><img src="<?php $image = get_field('box06_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('box06_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('box07_img')) { ?>
          <div class="box01 clearfix"><div class="fl_l"><?php if (get_field('box07_ttl')) { ?><h3><?php the_field('box07_ttl'); ?></h3><?php } ?>
          <p><?php the_field('box07_txt'); ?></p></div>
          <div class="fl_r"><img src="<?php $image = get_field('box07_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('box07_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('box08_img')) { ?>
          <div class="box02 clearfix"><div class="fl_r"><?php if (get_field('box08_ttl')) { ?><h3><?php the_field('box08_ttl'); ?></h3><?php } ?>
          <p><?php the_field('box08_txt'); ?></p></div>
          <div class="fl_l"><img src="<?php $image = get_field('box08_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('box08_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('box09_img')) { ?>
          <div class="box01 clearfix"><div class="fl_l"><?php if (get_field('box09_ttl')) { ?><h3><?php the_field('box09_ttl'); ?></h3><?php } ?>
          <p><?php the_field('box09_txt'); ?></p></div>
          <div class="fl_r"><img src="<?php $image = get_field('box09_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('box09_ttl'); ?>" /></div>
          </div>
          <?php } ?>

          <?php if (get_field('box10_img')) { ?>
          <div class="box02 clearfix"><div class="fl_r"><?php if (get_field('box10_ttl')) { ?><h3><?php the_field('box10_ttl'); ?></h3><?php } ?>
          <p><?php the_field('box10_txt'); ?></p></div>
          <div class="fl_l"><img src="<?php $image = get_field('box10_img'); echo $image['sizes']['large']; ?>" alt="<?php the_field('box10_ttl'); ?>" /></div>
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