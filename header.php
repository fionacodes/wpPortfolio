<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="topbar">
    <h1 class="logo">
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>

    <div id="toggle" class="button_container">
      <span class="top"></span>
      <span class="middle"></span>
      <span class="bottom"></span>
    </div>
    <div id="overlay" class="overlay">
      <nav>
        <ul>
          <li><a href="#about" class="navOverlay">About</a></li>
          <li><a href="#portfolio" class="navOverlay">Portfolio</a></li>
          <li><a href="#contact" class="navOverlay">Contact</a></li>
        </ul>
      </nav>
  </div>
  </div>

  <div class="hero animated fadeIn">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>

      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>

    <a href="#main" class="hero-arrow"><img src="wp-content/themes/portfolio/images/arrow.svg" class="arrow animated pulse infinite"></a>
  </div>

</header><!--/.header-->


