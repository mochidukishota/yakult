<?php
$options = get_desing_plus_option();
get_header(); ?>

  <div class="amore-divider romaji" data-parallax="scroll" data-image-src="<?php echo $options['bg_image6']; ?>">
    <div class="container">
      <div class="row">
        <div class="col-xs-120 no-padding">
          <h2 class="top-headline" style="margin-top: 50px; margin-bottom: -20px;"><?php echo $options['blog_headline']; ?></h2>
        </div>
      </div>
    </div>
  </div>

  <div class="container amore-inner-container">
    <div class="row">
      <div id="infiniscroll" class="col-xs-120 no-padding">
        <?php if($options['show_bread']) : ?>
        <div class="breadcrumb">
        <a href="<?php echo home_url('/'); ?>"><span>トップページ</span></a>
        <span class="fa fa-chevron-right text-muted" style="font-size:10px">&nbsp;</span>
        <span class="romaji"><?php echo $options['blog_headline']; ?></span>
        </div>
        <?php endif; ?>

        <div id="blog-index">
        <div class="row" style="padding-right:15px">
          <?php if ( have_posts() ) : ?>
            <?php $x = 2; ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php $x++;
                if($x % 3) : ?>
                  <div class="col-sm-38 col-sm-offset-3">
                    <div class="row">
                      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class='col-sm-120 col-xs-60 mb20' style='padding-right:0px'>
                          <a href="<?php the_permalink(); ?>"><div class="thumb blog-list-thumb"><?php if ( has_post_thumbnail()) { the_post_thumbnail('size1'); } else { echo '<img src="'; echo catch_that_image2($post->post_content); echo '">'; }; ?></div></a>
                        </div>
                        <div class='col-sm-120 col-xs-60'>
                          <?php if ($options['show_date']) { echo "<span class='fa fa-clock-o'></span><span class='blog-list-timestamp romaji'>&nbsp;" . get_the_date('Y') . '.' . get_the_date('m') . '.' . get_post_time('j') . "</span>　";}; ?>
                          <?php if ($options['show_category']) { ?><span class="cate"><?php the_category(', '); ?></span><?php }; ?>
                          <h4 class='blog-list-title'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                          <p class="blog-list-body"><a href="<?php the_permalink(); ?>"><?php if(has_excerpt()){ the_excerpt(); }else{ new_excerpt(40); }; ?></a></p>
                        </div>
                      </article><!-- #post-## -->
                    </div>
                  </div>
                <?php else : ?>
                  <div class="col-sm-38">
                    <div class="row">
                      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class='col-sm-120 col-xs-60 mb20' style='padding-right:0px'>
                          <a href="<?php the_permalink(); ?>"><div class="thumb blog-list-thumb"><?php if ( has_post_thumbnail()) { the_post_thumbnail('size1'); } else { echo '<img src="'; echo catch_that_image2($post->post_content); echo '">'; }; ?></div></a>
                        </div>
                        <div class='col-sm-120 col-xs-60'>
                          <?php if ($options['show_date']) { echo "<span class='fa fa-clock-o'></span><span class='blog-list-timestamp romaji'>&nbsp;" . get_the_date('Y') . '.' . get_the_date('m') . '.' . get_post_time('j') . "</span>　";}; ?>
                          <?php if ($options['show_category']) { ?><span class="cate"><?php the_category(', '); ?></span><?php }; ?>
                          <h4 class='blog-list-title'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                          <p class="blog-list-body"><a href="<?php the_permalink(); ?>"><?php if(has_excerpt()){ the_excerpt(); }else{ new_excerpt(40); }; ?></a></p>
                        </div>
                      </article><!-- #post-## -->
                    </div>
                  </div>
                <?php endif ?>

            <?php 
              $counter++;
              if ($counter % 3 == 0) {
                echo '</div><div class="row" style="padding-right:15px">';
              }
            ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        </div>
      </div>

      <?php /* _tk_content_nav( 'nav-below' ); */ ?>
      <div class="col-xs-120 text-center blog-load-btn">
        <ul class="pager"><li class="button" id="pagerbutton"><a id="pagerlink" onclick="page_ajax_get()"><?php _e('Read more', 'tcd-w'); ?></a></li></ul>
      </div>
    </div>
  </div>
</div><!-- .main-content -->
<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>