<?php

  get_header();

  $category = get_category( get_query_var( 'cat' ) );
  $cat_id = $category->cat_ID;

  if( $cat_id ){
    $cat_id = $cat_id;
  } else {
    $cat_id = 'null';
  }

?>

<style type="text/css" media="screen">
.read-more a{
  padding-top:0px !important;
  padding-bottom:0px !important;
}
</style>

  <div class="amore-divider romaji" data-parallax="scroll" data-image-src="<?php echo $options['bg_image6']; ?>">
    <div class="container">
      <div class="row">
        <div class="col-xs-120">
          <h2 class="top-headline">ARCHIVE</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="container amore-inner-container">
    <div class="row">
      <div id="infiniscroll" class="col-xs-120 no-padding">
        <?php if($options['show_bread']) : ?>
        <div class="breadcrumb mb20">
        <a href="<?php echo home_url('/'); ?>"><span>トップページ</span></a>
        <span class="romaji"><?php if($options['blog_url']){ echo '<a href="',$options['blog_url'],'">'; }; ?><?php echo $options['blog_headline']; ?><?php if($options['blog_url']){ echo '</a>'; }; ?></span>
        <span class="fa fa-chevron-right text-muted" style="font-size:10px">&nbsp;</span>
        <span>
  				<?php
  					if ( is_category() ) :
  						single_cat_title();

  					elseif ( is_tag() ) :
  						single_tag_title();

  					elseif ( is_author() ) :
  						/* Queue the first post, that way we know
  						 * what author we're dealing with (if that is the case).
  						*/
  						the_post();
  						printf( __( 'Author: %s', '_tk' ), '<span class="vcard">' . get_the_author() . '</span>' );
  						/* Since we called the_post() above, we need to
  						 * rewind the loop back to the beginning that way
  						 * we can run the loop properly, in full.
  						 */
  						rewind_posts();

  					elseif ( is_day() ) :
  						printf( '<span>' . get_the_date() . '</span>' );

  					elseif ( is_month() ) :
  						printf( '<span>' . get_the_date( 'Y F' ) . '</span>' );

  					elseif ( is_year() ) :
  						printf( '<span>' . get_the_date( 'Y' ) . '</span>' );

  					elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
  						_e( 'Asides', '_tk' );

  					elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
  						_e( 'Images', '_tk');

  					elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
  						_e( 'Videos', '_tk' );

  					elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
  						_e( 'Quotes', '_tk' );

  					elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
  						_e( 'Links', '_tk' );

  					else :
  						_e( 'Archives', '_tk' );

  					endif;
  				?>
        </span>
        </div>
        <?php endif; ?>
        <h3 class="cate-title<?php if(category_description()){ echo ' mb10';}else{ echo ' mb50';}; ?>">
          <?php
            if ( is_category() ) :
              single_cat_title();
            elseif( is_day()) :
              echo get_the_date();
            elseif( is_month()) :
              echo get_the_date( 'Y F' );
            elseif( is_year()) :
              echo get_the_date( 'Y' );
            elseif ( is_tag() ) :
              single_tag_title();
            elseif ( is_author() ) :
              the_post();
              printf( __( 'Author: %s', '_tk' ), '<span class="vcard">' . get_the_author() . '</span>' );
              rewind_posts();
            endif;
          ?>
        </h3>
        <?php if(is_category()&&category_description()) : ?>
          <div class="cate-desc mb50"><?php echo category_description(); ?></div>
        <?php endif; ?>
        
        <div id="blog-index">
        <div class="row" style="padding-right:15px">
          <?php if ( have_posts() ) : ?>
            <?php $imageFullWidth = true; $x = 2;　?>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php $x++;
                if($x % 3) : ?>
                  <div class="col-sm-38 col-sm-offset-3">
                    <div class="row">
                      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class='col-sm-120 col-xs-60 mb20' style='padding-right:0px'>
                          <a href="<?php the_permalink() ?>"><div class="thumb blog-list-thumb"><?php if ( has_post_thumbnail()) { the_post_thumbnail('size1'); } else { echo '<img src="'; echo catch_that_image2($post->post_content); echo '">'; }; ?></div></a>
                        </div>
                        <div class='col-sm-120 col-xs-60'>
                          <?php if ($options['show_date']) { echo "<span class='fa fa-clock-o'></span><span class='blog-list-timestamp romaji'>&nbsp;" . get_the_date('Y') . '.' . get_the_date('m') . '.' . get_post_time('j') . "</span>　";}; ?>
                          <?php if ($options['show_category']) { ?><span class="cate"><?php the_category(', '); ?></span><?php }; ?>
                          <h4 class='blog-list-title'><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                          <p class="blog-list-body"><a href="<?php the_permalink() ?>"><?php if(has_excerpt()){ the_excerpt(); }else{ new_excerpt(40); }; ?></a></p>
                        </div>
                      </article><!-- #post-## -->
                    </div>
                  </div>
                <?php else : ?>
                  <div class="col-sm-38">
                    <div class="row">
                      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class='col-sm-120 col-xs-60 mb20' style='padding-right:0px'>
                          <a href="<?php the_permalink() ?>"><div class="thumb blog-list-thumb"><?php if ( has_post_thumbnail()) { the_post_thumbnail('size1'); } else { echo '<img src="'; echo catch_that_image2($post->post_content); echo '">'; }; ?></div></a>
                        </div>
                        <div class='col-sm-120 col-xs-60'>
                          <?php if ($options['show_date']) { echo "<span class='fa fa-clock-o'></span><span class='blog-list-timestamp romaji'>&nbsp;" . get_the_date('Y') . '.' . get_the_date('m') . '.' . get_post_time('j') . "</span>　";}; ?>
                          <?php if ($options['show_category']) { ?><span class="cate"><?php the_category(', '); ?></span><?php }; ?>
                          <h4 class='blog-list-title'><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                          <p class="blog-list-body"><a href="<?php the_permalink() ?>"><?php if(has_excerpt()){ the_excerpt(); }else{ new_excerpt(40); }; ?></a></p>
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
        <ul class="pager"><li class="button" id="pagerbutton"><a id="pagerlink" onclick="page_ajax_get(<?php echo $cat_id; ?>)"><?php _e('Read more', 'tcd-w'); ?></a></li></ul>
      </div>
    </div>
  </div>
</div><!-- .main-content -->
<?php get_footer(); ?>