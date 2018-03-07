<?php
// require lib to parse RSS
require_once(__DIR__ . '/lib/Feed.php');
?>
<?php
$options = get_desing_plus_option();

  // center the menu in the header
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
     if($options['use_ogp']) {
?>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<?php } else { ?>
<head>
<?php }; ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PB25X8W');</script>
<!-- End Google Tag Manager -->

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
<!-- ここからOGP -->
<meta property="og:type" content="<?php if($_SERVER["REQUEST_URI"] == "/"){ ?>blog<?php } else { ?>article<?php }?>">
<?php
if (is_single()){//単一記事ページの場合
     if(have_posts()): while(have_posts()): the_post();
          echo '<meta property="og:description" content="'.get_post_meta($post->ID, '_aioseop_description', true).'">';echo "\n";//抜粋を表示
     endwhile; endif;
     echo '<meta property="og:title" content="'; the_title(); echo '">';echo "\n";//単一記事タイトルを表示
     echo '<meta property="og:url" content="'; the_permalink(); echo '">';echo "\n";//単一記事URLを表示
} else {//単一記事ページページ以外の場合（アーカイブページやホームなど）
     echo '<meta property="og:description" content="'; bloginfo('description'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログの説明文を表示
     echo '<meta property="og:title" content="'; bloginfo('name'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログのタイトルを表示
     echo '<meta property="og:url" content="'; echo home_url('/'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログのURLを表示
}
?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<?php
$str = $post->post_content;
$searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';//投稿にイメージがあるか調べる
if (is_single()){//単一記事ページの場合
if (has_post_thumbnail()){//投稿にサムネイルがある場合の処理
     $image_id = get_post_thumbnail_id();
     $image = wp_get_attachment_image_src( $image_id, 'full');
     echo '<meta property="og:image" content="'.$image[0].'">';echo "\n";
} else if ( preg_match( $searchPattern, $str, $imgurl ) && !is_archive()) {//投稿にサムネイルは無いが画像がある場合の処理
     echo '<meta property="og:image" content="'.$imgurl[2].'">';echo "\n";
} else {//投稿にサムネイルも画像も無い場合の処理
     echo '<meta property="og:image" content="'; echo home_url('/ogp.jpg'); echo '">';echo "\n";
}
} else {//単一記事ページページ以外の場合（アーカイブページやホームなど）
     echo '<meta property="og:image" content="'; echo home_url('/ogp.jpg'); echo'">';echo "\n";
}
?>
<?php if(is_home()): ?>  <!-- ←でブログのトップページを判定 -->
<meta name="twitter:description" content="<?php bloginfo('description'); ?>">
<?php elseif(is_page()): ?> <!-- ←で固定ページを判定 -->
<meta name="twitter:description" content="<?php bloginfo('description'); ?>">
<?php else: ?> <!-- ←上記の条件にもれたページ（記事ページ） -->
<meta name="twitter:description" content="<?php echo mb_substr(str_replace(array("rn", "r", "n"), '', strip_tags($post-> post_content)), 0, 100).'...'; ?>">
<?php endif; ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:locale" content="ja_JP" />
<meta property="fb:app_id" content="119423701948389">
<meta name="twitter:card" content="summary_large_image">
<!-- ここまでOGP -->

  <title><?php seo_title(); ?></title>
  <meta name="description" content="<?php seo_description(); ?>">

  <?php if($options['use_ogp']) { ogp(); }; ?>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-precomposed.png" />
  
  <?php wp_head(); ?>
  
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 

 
  <link rel="stylesheet" media="screen and (max-width:991px)" href="<?php echo get_template_directory_uri(); ?>/responsive.css?ver=<?php echo version_num(); ?>">
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFQ1-piZOblXYcJ1F4lpz3uGdT-xYNiIk" type="text/javascript"></script>
  <style type="text/css">
    <?php if($options['fix_header']): ?>
      .site-navigation{position:fixed;}
    <?php else: ?>
      .site-navigation{position:absolute;}
    <?php endif; ?>

  .fa, .wp-icon a:before {display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;transform:translate(0, 0)}
  .fa-phone:before, .wp-icon.wp-fa-phone a:before {content:"\f095"; margin-right:5px;}

  body { font-size:<?php echo $options['content_font_size']; ?>px; }
  a {color: #<?php echo $options['pickedcolor1']; ?>;}
  a:hover {color: #<?php echo $options['pickedcolor2']; ?>;}
  #global_menu ul ul li a{background:#<?php echo $options['pickedcolor1']; ?>;}
  #global_menu ul ul li a:hover{background:#<?php echo $options['pickedcolor2']; ?>;}
  #previous_next_post a:hover{
    background: #<?php echo $options['pickedcolor2']; ?>;
  }
  .social-icon:hover{
    background-color: #<?php echo $options['pickedcolor1']; ?> !important;
  }
  .up-arrow:hover{
    background-color: #<?php echo $options['pickedcolor1']; ?> !important;
  }

  .menu-item:hover *:not(.dropdown-menu *){
    color: #<?php echo $options['pickedcolor1']; ?> !important;
  }
  .menu-item a:hover{
    color: #<?php echo $options['pickedcolor1']; ?> !important;
  }
  .button a, .pager li > a, .pager li > span{
    background-color: #<?php echo $options['pickedcolor2']; ?>;
  }
  .button a:hover, .pager li > a:hover{
    background-color: #<?php echo $options['pickedcolor1']; ?>;
  }
  .button-green a{
    background-color: #<?php echo $options['pickedcolor1']; ?>;
  }
  .button-green a:hover{
    background-color: #<?php echo $options['pickedcolor3']; ?>;
  }
  .timestamp{
    color: #<?php echo $options['pickedcolor1']; ?>;
  }
  .blog-list-timestamp{
    color: #<?php echo $options['pickedcolor1']; ?>;
  }

  .first-h1{
    color: #<?php echo $options['first_color']; ?>;
    text-shadow: <?php echo $options['first_dropshadow_h']; ?>px <?php echo $options['first_dropshadow_v']; ?>px <?php echo $options['first_dropshadow_b']; ?>px #<?php echo $options['first_dropshadow_c']; ?> !important;
  }
  .second-body, .second-body{
    color: #<?php echo $options['second_color']; ?>;
  }
  .top-headline.third_headline{
      color: #<?php echo $options['third_color']; ?>;
      text-shadow: <?php echo $options['third_dropshadow_h']; ?>px <?php echo $options['third_dropshadow_v']; ?>px <?php echo $options['third_dropshadow_b']; ?>px #<?php echo $options['third_dropshadow_c']; ?>;
  }
  .top-headline.fourth_headline{
      color: #<?php echo $options['fourth_color']; ?>;
      text-shadow: <?php echo $options['fourth_dropshadow_h']; ?>px <?php echo $options['fourth_dropshadow_v']; ?>px <?php echo $options['fourth_dropshadow_b']; ?>px #<?php echo $options['fourth_dropshadow_c']; ?>;
  }
  .top-headline.fifth_headline{
      color: #<?php echo $options['fifth_color']; ?>;
      text-shadow: <?php echo $options['fifth_dropshadow_h']; ?>px <?php echo $options['fifth_dropshadow_v']; ?>px <?php echo $options['fifth_dropshadow_b']; ?>px #<?php echo $options['fifth_dropshadow_c']; ?>;
  }

  .top-headline{
      color: #<?php echo $options['blog_color']; ?>;
      text-shadow: <?php echo $options['blog_dropshadow_h']; ?>px <?php echo $options['blog_dropshadow_v']; ?>px <?php echo $options['blog_dropshadow_b']; ?>px #<?php echo $options['blog_dropshadow_c']; ?>;
  }

  .thumb:hover:after{
      box-shadow: inset 0 0 0 7px #<?php echo $options['pickedcolor1']; ?>;
  }


  <?php if ($options['use_break_word']){ ?>
  p { word-wrap:break-word; }
  <?php }; ?>

  <?php echo $options['css_code']; ?>

  <?php if(get_post_meta($post->ID, "custom_css", true)){
    echo get_post_meta($post->ID, "custom_css", true);
  }; ?>

  .feed_section article{
        width: 31%;
    float: left;
    margin: 10px 1%;
    min-height: 260px;
    overflow: hidden;
  }
 .feed_section article .sumbox{
   position: relative;
 }
  .feed_section article .sumbox:after{
    position: absolute;
    display: block;
    content: "";
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -webkit-transition: all 0.1s ease;
    -moz-transition: all 0.1s ease;
    -o-transition: all 0.1s ease;
    transition: all 0.1s ease;
  }
 .feed_section article .sumbox:hover:after{
       position: absolute;
    display: block;
    content: "";
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: inset 0 0 0 7px #C81423;
 }


  @media(max-width:768px){

    .feed_section article .sumbox{
      float: left;
      width: 30%;
      height: auto !important;
    
    }
    .feed_section article .title{
      font-size: 13px;
    }
    .feed_section article .entry-content{
      float: right;
      width: 66%;
    }
    .feed_section article .description{
      font-size: 12px;
    }

    .feed_section .container{
      display: flex;
      -webkit-flex-wrap: wrap;
          -ms-flex-wrap: wrap;
              flex-wrap: wrap;
    }
      .feed_section article{  width: 100%;
      min-height: inherit;
      }
      .site-navigation{
        z-index: 999999999;
      }
      .feed_section article .entry-meta{
        margin: 0 !important;
        margin-top: -5px !important;
      }
      .navbar-nav{
        padding-bottom: 80px !important;
      }
   
  }
  #main-menu li ul li.current-menu-item a{
    color: black;
  } 
  .feed_section article .entry-meta{
    margin: 5px 0;
    margin-bottom: 0;
  }
  .feed_section article  a{
    text-decoration: none !important;
  }
  .feed_section article  .title{
    font-weight: bold;
    color: black;
  }
  .feed_section article p{
    color: black;
  }
  .feed_section article .entry-meta{
        font-size: 13px;
    font-weight: bold;
    color: #C81423;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", Meiryo, sans-serif;
  }
    .feed_section article .entry-meta i{
      font-size: 16px;
      color: black;
    }
   .feed_section article .sumbox{
    height: 210px;
    overflow: hidden;
   }
    .feed_section article .sumbox img{
      min-height: 210px;
      width: 100%;
    }
      @media (max-width:768px) {
      .feed_section article .sumbox img{
      min-height: inherit;
      width: 100%;
     }
     .navbar-nav > li > .dropdown-menu{
       -webkit-box-shadow: none;
               box-shadow: none;
     }
      .right-menu ul li a{
       color: black !important;
     }
    }

    #trust-form.contact-form table tr th:first-of-type{
      width: 350px;
    
    }
    @media(max-width:768px){
       #trust-form.contact-form table tr th:first-of-type{
      width: 50%;
     
      }
    }
    #trust-form.contact-form input,#trust-form.contact-form textarea{
      width: 100%;
    }
    #trust-form.contact-form input[type=checkbox]{
      width: 20px;
    }
    #trust-form.contact-form textarea{
      height: 110px;
    }
    div#trust-form.contact-form table div{
      padding-right: 0;
    }
     #trust-form.contact-form input[type=submit]{
       width: 90px;
     }
         @media(max-width:768px){
       #trust-form.contact-form table tr th:first-of-type{
      width: 100%;
     
      }
     
         #trust-form.contact-form input,#trust-form.contact-form textarea{
                width: 100%;

        }
    }
