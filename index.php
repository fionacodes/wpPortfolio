<?php get_header(); ?>

<main id="main" class="wrapper">

  <!-- BEGIN ABOUT SECTION  -->
    <section class="about" id="about">
      <h2>About.</h2>

        <div class="grid center">
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <p><?php the_field('about') ?></p>

            <?php endwhile; ?> <!-- END POST QUERY -->

            <!-- BEGIN SKILLS AREA  -->
            <div class="skills" id="skills">
              <h3>skills.</h3>
                <ul class="iconSkills">
                  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                    <p><?php the_field('skills') ?></p>

                  <?php endwhile; ?> <!-- END POST QUERY -->
                </ul>
            </div> <!-- END SKILLS AREA -->
          </div>
    </section> <!-- END ABOUT SECTION -->

  <!-- BEGIN PORTFOLIO SECTION -->
  <section class="portfolio" id="portfolio">
    <h2>Portfolio.</h2>

    <?php 
    $portfolio = new WP_Query(
      array(
        'post_type' => 'portfolio',
        'posts_per_page' => -1,
        'order' => 'ASC'
      )
    ); ?> <!-- END PORTFOLIO QUERY -->

    <?php if ($portfolio->have_posts()): ?>
    <?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?>

      <?php while(have_rows('images')): the_row();  ?>
        <?php $image = get_sub_field('image') ?>

        <!-- BEGIN PORTFOLIO QUERY -->
        <div class="grid-section">
          <div class="grid-container">
              <div class="grid-wrap">
                <div class="grid-content">
                  <span>
                    <a href="<?php the_field('portfolio_url') ?>" target="_blank">
                    <div class="grid">
                      <figure class="effect-hover">
                        <img src="<?php echo $image['url'] ?>" alt="<?php the_field('portfolio_name') ?> project"/>
                        <figcaption>
                          <p>view <?php the_field('portfolio_name') ?> live</a>
                        </figcaption>     
                      </figure>
                      </a>
                    </div>
                  </span>
                </div>
              </div>
          </div>

          <div class="grid-container">
              <div class="grid-wrap">
                <div class="grid-content">
                  <span class="grid-desc">
                    <h3><?php the_title(); ?></h3>
                      <p><?php the_content(); ?></p>
                    <p><?php the_field('language') ?></p>
                  </span>
                </div>
              </div>
          </div>
        </div>
      <?php endwhile ?> <!-- END PORTFOLIO CONTENT LOOP --> 
     
    <?php endwhile; ?> <!-- END PORTFOLIO POSTS LOOP -->
    <?php wp_reset_postdata(); ?>
    <?php endif; ?> <!-- END PORTFOLIO QUERY -->
  </section> <!-- END PORTFOLIO SECTION -->

<?php get_footer(); ?>  