</style>

</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PB25X8W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <?php do_action( 'before' ); ?>

  <div id="verytop"></div>
  <nav id="header" class="site-navigation">
  <?php // substitute the class "container-fluid" below if you want a wider content area ?>
    <div class="container">
      <div class="row">
        <div class="site-navigation-inner col-xs-120 no-padding" style="padding:0px">
          <div class="navbar navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style='z-index:3000'>
                <span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <div id="logo-area">
                <?php the_dp_logo(); ?>
                <?php if ($options['phonenumber'] && 2 == 3) : ?>
                  <a href="tel:<?php echo $options['phonenumber']; ?>">
                    <button id="telephone" type="button" class="navbar-toggle visible-xs text-left" style='padding-left:0; padding-right:0px; z-index:3000; color:white; position:absolute; top:0px; width:160px'>
                      <span><?php echo $options['phonenumber']; ?></span>
                    </button>
                  </a>
                <?php endif; ?>
              </div>

            </div>

            <!-- The WordPress Menu goes here -->
            <div class="pull-right right-menu">
              <?php if(!$options['tel_header']): ?>
              <?php wp_nav_menu(
                array(
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'menu_id'           => 'main-menu',
                  'walker'            => new wp_bootstrap_navwalker()
                )
              ); ?>
              <?php else: ?>
                <?php if(is_mobile()): ?>
                  <?php wp_nav_menu(
                    array(
                      'theme_location'    => 'primary',
                      'depth'             => 2,
                      'container'         => 'div',
                      'container_class'   => 'collapse navbar-collapse',
                      'menu_class'        => 'nav navbar-nav',
                      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                      'menu_id'           => 'main-menu',
                      'walker'            => new wp_bootstrap_navwalker()
                    )
                  ); ?>
                <?php else: ?>
              <div id="header-phonenumber"><?php echo $options['phonenumber']; ?></div>
                <?php endif; ?>
              <?php endif; ?>
            </div>

          </div><!-- .navbar -->
        </div>
      </div>
    </div><!-- .container -->
  </nav><!-- .site-navigation -->

<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
  <?php if(is_single()): ?>
  <div class="amore-divider romaji" data-parallax="scroll" data-image-src="<?php echo $options['bg_image6']; ?>">
    <div class="container">
      <div class="row">
        <div class="col-xs-120">
          <div class="top-headline" style="margin-top: 50px; margin-bottom: -20px;"><?php echo $options['blog_headline']; ?></div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>